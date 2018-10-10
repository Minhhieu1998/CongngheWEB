<!DOCTYPE html>
<html>
<title>ĐĂNG KÝ THÀNH VIÊN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/trangchu.css">
<link rel="stylesheet" href="css/anh.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/footer.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">
    <div id="menu">
  <ul>
    <div class="logo">

    <a href="trangchu.html" target="_blank"><img src="http://i1331.photobucket.com/albums/w589/sontugn/28501889_907787762727802_6015026664969338880_n_zpskfgz3fjw.gif" border="0" alt=" photo 28501889_907787762727802_6015026664969338880_n_zpskfgz3fjw.gif"></a>
    </div>

    <li><a href="header.php">Trang chủ</a></li>
  

    </li>
    <li><a href="#lienhect">Liên hệ</a>

    </li>
    <li><a href="#">Hỏi đáp</a></li>
    <li><a href="login.php">Đăng nhập</a></li>
  </ul>
</div>
<body>
		<?php
		require_once("lib/connection.php");
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
 			 $name = $_POST["name"];
  			$email = $_POST["email"];
  			
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $name == "" || $email == "") {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from users where username='$username'";
					$kt=mysqli_query($conn, $sql);
 
					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO users(
	    					username,
	    					password,
	    					name,
						    email
					
	    					) VALUES (
	    					'$username',
	    					'$password',
						    '$name',
	    					'$email'
	    					
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		echo "chúc mừng bạn đã đăng ký thành công";
				
					}
									    
					
			  }
	}
	?>
	<form action="register.php" method="post">
	<fieldset>
		<legend> ĐĂNG KÝ THÀNH VIÊN</legend>
		<table>
			<tr>
				<td colspan="2">Form đăng ký</td>
			</tr>	
			<tr>
				<td>Username :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" id="pass" name="pass"></td>
			</tr>
			<tr>
				<td>Họ Tên :</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
				
	
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Đăng ký"></td>
			</tr>
			
		</table>
	</fieldset>
		
	
	
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