<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>ĐĂNG NHẬP</title>
	
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

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">0ThichHoc</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
               	  <ul class="nav navbar-nav">
                         <li><a href="#home" class="smoothScroll">Trang chủ</a></li>
                         <li><a href="#feature" class="smoothScroll">Giới thiệu</a></li>
                        
                    </ul>

                  
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="register.php" class="smoothScroll">Đăng ký</a></li>
                    </ul>
               </div>

          </div>
     </section>


 <!-- FEATURE -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="home-info">
                             
<?php 
//Gọi file connection.php ở bài trước
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
			// Lấy ra thông tin người dùng và lưu vào session
			while ( $data = mysqli_fetch_array($query) ) {
	    		$_SESSION["user_id"] = $data["id"];
				$_SESSION['username'] = $data["username"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["fullname"] = $data["fullname"];
				$_SESSION["is_block"] = $data["is_block"];
				$_SESSION["permision"] = $data["permision"];
	    	}
			
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
			header('Location: index.php');
		}
	}
	if($_SESSION['permision']=="0")
   header("location:sinhvien.php");
else header("location:giaovien.php"); 
}
?>
	<form method="POST" action="login.php">

		
	<fieldset style="background-color: grey;">
	    <legend style="height: 40px;background-color: grey;">ĐĂNG NHẬP</legend>
	    	<table style="margin-left: 100px;">
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
	    		 <div style="margin-bottom: 30px;">
	    			Bạn chưa có tài khoản?
	    			<a href="register.php" target="_blank"><input type="button" value="Đăng ký" class="button"  ></a>
	            </div>

	   
  </fieldset>
 
	    	  
  </form>

                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- FEATURE -->
     <section id="feature" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1>Khoa CNTT-ĐHTL</h1>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <ul class="nav nav-tabs" role="tablist">
                              <li class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Điểm danh sinh viên</a></li>

                              <li><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Xem điểm</a></li>

                            
                         </ul>

                         <div class="tab-content">
                              <div class="tab-pane active" id="tab01" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Điểm danh</h2>
                                        <p>Sinh viên đi học sẽ được điểm danh và đánh giá thái độ học tập tại đây.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <a href="login.php"><h2>Login</h2></a>
                                        <p>Sinh viên cần đăng nhập để có thể xem được.</p>
                                   </div>
                              </div>


                              <div class="tab-pane" id="tab02" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Điểm quá trình</h2>
                                        <p>Điểm quá trình sẽ được public trên hệ thống.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>Điểm thi</h2>
                                        <p>Điểm thi sẽ được public trên hệ thống.</p>
                                   </div>
                              </div>

                           
                         </div>

                    </div>

                    <div class="col-md-6 col-sm-6">
                         <div class="feature-image">
                              <img src="images/cse.jpg" class="img-responsive" alt="Thin Laptop">                             
                         </div>
                    </div>

               </div>
          </div>
     </section>




   

</body>
<?php include "footer.php"?>