<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "quanlysinhvien");
$output = '';
$query = "SELECT * FROM khoahoc ORDER BY item_id DESC";
$result = mysqli_query($connect, $query);
$output = '
<br />
<h3 align="center">Khóa học</h3>
<table class="table table-bordered table-striped">
 <tr>
  <th width="30%">Tên khóa học</th>
  <th width="10%">Mã khóa học</th>
  <th width="50%">Mô tả</th>
  <th width="10%">Số tín chỉ</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td>'.$row["item_name"].'</td>
  <td>'.$row["item_code"].'</td>
  <td>'.$row["item_description"].'</td>
  <td>'.$row["item_price"].'</td>
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
