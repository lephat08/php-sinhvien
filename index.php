<?php 
include_once("connectdb.php");
$title ="Trang chủ";
include_once("header.php");
$query = "SELECT * FROM infomation ORDER BY id ASC";
$result = mysqli_query($conn, $query);
if(!$result){
	echo "Co loi xay ra! " . mysqli_error($conn);
	exit;
}
?>

<div class="container">
	<table class="table table-bordered" style="margin-top: 20px;background-color: #FFF;text-align: center;" border="1px">
		<tr>
			<th colspan="8" style="font-size: 25px;color: black;font-weight: bold;">Danh sách thông tin sinh viên</th>
		</tr>
		<tr>
			<th>MSSV</th>
			<th>Tên SV</th>
			<th>Email</th>
			<th>Lớp</th>
			<th>Giới tính</th>
			<th>Phone</th>
			<th><i class="material-icons">&#xe872;</i></th>
			<th><i class="material-icons">&#xe22b;</i></th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['class']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo $row['phone']; ?></td>
			</tr>
		<?php } ?>
		
	</table>
	<a href="dangky.php">Đăng ký</a>
	<a href="export_pdf.php" style="margin-left: 5px;font-weight: bold;color: red;">Xuất File</a>
</div>
<?php if(isset($conn)){mysqli_close($conn);} ?>