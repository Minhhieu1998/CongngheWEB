<?php
require_once 'database_connection.php';
  
try {
 $pdo = new PDO("mysql:host=localhost;dbname=quanlysinhvien", "root", "");
  
    $sql = 'SELECT  id,
                    name,
                    address,
                    gender,
                    designation,
                    age
                  
               FROM tbl_employee
              ORDER BY id';
  
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Điểm danh </title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="container">
            <h1>58HT-CNW</h1>
            <table class="table table-bordered table-condensed">
               <thead>
                                <th width="5%"></th>
                                <th width="30%">Tên sinh viên</th>
                                <th width="20%">Mã sinh viên</th>
                                <th width="15%">Tình trạng</th>
                                <th width="20%">Điểm danh</th>
                                <th width="10%">Nhận xét</th>
                            </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                              <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['address']); ?></td>
                               <td><?php echo htmlspecialchars($row['gender']); ?></td>
                               <td><?php echo htmlspecialchars($row['designation']); ?></td>
                            <td><?php echo htmlspecialchars($row['age']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>
</html>