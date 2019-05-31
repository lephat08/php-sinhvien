<?php 

include_once("connectdb.php");
$title = "Đăng ký";
include_once("header.php");
if(isset($_POST['add'])){
	$id = trim($_POST['id']);
	$id = mysqli_real_escape_string($conn, $id);

	$name = trim($_POST['name']);
	$name = mysqli_real_escape_string($conn, $name);

	$email = trim($_POST['email']);
	$email = mysqli_real_escape_string($conn, $email);

	$lop = trim($_POST['class']);
	$lop = mysqli_real_escape_string($conn, $lop);

	$gen = trim($_POST['gen']);
	$gen = mysqli_real_escape_string($conn, $gen);

	$fone = trim($_POST['phone']);
	$fone = mysqli_real_escape_string($conn, $fone);

	$query = "INSERT INTO infomation (id,name,email,class,gender,phone) VALUES ('" . $id ."','" . $name . "','" . $email . "','" . $lop . "','" . $gen . "','" . $fone . "') ";
	$result = mysqli_query($conn, $query);
	mysqli_set_charset($conn,'utf8');
	if(!$result){
		echo "Khong the add du lieu " . mysqli_error($conn);
		exit;
	}else{
		echo '<script type="text/javascript">alert("Success!");</script>';
	}

}

?>

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3" id="form">
			<center><b class="registration">Đăng ký thông tin</b></center>
				<form method="post" action="dangky.php">
					<div class="form-group">
						<label>MSSV</label>
						<input type="text" name="id" class="form-control text" autocomplete="off" required="" placeholder="Mã sinh viên" oninvalid="this.setCustomValidity('Bạn chưa nhập ID')" oninput="setCustomValidity('')"">
					</div>
					<div class="form-group">
						<label>Họ Tên</label>
						<input type="text" name="name" class="form-control text" autocomplete="off" required="" placeholder="Họ tên" oninvalid="this.setCustomValidity('Bạn chưa nhập tên')" oninput="setCustomValidity('')"">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control text" placeholder="Email" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>Lớp</label>
						<input type="text" name="class" class="form-control text" placeholder="Lớp học" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>Gender</label>
							<select class="form-control text" name="gen">
								<option value="m">Nam</option>
								<option value="f">Nữ</option>
							</select>
					</div>

					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control text" autocomplete="off" placeholder="Số điện thoại" required>
					</div>

					<div class="form-group">
						<input type="submit" name="add" class="btn btn-primary" value="Submit">
						<input type="reset" name="reset" class="btn btn-danger" value="Reset">
					</div>
					</form>
					<a href="index.php">Danh sách đã đăng ký</a>
				</div>
			</div>
<?php if(isset($conn)){
	mysqli_close($conn);
} ?>		
				

