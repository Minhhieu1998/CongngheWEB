<!DOCTYPE html>
<html>
<title>QUẢN LÝ SINH VIÊN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/trangchu.css">
<link rel="stylesheet" href="css/anh.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/footer.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey" >
    <div id="menu" >
  <ul>
    <div class="logo">

    <a href="trangchu.html" target="_blank"><img src="lib/logo.png"></a>
    </div>

    <li><a href="header.php">Trang chủ</a></li>
    <li>  <a href="../admin/themkhoahoc.php">Thêm Khóa Học</a>

    </li>
    <li><a href="#lienhect">Sơ đồ lớp/Điểm danh</a>

    </li>
    </li>
    <li><a href="../admin/them-bai-viet.php">Thêm bài viết</a>

    </li>
    <li><a href="login.php">Đăng xuất</a></li>
  </ul>
</div>
<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="lib/anh5.jpg" alt="The Hotel" style="min-width: 1000px;" width="1700" height="800">
  <div class="w3-display-left w3-padding w3-col l6 m8">
    <div class="w3-container w3-red">
      <h2><i class="fa fa-bed w3-margin-right"></i>ĐIỂM DANH</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px;">
         
           <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Lớp</label>
            <input class="w3-input w3-border" type="text" placeholder="...." name="CheckIn" required>
          </div>

        </div>
     

        <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i> Tìm kiếm</button>
      </form>
    </div>
  </div>
</header>
<body>
  <div class="danhsach">
    Danh sách sinh viên :
<select name="decision">
<option selected>Chọn 
<option>SV1
<option>Sv2
<option>SV3
<option>SV4
</select>
 </div>

<p>CONTENT</p><br>
<p>CONTENT</p><br>
<p>CONTENT</p><br>
<p>CONTENT</p><br>
 <img class="w3-image" src="lib/anh4.jpg" alt="The Hotel" style="min-width: 1000px;" width="1700" height="300">


<?php require_once("lib/connection.php"); ?>

<?php
  // Lấy 16 bài viết mới nhất đã được phép public ra ngoài từ bảng posts
  $sql = "select * from posts where is_public = 1 order by createdate desc limit 16";
  
  $query = mysqli_query($conn,$sql);
?>
      <div class="innertube" style="background-color: pink;margin-top: 50px;">
        <table width="100%" border="1">
          <tr>
          <?php
            
            $i = 0;
            
            while ( $data = mysqli_fetch_array($query) ) {
              
              if ($i == 2) {
                echo "</tr>";
                $i = 0;
              }
          ?>
            <td >
              <b><?php echo $data["title"];// In ra title bài viết ?></b>
              <p><?php echo substr($data["content"], 0, 100)." ...";// In ra nội dung bài viết lấy chỉ 100 ký tự ?></p>
              <a href="display.php?id=<?php echo $data["id"]; // Tạo liên kết đến trang display.php và truyền vào id bài viết ?>"> Xem thêm</a>
            </td>
          
          <?php
              $i++;
            }
          ?>
        </table>  
      </div>
    </main>>
        
    
    <nav>
      <div class="innertube">
        <h3>Right heading</h3>
        <ul>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>
          <li><a href="#">Link 4</a></li>
          <li><a href="#">Link 5</a></li>
        </ul>
        <h3>Right heading</h3>
        <ul>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>
          <li><a href="#">Link 4</a></li>
          <li><a href="#">Link 5</a></li>
        </ul>
       
      </div>
    </nav>

 Danh sách khóa học:

<select name="name" id="id">
    <option style='font-style: italic; font-weight:bold;' selected="selected" value="#">
        <span>Choose One</span>
    </option>
    <optgroup label="Option group 1">
        <option value="TestValue">    TestValue</option>
        <option value="TestValue">    TestValue</option>
        <option value="TestValue">    TestValue</option>
    </optgroup>
</select>


  <div class="w3-container" id="contact">
  <h2 id=lienhect>PHẢN HỒI</h2>
  
  <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> HÀ NỘI ,VIỆT NAM<br>
  <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: 0987654321<br>
  <i class="fa fa-envelope w3-text-red" style="width:30px"> </i><a href="ntminhhieu98@gmail.com"> Email: ntminhhieu98@gmail.com</a><br>
  <form action="/action_page.php" target="_blank">
    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
    <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
  </form>
</div>
  <!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity" ></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>

  </div>
  <p>Powered by <a href="https://plus.google.com/u/0/106974998444610829545" target="_blank" class="w3-hover-text-green">ntminhhieu98@gmail.com</a></p>
</footer>
</body>

</html>
