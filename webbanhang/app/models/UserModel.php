<?php
class UserModel
{
    private $conn;
    private $table_name = "user";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function register($username, $password, $fullname)
    {
        $errors = [];
        if (empty($username)) {
            $errors['username'] = 'Ten dang nhap khong duoc de trong';
        }
        if (empty($password)) {
            $errors['password'] = 'Mat khau khong duoc de trong';
        }
        if (strlen($password) < 6) {
            $errors['password'] = 'Mat khau phai co it nhat 6 ky tu';
        }
        if (empty($fullname)) {
            $errors['fullname'] = 'Ho ten khong duoc de trong';
        }

        // Check if username already exists
        $checkQuery = "SELECT id FROM " . $this->table_name . " WHERE username = :username";
        $checkStmt = $this->conn->prepare($checkQuery);
        $checkStmt->bindParam(':username', $username);
        $checkStmt->execute();
        if ($checkStmt->fetch()) {
            $errors['username'] = 'Ten dang nhap da ton tai';
        }

        if (count($errors) > 0) {
            return $errors;
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO " . $this->table_name . " (username, password, fullname) VALUES (:username, :password, :fullname)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':fullname', $fullname);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function login($username, $password)
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE username = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_OBJ);

        if ($user && password_verify($password, $user->password)) {
            return $user;
        }
        return false;
    }

    public function getUserById($id)
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
?>
