<?php
require_once "model/connect.php";
require "model/KhoaHocObject.php";
class KhoaHoc{
    public function all(){
        $sql = "select * from KHOAHOC";
        $result = (new Connection())->select($sql);
        $arr=[];

        foreach($result as $row){
            $object = new KhoaHocObject($row);
            $arr[]=$object;
        }
        return $arr;
    }
    public function create($params){
        $object=new KhoaHocObject($params);
        $sql = "insert into KHOAHOC(tenKhoaHoc,moTa,thoiGian,anh,trangThai) 
        values('" . $object->get_tenKhoaHoc()."','" . $object->get_moTa()."','" . $object->get_thoiGian()."','" . $object->get_anh()."','" . $object->get_trangThai()."')";
        (new Connection())->excute($sql);
    }
    public function find($maKhoaHoc){
        $sql = "select * from KHOAHOC where maKhoaHoc='".$maKhoaHoc."'";
        $result = (new Connection())->select($sql);
        $each = mysqli_fetch_array($result);

        return new KhoaHocObject($each);
    }
    public function update($params){
        $object=new KhoaHocObject($params);
        $sql = "update KHOAHOC 
        set tenKhoaHoc='".$object->get_tenKhoaHoc()."',
        moTa='".$object->get_moTa()."',
        thoiGian='".$object->get_thoiGian()."',
        anh='".$object->get_anh()."',
        trangThai='".$object->get_trangThai()."'
        where maKhoaHoc='".$object->get_maKhoaHoc()."'";
        (new Connection())->excute($sql);
    }
    public function delete($maKhoaHoc){
        $sql = "delete from KHOAHOC where maKhoaHoc='".$maKhoaHoc."'";
        (new Connection())->excute($sql);
    }
}