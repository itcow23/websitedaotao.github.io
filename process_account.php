<?php
require  "check_login.php";
require "./admin/model/connect.php";

session_start( );
$maKH = $_SESSION['maKH_TK'];
$soDienThoai = $_POST['soDienThoai'];
$diaChi =  $_POST['diaChi'];
$test_sdt = '/^0(1\d{9}|9\d{8})$/';
if( !preg_match($test_sdt, $soDienThoai) ){
    $_SESSION['error_sdt'] = "Số điện thoại không hợp lệ";
    header("location: account.php?sdt=$soDienThoai");
} else {
    if($_FILES['avatar']['size'] > 0){
    
        $avatar = $_FILES['avatar'];
        $folder =  "assets/avatar/";
        $file_extension = explode('.', $avatar['name'])[1];
        $file_name = time() . '.' . $file_extension;
        $path_file = $folder . $file_name;
        move_uploaded_file($avatar["tmp_name"], $path_file);
    
        $sql = "update khachhang set soDienThoai='$soDienThoai',
        diaChi='$diaChi', avatar='$file_name' where maKH='$maKH'";
        $result = (new Connection())->excute($sql);

        $_SESSION['success'] = "cập nhật thông tin thành công";
        header( "Location: account.php" );
    }else{
        $sql = "update khachhang set soDienThoai='$soDienThoai',
        diaChi='$diaChi' where maKH='$maKH'";
        $result = (new Connection())->excute($sql);

        $_SESSION['success'] = "Cập nhật thông tin thành công";
        header( "Location: account.php" );
    }
}


