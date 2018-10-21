<?php require_once("lib/connection.php"); ?>

<?php
	$id = -1;
	if (isset($_GET["id"])) {
		$id = intval($_GET['id']);
	}
	// Lấy ra nội dung bài viết theo điều kiện id
	$sql = "select * from posts where id = $id";
	// Thực hiện truy vấn data thông qua hàm mysqli_query
	$query = mysqli_query($conn,$sql);
?>
			<div class="innertube">
			<?php 
				while ( $data = mysqli_fetch_array($query) ) {
			?>
				<h3><?php echo $data['title']; ?></h3></div></ br>
				<i> Ngày tạo : <?php echo $data['createdate']; ?></i>
				<p><?php echo $data['content']; ?></p>
			<?php } ?>
			</div>
		</main>