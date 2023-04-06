<?php

class KhachHangController{
    public function index(){
        require 'model/KhachHang.php';
        $arr = (new KhachHang())->all();
        require 'view/KhachHang/index.php';
    }
    public function create(){
        require 'view/KhachHang/create.php';
    }
    public function store(){
        require 'model/KhachHang.php';
        (new KhachHang())->create($_POST);
        header('location: index.php?controller=khachhang');
    }
    public function edit(){
        $maKH=$_GET['maKH'];
        require 'model/KhachHang.php';
        $each = (new KhachHang())->find($maKH);
        require 'view/KhachHang/edit.php';
    }
    public function update(){
        require 'model/KhachHang.php';
        (new KhachHang())->update($_POST);
        header('location: index.php?controller=khachhang');
    }
    public function delete(){
        $maKH=$_GET['maKH'];
        require 'model/KhachHang.php';
        (new KhachHang())->delete($maKH);
        header('location: index.php?controller=khachhang');
    }
}