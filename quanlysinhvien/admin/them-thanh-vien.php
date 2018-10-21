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
<html>
<title>QUẢN LÝ SINH VIÊN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/trangchu.css">
<link rel="stylesheet" href="../css/anh.css">
<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" href="../css/footer.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">
    <div id="menu">
  <ul>
    <div class="logo">

    <a href="trangchu.html" target="_blank"><img src="../lib/logo.png"></a>
    </div>

    <li><a href="header.php">Trang chủ</a></li>
    <li>  <a href="../admin/them-thanh-vien.php">Thêm Khóa học</a>

    </li>
    <li><a href="#lienhect">Sơ đồ lớp/Điểm danh</a>

    </li>
    </li>
    <li><a href="../admin/them-bai-viet.php">Thêm bài viết</a>

    </li>
    <li><a href="login.php">Đăng xuất</a></li>
  </ul>
</div>

<body>
	<form action="them-thanh-vien.php" method="post">
		<table>
			<tr>
				<td colspan="2">
					<h3>Thêm khóa học</h3>
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
		
	</form>
  <!-- Footer -->
<div id="footer">
    <div class="container">
        <p>LIÊN HỆ: 0987654321</p><br>
        
        
        <p><a href="ntminhhieu98@gmail.com">Email:ntminhhieu98@gmail.com</a></p>
    </div>
</div>
</body>

</html>
