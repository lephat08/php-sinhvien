<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "sinhviendb";

$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn){
	die(" không kết nối được: " . mysqli_connect_error());
}
// echo "connect success!";
?>