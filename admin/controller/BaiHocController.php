<?php

class BaiHocController {
    public function index() {
        require 'model/BaiHoc.php';
        $arr = (new BaiHoc())->all();
        require 'view/BaiHoc/index.php';
    }

    public function create() {
        require 'model/KhoaHoc.php';
        $khoahocs = (new KhoaHoc())->all();
        require 'model/NoiDungKhoaHoc.php';
        $noidungs = (new NoiDungKhoaHoc())->all();
        require 'view/BaiHoc/create.php';
    }

    public function store() {
        require 'model/BaiHoc.php';
        (new BaiHoc())->create($_POST);
        header('location: index.php?controller=baihoc');
    }
    public function edit() {
        $maBaiHoc = $_GET['maBaiHoc'];
        require 'model/BaiHoc.php';
        $each = (new BaiHoc())->find($maBaiHoc);
        require 'model/KhoaHoc.php';
        $khoahocs = (new KhoaHoc())->all();
        require 'model/NoiDungKhoaHoc.php';
        $noidungs = (new NoiDungKhoaHoc())->all();
        require 'view/BaiHoc/edit.php';
    }
    public function update() {
        require 'model/BaiHoc.php';
        (new BaiHoc())->update($_POST);
        header('location: index.php?controller=baihoc');
    }

    public function delete() {
        $maBaiHoc = $_GET['maBaiHoc'];
        require 'model/BaiHoc.php';
        (new BaiHoc())->delete($maBaiHoc);
        header('location: index.php?controller=baihoc');
    }
}