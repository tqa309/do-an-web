<!DOCTYPE html>
<html>
<head>
	<title>Devpro.edu.vn</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<form action="" method="post" enctype="multipart/form-data">
				<input class="form-control" type="file" name="upload">
				<input type="submit" class="btn btn-success" value="Upload" name="submit">
			</form>
		</div>
	</div>
	<?php
		if(isset($_POST["submit"])){
			if(isset($_FILES['upload'])&&$_FILES['upload']["name"]!=null){
				//lấy tên của file:
				$file_name=$_FILES['upload']["name"];
				echo json_encode($_FILES['upload']);
				//lấy đường dẫn tạm lưu nội dung file:
				$file_tmp =$_FILES['upload']['tmp_name'];
				//tạo đường dẫn lưu file:
				$path ="do-an-web/upload/".$file_name;
				//upload nội dung file vào đường dẫn vừa tạo:
				move_uploaded_file($file_tmp,$path);
				//tạo kết nối đến database
				$connect = mysqli_connect("localhost","root","Tuananh19022k","test");
				//localhost: tên miền
				//root: tài khoản đăng nhập tên miền
				//"": mật khẩu đăng nhập tên miền (tôi không đặt mật khẩu nên để trống)
				//devpro: database cần kết nối
				mysqli_set_charset($connect,"UTF8");//tạo kết nối có thể hiểu tiếng Việt
				//thực hiện insert vào bảng đường dẫn file vừa upload:
				mysqli_query($connect,"
					insert into data1(data) values ('$path')
				");
				echo "upload thành công";
			}
		}
	?>
</body>
</html>