<?php
include_once('connectdb.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string ($conn,$_POST['username']);
    $password = mysqli_real_escape_string ($conn,md5($_POST['password']));
}
// if(isset($_POST['submit'])){
    $sql=" SELECT * FROM users WHERE name = '$username' AND password = '$password' ";
    $result = mysqli_query($conn,$sql);
// }
$count = mysqli_num_rows($result);
if($count > 0) {
    // if($row = mysqli_fetch_assoc($result)){
    // $hashcheck = password_verify($password,$row['password']);
    // if($hashcheck == false){
    //     header("Location: chitietsinhvien.php?login=error");
    //     exit();
    // }elseif($hashcheck == true){
        $_SESSION['login_user'] = $username;
        header("Location: chitietsinhvien.php?login=success");
        // exit();
    // }
    
    
    }
 }else {
    $error = "Your Login Name or Password is invalid";
    // echo $error;
 }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h3 style="text-align:center;margin:5px 0 10px 0;">Form Login</h3>
        <div class="row justify-content-md-center">
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button class="btn btn-primary" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
