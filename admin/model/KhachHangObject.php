<?php

class KhachHangObject{
    private $maKH;
    private $hoTen;
    private $ngaySinh;
    private $gioiTinh;
    private $soDienThoai;
    private $diaChi;

    public function __construct($row){
        $this->maKH = $row['maKH'] ?? '';
        $this->hoTen = $row['hoTen'];
        $this->ngaySinh = $row['ngaySinh'];
        $this->gioiTinh = $row['gioiTinh'];
        $this->soDienThoai = $row['soDienThoai'];
        $this->diaChi = $row['diaChi'];
    }

    public function get_maKH(){
        return $this->maKH;
    }

    public function set_maKH($var){
        $this->maKH = $var;
    }
    public function get_hoTen(){
        return $this->hoTen;
    }

    public function set_hoTen($var){
        $this->hoTen = $var;
    }
    public function get_ngaySinh(){
        return $this->ngaySinh;
    }

    public function set_ngaySinh($var){
        $this->ngaySinh = $var;
    }
    public function get_gioiTinh(){
        return $this->gioiTinh;
    }
    public function set_gioiTinh($var){
        $this->gioiTinh = $var;
    }
    public function get_soDienThoai(){
        return $this->soDienThoai;
    }
    public function set_soDienThoai($var){
        $this->soDienThoai = $var;
    }
    public function get_diaChi(){
        return $this->diaChi;
    }
    public function set_diaChi($var){
        $this->diaChi = $var;
    }
}
