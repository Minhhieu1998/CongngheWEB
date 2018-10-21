<?php
  session_start(); 
 ?>
<?php require_once("../lib/connection.php");?>

<?php include("includes/permission.php")?>


<?php
  $sql = "SELECT * FROM users";
  $query = mysqli_query($conn,$sql);
?>
<?php
  if (isset($_GET["id_delete"])) {
    $sql = "DELETE FROM users WHERE id = ".$_GET["id_delete"];
    mysqli_query($conn,$sql);
  }
  
?>
<a href="them-thanh-vien.php">Thêm thành viên</a>
<table border="1px;" align="center">
  <thead>
    <tr>
      <td bgcolor="#E6E6FA">ID</td>
      <td bgcolor="#E6E6FA">Username</td>
      <td bgcolor="#E6E6FA">Email</td>
      <td bgcolor="#E6E6FA">Khóa tài khoản</td>
      <td bgcolor="#E6E6FA">Quyền</td>
      <td bgcolor="#E6E6FA">Hành động</td>
    <tr>
  </thead>
  <tbody>
  <?php 
    while ( $data = mysqli_fetch_array($query) ) {
      $i = 1;
      $id = $data['id'];
  ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $data['username']; ?></td>
      <td><?php echo $data['email']; ?></td>
      <td><?php echo ($data['is_block'] == 1) ? "Bị khóa" : "Không bị khóa"; ?></td>
      <td><?php echo ($data['permision'] == 0) ? "Thành viên thường" : "Admin"; ?></td>
      <td>
        <a href="chinh-sua-thanh-vien.php?id=<?php echo $id;?>">Sửa</a>
        <a href="quan-ly-thanh-vien.php?id_delete=<?php echo $id;?>">Xóa</a>
      </td>
    </tr>
  <?php 
      $i++;
    }
  ?>
  </tbody>
</table>