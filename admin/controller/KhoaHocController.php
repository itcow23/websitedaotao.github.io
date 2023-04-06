<?php

class KhoaHocController{
    public function index(){
        require 'model/KhoaHoc.php';
        $arr = (new KhoaHoc())->all();
        require 'view/KhoaHoc/index.php';
    }

    public function create(){
        require 'view/KhoaHoc/create.php';
    }
    public function store(){
        require 'model/KhoaHoc.php';
        (new KhoaHoc())->create($_POST);
        header('location: index.php?controller=khoahoc');
    }
    public function edit(){
        $maKhoaHoc=$_GET['maKhoaHoc'];
        require 'model/KhoaHoc.php';
        $each = (new KhoaHoc())->find($maKhoaHoc);
        require 'view/KhoaHoc/edit.php';
    }
    public function update(){
        require 'model/KhoaHoc.php';
        (new KhoaHoc())->update($_POST);
        header('location: index.php?controller=khoahoc');
    }
    public function delete(){
        $maKhoaHoc=$_GET['maKhoaHoc'];
        require 'model/KhoaHoc.php';
        (new KhoaHoc())->delete($maKhoaHoc);
        header('location: index.php?controller=khoahoc');
    }
}