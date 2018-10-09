<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: login.php');
}
?>
<html>
<head>
	<title>WELCOME</title>
	<meta charset="utf-8">
    <link href="login.css" rel="stylesheet" type='text/css' media="all" /></head>
      <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style >
		body{
			background-image: url(lib/anh3.jpg);
			background-size: auto;
			
		}
	</style>
<body>
	Chúc mừng bạn có username là <?php echo $_SESSION['username'];  ?> đã đăng nhập thành công ! 

</body>
</html>