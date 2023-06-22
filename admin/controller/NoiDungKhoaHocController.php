<?php

class NoiDungKhoaHocController {
    public function index() {
        require 'model/NoiDungKhoaHoc.php';
        $arr = (new NoiDungKhoaHoc())->all();
        require 'view/NoiDung/index.php';
    }
    public function create() {
        require 'model/KhoaHoc.php';
        $khoahocs = (new KhoaHoc())->all();
        require 'view/NoiDung/create.php';
    }
    public function store() {
        require 'model/NoiDungKhoaHoc.php';
        (new NoiDungKhoaHoc())->create($_POST);
        header('location: index.php?controller=noidung');
    }
    public function edit() {
        $maNoiDung = $_GET['maNoiDung'];
        require 'model/NoiDungKhoaHoc.php';
        $each = (new NoiDungKhoaHoc())->find($maNoiDung);

        require 'model/KhoaHoc.php';
        $khoahocs = (new KhoaHoc())->all();

        require 'view/NoiDung/edit.php';
    }

    public function update() {
        require 'model/NoiDungKhoaHoc.php';
        (new NoiDungKhoaHoc())->update($_POST);
        header('location: index.php?controller=noidung');
    }

    public function delete() {
        $maNoiDung = $_GET['maNoiDung'];
        require 'model/NoiDungKhoaHoc.php';
        (new NoiDungKhoaHoc())->delete($maNoiDung);
        header('location: index.php?controller=noidung');
    }
}