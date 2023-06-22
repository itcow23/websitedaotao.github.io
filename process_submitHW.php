<?php
require  "check_login.php";
require "./admin/model/connect.php";

$maKhoaHoc = $_GET['maKhoaHoc'];
$maNoiDung = $_GET['maNoiDung'];
$maBaiHoc = $_GET['maBaiHoc'];

$file =  $_FILES['fileSubmit'];

$folder = 'assets/submit_homework/';
$file_name = $file['name'];
$path_file = $folder . $file_name;
move_uploaded_file($file['tmp_name'], $path_file);

$sql =  "INSERT INTO nopbaitap (fileNop,maBaiHoc) VALUES ('$file_name', '$maBaiHoc')";
$result = (new Connection())->excute($sql);

header( "Location: homework.php?maKhoaHoc=$maKhoaHoc&maNoiDung=$maNoiDung&maBaiHoc=$maBaiHoc" );