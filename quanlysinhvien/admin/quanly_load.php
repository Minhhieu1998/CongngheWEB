<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
 
    <title>Quản lý sản phẩm</title>
 
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  </head>
 
  <body>
    <?php
      require_once("../lib/connection.php");
    ?>
    <div class="container">
      <div class="row">
        <h3> Quản lý sản phẩm</h3>
        <table class="table">
          <caption>Danh sách sản phẩm</caption>
          <thead>
            <tr>
              <th>STT</th>
              <th>STT</th>
              <th>Tên sản phẩm</th>
              <th>Brand</th>
              <th>.</th>
             
              <th>Hành động</td>
            </tr>
          </thead>
          <tbody>
          <?php
            $stt = 1 ;
            $sql = "SELECT * FROM product";
            // thực thi câu $sql với biến conn lấy từ file load_data.php
            $query = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <th scope="row"><?php echo $stt++ ?></th>
              <td><?php echo $data["product_id"]; ?></td>
              <td><?php echo $data["product_name"]; ?></td>
              <td><?php echo $data["brand_id"]; ?></td>
              <td>
                
              </td>
              <td><a href="chinhsua_load.php?id=<?php echo $data["product_id"]; ?>">Sửa</a> <a href="xoa_load.php?product_id=<?php echo $data["product_id"]; ?>">Xóa</a></td>
            </tr>
          <?php
            }
          ?>
          </tbody>
        </table>
      </div>
 
    </div><!-- /.container -->
 
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  
 
</body></html>