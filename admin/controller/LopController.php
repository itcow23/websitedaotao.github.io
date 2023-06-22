<?php

class LopController{
    public function index() {
        require 'model/Lop.php';
        $arr = (new Lop())->all();
        require 'view/Lop/index.php';
    }
    public function create() {
        require 'view/Lop/create.php';
    }
    public function store() {
        require 'model/Lop.php';
        (new Lop())->create($_POST);
        header('location: index.php?controller=lop');
    }
    public function edit() {
        $maLop = $_GET['maLop'];
        require 'model/Lop.php';
        $each = (new Lop())->find($maLop);
        require 'model/KhoaHoc.php';
        $khoahocs = (new KhoaHoc())->all();
        require 'model/KhachHang.php';
        $noidungs = (new KhachHang())->GV();
        require 'view/Lop/edit.php';
    }
    public function update() {
        require 'model/Lop.php';
        (new Lop())->update($_POST);
        header('location: index.php?controller=lop');
    }

    public function delete() {
        $maLop = $_GET['maLop'];
        require 'model/Lop.php';
        (new Lop())->delete($maLop);
        header('location: index.php?controller=lop');
    }
}