
<!DOCTYPE html>
<html lang="en">
<head>

	<title>ĐĂNG KÝ THÀNH VIÊN</title>
	
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
                         <li><a href="login.php" class="smoothScroll">Đăng nhập</a></li>
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
                         <div class="home-info" style="background-color: grey;">
                            <?php require_once("lib/connection.php"); ?>
<?php
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
			$sql = "INSERT INTO users(username, password, fullname, email, createdate ) VALUES ( '$username', '$password', '$name', '$email', now())";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($conn,$sql);
			echo "chúc mừng bạn đã đăng ký thành công";
		}
	}
 
?>
	<form action="register.php" method="post">
	<fieldset >
		<legend> ĐĂNG KÝ THÀNH VIÊN</legend>
		<table style="margin-left: 100px;margin-bottom: 30px;">
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



<?php include "footer.php"?>