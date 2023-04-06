<?php

class KhoaHocObject{
    private $maKhoaHoc;
    private $tenKhoaHoc;
    private $moTa;
    private $thoiGian;
    private $anh;
    private $trangThai;

    public function __construct($row){
        $this->maKhoaHoc = $row['maKhoaHoc'] ?? '';
        $this->tenKhoaHoc = $row['tenKhoaHoc'];
        $this->moTa = $row['moTa'];
        $this->thoiGian = $row['thoiGian'];
        $this->anh = $row['anh'];
        $this->trangThai = $row['trangThai'];
    }

    public function get_maKhoaHoc(){
        return $this->maKhoaHoc;
    }

    public function set_makhoaHoc($var){
        $this->maKhoaHoc = $var;
    }
    public function get_tenKhoaHoc(){
        return $this->tenKhoaHoc;
    }

    public function set_tenkhoaHoc($var){
        $this->tenKhoaHoc = $var;
    }
    public function get_moTa(){
        return $this->moTa;
    }

    public function set_moTa($var){
        $this->moTa = $var;
    }
    public function get_thoiGian(){
        return $this->thoiGian;
    }
    public function set_thoiGian($var){
        $this->thoiGian = $var;
    }
    public function get_anh(){
        return $this->anh;
    }
    public function get_trangThai(){
        return $this->trangThai;
    }
    public function set_trangThai($var){
        $this->trangThai = $var;
    }
}
