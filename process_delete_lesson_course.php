<?php
require "check_login.php";
require "./admin/model/connect.php";

$maBaiHoc =  $_GET[ "maBaiHoc" ];

$sql= "delete from baihoc  where maBaiHoc='$maBaiHoc'";
$result = (new Connection())->excute($sql);

$_SESSION['code'] = "success";
$_SESSION['status'] = "Xóa bài học thành công";
header( "location: manage_lesson_course.php" );