<?php
header("Content-type: text/html; charset=utf-8");
$tenmaychu = 'localhost:3307';
$tentaikhoan = 'root';
$pass = '';
$csdl = 'qlktx';
// $tentaikhoan = 'zurcjecz_qlktx';
// $pass = '7w9yqDVK8rTthzvSEvTU';
// $csdl = 'zurcjecz_qlktx';
$conn = mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl);
mysqli_select_db($conn, $csdl);
mysqli_query($conn, "SET NAMES 'UTF8'");
