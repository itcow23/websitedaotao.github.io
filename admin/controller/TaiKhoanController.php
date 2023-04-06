<?php

class TaiKhoanController {
    public function index() {
        require 'model/TaiKhoan.php';
        $arr = (new TaiKhoan())->all();
        require 'view/TaiKhoan/index.php';
    }

    public function delete() {
        $maTaiKhoan = $_GET['id'];
        require 'model/TaiKhoan.php';
        (new TaiKhoan())->delete($maTaiKhoan);
        header('location: index.php?controller=taikhoan');
    }
}