<?php
	session_start(); 
 ?>
<?php require_once("../lib/connection.php");?>
<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["password"];
		$name = $_POST["fullname"];
		$email = $_POST["email"];
		$permission = $_POST["permission"];
		$is_block = 0;
		if (isset($_POST["is_block"])) {
			$is_block = $_POST["is_block"];
		}
 
		if ($username == "" || $password == "" || $name == "" || $email == "" || $permission == "") {
			echo "Bạn cần điền đầy đủ thông tin !";
		}else{
			// Viết câu lệnh thêm thông tin người dùng
			$sql = "INSERT INTO users (username, password, fullname, email, permision, is_block, createdate) VALUES ('$username', '$password', '$name', '$email', '$permission', '$is_block', now())";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			$result = mysqli_query($conn,$sql);
			if (!$result) {
				echo "Người dùng đã tồn tại vui lòng không trùng username và email !";
			}else{
				header('Location: quan-ly-thanh-vien.php');
			}
			
		}
		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>HỆ THỐNG ĐIỂM DANH VÀ QUẢN LÝ</title>
	
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

   

</head>
<body>

<body>
	<form action="them-thanh-vien.php" method="post">
		<fieldset style="height: 500px;width: 1000px;margin-left:300px; ">
			
		<table style="font-size: 30px; margin-left: 250px;">
			<tr>
				<td colspan="2">
					<h3>Thêm tài khoản</h3>
				</td>
			</tr>	
			<tr>
				<td nowrap="nowrap">Username :</td>
				<td><input type="text" name="username" id="username" value="" ></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Mật khẩu :</td>
				<td><input type="password" name="password" id="password" value="" ></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Họ tên :</td>
				<td><input type="text" name="fullname" id="fullname" value="" ></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Địa chỉ email :</td>
				<td><input type="text" id="email" name="email" value=""></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Quyền :</td>
				<td>
					<select id="permission" name="permission">
						<option value="0">Thành viên thường</option>
						<option value="1">Admin cấp 1</option>
						<option value="2">Admin cấp 2</option>
					</select>
				</td>
			</tr>
			<tr>
				<td nowrap="nowrap">Block người dùng :</td>
				<td><input type="checkbox" id="is_block" name="is_block" value="1" ></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Thêm thành viên"></td>
			</tr>
 
		</table>
	</fieldset>

		
	</form>
 
</body>

</html>
