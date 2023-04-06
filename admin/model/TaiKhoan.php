<?php

require_once "model/connect.php";
require "model/TaiKhoanObject.php";

class TaiKhoan {
    public function all() {
        $sql = "select * from TAIKHOAN";
        $result = (new Connection())->select($sql);
        $arr = [];
        foreach ($result as $row) {
            $object = new TaiKhoanObject($row);
            $arr[] = $object;
        }

        return $arr;
    }

    public function delete($maTaiKhoan) {
        $sql = "delete from TAIKHOAN where id='".$maTaiKhoan."'";
        (new Connection())->excute($sql);
        header('location: index.php?controller=taikhoan');
    }
}