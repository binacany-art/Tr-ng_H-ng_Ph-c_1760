<?php
class DefaultController
{
    public function index()
    {
        // Chuyển hướng đến trang danh sách sản phẩm
        header('Location: /webbanhang/Product');
        exit;
    }
}
?>
