<?php
	session_start(); 
 ?>
<?php require_once("../lib/connection.php");?>

<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$name = $_POST["fullname"];
		$email = $_POST["email"];
		$permission = $_POST["permission"];
		$is_block = 0;
		if (isset($_POST["is_block"])) {
			$is_block = $_POST["is_block"];
		}
 
		$id = $_POST["id"];
		// Viết câu lệnh cập nhật thông tin người dùng
		$sql = "UPDATE users SET fullname = '$name', email = '$email', permision = '$permission', is_block = '$is_block' WHERE id=$id";
		// thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($conn,$sql);
		header('Location: quan-ly-thanh-vien.php');
	}
 
	$id = -1;
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	$sql = "SELECT * FROM users WHERE id = ".$id;
	$query = mysqli_query($conn,$sql);
 
	function make_permission_dropdown($id){
		$select_1 = "";
		$select_2 = "";
		$select_3 = "";
		if ($id == 0) {
			$select_1 = 'selected = "selected"';
		}
		if ($id == 1) {
			$select_2 = 'selected = "selected"';
		}
		if ($id == 2) {
			$select_3 = 'selected = "selected"';
		}
		$select = '<select id="permission" name="permission">
						<option value="-1"></option>
						<option value="0" '.$select_1.'>Thành viên thường</option>
						<option value="1" '.$select_2.'>Admin cấp 1</option>
						<option value="2" '.$select_3.'>Admin cấp 2</option>
					</select>';
 
		return $select;
	}
 
 
?>
	<?php
		while ( $data = mysqli_fetch_array($query) ) {
			$i = 1;
			$id = $data['id'];
			$is_block = "";
			if ($data['is_block'] == 1) {
				$is_block = "checked='checked'";
			}
	?>
	<form action="chinh-sua-thanh-vien.php" method="post">
		<table>
			<tr>
				<td colspan="2">
					<h3>Chỉnh sửa thông tin thành viên</h3>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
				</td>
			</tr>	
			<tr>
				<td nowrap="nowrap">Họ tên :</td>
				<td><input name="fullname" id="fullname" value="<?php echo $data['fullname']; ?>" ></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Địa chỉ email :</td>
				<td><input type="text" id="email" name="email" value="<?php echo $data['email']; ?>"></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Quyền :</td>
				<td>
					<?php echo make_permission_dropdown($data['permision']); ?>
				</td>
			</tr>
			<tr>
				<td nowrap="nowrap">Block người dùng :</td>
				<td><input type="checkbox" id="is_block" name="is_block" value="1" <?php echo $is_block; ?> ></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Cập nhật thông tin"></td>
			</tr>
 
		</table>
		
	</form>
<?php } ?>