<?php

require_once "model/connect.php";
require "model/BaiHocObject.php";

class BaiHoc{
    public function all(){
        $sql = "select * from BAIHOC";
        $result = (new Connection())->select($sql);
        $arr=[];
        foreach($result as $row){
            $object = new BaiHocObject($row);
            $arr[]=$object;
        }
        return $arr;
    }
    public function create($params){
        $object=new BaiHocObject($params);
        $sql = "insert into BAIHOC(tenBaiHoc,tieuDe,moTa,video) 
        values('" . $object->get_tenBaiHoc()."',
        '" . $object->get_tieuDe()."',
        '" . $object->get_moTa()."',
        '" . $object->get_video()."')";
        (new Connection())->excute($sql);
    }

    public function find($maBaiHoc){
        $sql = "select * from BAIHOC where maBaiHoc='".$maBaiHoc."'";
        $result = (new Connection())->select($sql);
        $each = mysqli_fetch_array($result);
        return new BaiHocObject($each);
    }

    public function update($params){
        $object=new BaiHocObject($params);
        $sql = "update BAIHOC 
        set tenBaiHoc='".$object->get_tenBaiHoc()."',
        tieuDe='".$object->get_tieuDe()."',
        moTa='".$object->get_moTa()."',
        video='".$object->get_video()."'
        where maBaiHoc='".$object->get_maBaiHoc()."'";
        (new Connection())->excute($sql);
    }

    public function delete($maBaiHoc){
        $sql = "delete from BAIHOC where maBaiHoc='".$maBaiHoc."'";
        (new Connection())->excute($sql);
    }
}