<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<h3 style="text-align:center;">Cap nhat thong tin sinh vien</h3>
<div class="container">
    <div class="row justify-content-md-center">
        <form action="thuphisinhvien.php" method="post">
        <div class="form-group">
            <label for="masv">Ma sinh vien</label>
            <input type="text" class="form-control" name="msv">
        </div>
        <div class="form-group">
            <label for="masv">Ho ten sinh vien</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="masv">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="masv">Ma lop</label>
            <input type="text" class="form-control" name="malop">
        </div>
        <button class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</div>
</body>
</html>