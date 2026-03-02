<?php
require_once('app/config/database.php');
require_once('app/models/UserModel.php');

class UserController
{
    private $userModel;
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
        $this->userModel = new UserModel($this->db);
    }

    public function login()
    {
        include 'app/views/user/login.php';
    }

    public function handleLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            $user = $this->userModel->login($username, $password);
            if ($user) {
                $_SESSION['user_id'] = $user->id;
                $_SESSION['username'] = $user->username;
                $_SESSION['fullname'] = $user->fullname;
                header('Location: /webbanhang/Product');
                exit;
            } else {
                $error = 'Ten dang nhap hoac mat khau khong dung';
                include 'app/views/user/login.php';
            }
        }
    }

    public function register()
    {
        include 'app/views/user/register.php';
    }

    public function handleRegister()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            $fullname = $_POST['fullname'] ?? '';

            $result = $this->userModel->register($username, $password, $fullname);

            if ($result === true) {
                header('Location: /webbanhang/User/login');
                exit;
            } else {
                $errors = $result;
                include 'app/views/user/register.php';
            }
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: /webbanhang/User/login');
        exit;
    }
}
?>
