<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Thông tin thành viên</title>
 
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  </head>
 
  <body>
    <div class="container">
      <div class="row">
      	<?php
		    require_once("../lib/load_data.php");
 
		    if (isset($_POST["save"])) {
		    	$product_id = $_POST["product_id"];
		    	$product_name = $_POST["product_name"];
		    	$brand_id = $_POST["brand_id"];
		    	
		    	$sql = "update product set product_id = '$product_id', product_name = '$product_name', brand_id ='$brand_id' where id= $product_id";
		    	mysqli_query($conn, $sql);
		    }
 
		    $product_id = "";
		    $product_name = "";
		    $brand_id = "";
		    
		    if (isset($_GET["product_id"])) {
		    	//thực hiện việc lấy thông tin user
		    	$id = $_GET["product_id"];
		    	$sql = "select * from product where product_id = $product_id";
		    	$query = mysqli_query($conn, $sql);
		    	while ( $data = mysqli_fetch_array($query) ) {
		    		$product_name = $data["product_name"];
		    		$brand_id = $data["brand_id"];
		    	
		    	}
		    }
		?>
        <h3> Thông tin sản phẩm</h3>
        <form method="POST" name="fr_update">
	        <table class="table">
	          <caption>Danh sách sản phẩm</caption>
	          	<input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
	          	<tr><td>Tên sản phẩm : </td><td><input type="text" name="product_name" value="<?php echo $product_name; ?>" /></td></tr>
	          	<tr><td>Kí hiệu brand : </td><td><input type="text" name="brand_id" value="<?php echo $brand_id; ?>"/></td></tr>
	          
	          	<tr><td colspan="2"><input type="submit" name="save" value="Lưu thông tin"></td></tr>
	        </table>
        </form>
      </div>
 
    </div><!-- /.container -->
 
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  
 
</body></html>