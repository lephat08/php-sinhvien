<?php include_once('connectdb.php'); 

$masv = $_POST['msv'];
$hoten = $_POST['name'];
$email = $_POST['email'];
$malop = $_POST['malop'];

$sql = "INSERT INTO sinhvien (masv,hotensv,email,malop)
VALUES ('$masv','$hoten','$email','$malop');";

mysqli_query($conn,$sql);
header("Location: chitietsinhvien.php?dangky=thanhcong");
mysqli_close();
?>
