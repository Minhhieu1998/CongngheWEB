<?php
session_start();
?>
<html>
<head>
	<title>Trang đăng nhập</title>
	<meta charset="utf-8">
	<link href="login.css" rel="stylesheet" type='text/css' media="all" />
	<style >
		body{
			background-image: url(lib/anh3.jpg);
			background-size: auto;
			
		}
	</style>
</head>
<body>
	
<?php
	
	require_once("lib/connection.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from users where username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";

			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                
                header('Location: index.php');
			}
		}
	}
?>
	<form method="POST" action="login.php">

		<h1>RÁO SƯ ĐĂNG NHẬP THÔI</h1>
	<fieldset>
	    <legend>[ĐĂNG NHẬP]</legend>
	    	<table>
	    		<tr>
	    			<td>Username</td>
	    			<td><input type="text" name="username" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Password</td>
	    			<td><input type="password" name="password" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2" > <input name="btn_submit" type="submit" value="Đăng nhập"></td>
	    		</tr>

	    		
	    	</table>
	    	 <div>
	    			Bạn chưa có tài khoản?
	    			<a href="register.php" target="_blank"><input type="button" value="Đăng ký" class="button"  ></a>
	</div>
  </fieldset>
 
	    	  
  </form>


</body>
<footer>
  <p>Posted by: Hieu</p>
  <p>Contact information: <a href="mailto:ntminhhieu98@gmail.com">ntminhhieu98@gmail.com</a>.</p>
</footer>


</html>