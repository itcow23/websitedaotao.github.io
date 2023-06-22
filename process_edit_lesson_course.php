<?php
require "check_login.php";
require "./admin/model/connect.php";

$maKhoaHoc = $_POST["maKhoaHoc"];
$maNoiDung = $_POST["maNoiDung"];
$tenBaiHoc = $_POST["tenBaiHoc"];
$tieuDe = $_POST["tieuDe"];
$moTa = $_POST["moTa"];
$video = $_POST["video"];
$maBaiHoc = $_POST["maBaiHoc"];

$sql = "update baihoc set tenBaiHoc='$tenBaiHoc',
tieuDe='$tieuDe',moTa='$moTa',
video='$video',maKhoaHoc='$maKhoaHoc',maNoiDung='$maNoiDung' 
where maBaiHoc='$maBaiHoc'";
$result = (new Connection())->excute($sql);

header( "location: manage_lesson_course.php" );