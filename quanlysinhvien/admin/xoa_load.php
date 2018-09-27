<?php
require_once("../lib/load_data.php");
 
if (isset($_GET["product_id"])) {
	//Lây id được gửi qua từ bên quanly_load.php
	$product_name = $_GET["product_id"];
	//Thực thi câu lệnh sql delete để xóa user
	$sql = "delete from product where product_id = $product_id";
	$query = mysqli_query($conn, $sql);
	//Chuyển hướng trang web về lại trang quanly_load.php
	header('Location: quanly_load.php');
}
 
 
?>