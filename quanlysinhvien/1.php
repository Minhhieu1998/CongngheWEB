<?php
  session_start(); 
  
 ?>
<?php require_once("lib/connection.php"); ?>


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
                    <a href="giaovien.php" class="navbar-brand">0ThichHoc</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li><a href="giaovien.php" class="smoothScroll">Trang chủ</a></li>
                     
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="Login" class="smoothScroll">Đăng xuất</a></li>
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
  if (isset($_POST["btn_submit"])) {
    //lấy thông tin từ các form bằng phương thức POST
    $title = $_POST["title"];
    $content = $_POST["content"];
    $is_public = 0;
    if (isset($_POST["is_public"])) {
      $is_public = $_POST["is_public"];
    }
    
    $user_id = $_SESSION["user_id"];
 
    $sql = "INSERT INTO posts(title, content, user_id, is_public, createdate, updatedate ) VALUES ( '$title', '$content', '$user_id', '$is_public', now(), now())";
    // thực thi câu $sql với biến conn lấy từ file connection.php
    mysqli_query($conn,$sql);
    echo "Bài viết đã thêm thành công";
  }
 
?>
 <form action="1.php" method="post" >
  <fieldset  >
  
    <table style="background-color: grey;">
      <tr>
        <td colspan="2"><h3>Thêm bài viết mới</h3></td>
      </tr>
        <tr>
        <td nowrap="nowrap">Tiêu đề bài viết :</td>
        <td ><input type="text" id="title" name="title"></td>
      </tr>
      <tr>
        <td nowrap="nowrap">Nội dung :</td>
        <td><textarea name="content" id="content" rows="10" cols="150"></textarea></td>
      </tr>
      <tr>
        <td nowrap="nowrap">Public bài viết ? :</td>
        <td><input type="checkbox" id="is_public" name="is_public" value="1"> Public<td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Thêm bài viết"></td>
      </tr>
    </td>
  </td>
</tr>
</table>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</section>

 

  <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="copyright-text col-md-12 col-sm-12">
                         <div class="col-md-6 col-sm-6">
                              <p>Copyright &copy; 2018 Company Name - Design:
                        <a rel="nofollow" href="http://tooplate.com">Tooplate</a></p>
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>