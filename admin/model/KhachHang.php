<?php
require_once "model/connect.php";
require "model/KhachHangObject.php";

class KhachHang{
    public function all(){
        $sql = "select * from KHACHHANG";
        $result = (new Connection())->select($sql);
        $arr=[];

        foreach($result as $row ){
            $object = new KhachHangObject($row);
            $arr[]=$object;
        }
        return $arr;
    }
    public function create($params){
        $object=new KhachHangObject($params);
        $sql = "insert into KHACHHANG(hoTen,ngaySinh,gioiTinh,soDienThoai,diaChi) 
        values('" . $object->get_hoTen()."',
        '" . $object->get_ngaySinh()."',
        '" . $object->get_gioiTinh()."',
        '" . $object->get_soDienThoai()."',
        '" . $object->get_diaChi()."')";

        (new Connection())->excute($sql);
    }
    public function find($maKH){
        $sql = "select * from KHACHHANG where maKH='".$maKH."'";
        $result = (new Connection())->select($sql);
        $each = mysqli_fetch_array($result);

        return new KhachHangObject($each);
    }
    public function update($params){
        $object=new KhachHangObject($params);
        $sql = "update KHACHHANG 
        set hoTen='".$object->get_hoTen()."',
        ngaySinh='".$object->get_ngaySinh()."',
        gioiTinh='".$object->get_gioiTinh()."',
        soDienThoai='".$object->get_soDienThoai()."',
        diaChi='".$object->get_diaChi()."'
        where maKH='".$object->get_maKH()."'";

        (new Connection())->excute($sql);
    }
    public function delete($maKH){
        $sql = "delete from KHACHHANG where maKH='".$maKH."'";
        (new Connection())->excute($sql);
    }
}