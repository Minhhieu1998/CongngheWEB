<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>TRANG ĐĂNG NHẬP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/trangchu.css">
<link rel="stylesheet" href="css/anh.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/footer.css">
<div id="container">
   <div id="header"></div>
   <div id="body"></div>
   <div id="footer"></div>
</div>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">
    <div id="menu">
  <ul>
    <div class="logo">

    <a href="trangchu.html" target="_blank"><img src="http://i1331.photobucket.com/albums/w589/sontugn/28501889_907787762727802_6015026664969338880_n_zpskfgz3fjw.gif" border="0" alt=" photo 28501889_907787762727802_6015026664969338880_n_zpskfgz3fjw.gif"></a>
    </div>

    <li><a href="trangchu.html">Trang chủ</a></li>
  

    </li>
    <li><a href="#lienhect">Liên hệ</a>

    </li>
    <li><a href="#">Hỏi đáp</a></li>
    <li><a href="register.php">Đăng ký thành viên</a></li>
  </ul>

</div><body>
	
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
                
                
                header('Location: header.php');
			}
		}
	
	}
?>
	<form method="POST" action="login.php">

		
	<fieldset>
	    <legend>ĐĂNG NHẬP</legend>
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
  <!-- Footer -->
<div id="footer">
    <div class="container">
        <p>LIÊN HỆ: 0987654321</p><br>
        
        
        <p><a href="ntminhhieu98@gmail.com">Email:ntminhhieu98@gmail.com</a></p>
    </div>
</div>


</html>