<?php

class NoiDungKhoaHocObject {
    private $maNoiDung;
    private $maKhoaHoc;
    private $noiDungKhoaHoc;
    private $tenKhoaHoc;

    public function __construct($row) {
        $this->maNoiDung = $row['maNoiDung'] ?? '';
        $this->maKhoaHoc = $row['maKhoaHoc'] ?? " ";
        $this->noiDungKhoaHoc = $row['noiDungKhoaHoc'];
        $this->tenKhoaHoc = $row['tenKhoaHoc'] ?? " ";
    }

    public function get_maNoiDung() {
        return $this->maNoiDung;
    }
    public function set_maNoiDung($var) {
        $this->maNoiDung = $var;
    }

    public function get_maKhoaHoc() {
        return $this->maKhoaHoc;
    }
    public function set_maKhoaHoc($var) {
        $this->maKhoaHoc = $var;
    }
    public function get_noiDungKhoaHoc() {
        return $this->noiDungKhoaHoc;
    }
    public function set_noiDungKhoaHoc($var) {
        $this->noiDungKhoaHoc = $var;
    }
    public function get_tenKhoaHoc() {
        return $this->tenKhoaHoc;
    }
    public function set_tenKhoaHoc($var) {
        $this->tenKhoaHoc = $var;
    }
}