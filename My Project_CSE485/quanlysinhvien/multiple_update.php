<?php

//multiple_update.php

include('database_connection.php');

if(isset($_POST['hidden_id']))
{
 $name = $_POST['name'];
 $address = $_POST['address'];
 $gender = $_POST['gender'];
 $designation = $_POST['designation'];
 $age = $_POST['age'];
 $id = $_POST['hidden_id'];
 for($count = 0; $count < count($id); $count++)
 {
  $data = array(
   ':name'   => $name[$count],
   ':address'  => $address[$count],
   ':gender'  => $gender[$count],
   ':designation' => $designation[$count],
   ':age'   => $age[$count],
   ':id'   => $id[$count]
  );
  $query = "
  UPDATE tbl_employee 
  SET name = :name, address = :address, gender = :gender, designation = :designation, age = :age 
  WHERE id = :id
  ";
  $statement = $connect->prepare($query);
  $statement->execute($data);
 }
}

?>
