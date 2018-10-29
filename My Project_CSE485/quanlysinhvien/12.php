<?php
require_once 'database_connection.php';
  
try {
 $pdo = new PDO("mysql:host=localhost;dbname=quanlysinhvien", "root", "");
  
    $sql = 'SELECT  id,
                    name,
                    masv,
                    diemqt,
                    diemthi
                
                  
               FROM 58ht
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
        <title>ĐIỂM SINH VIÊN</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="container">
            <h1>58TH1-HQTCSDL</h1>
            <table  class="table table-bordered table-condensed">
               <thead>
                                <th width="5%"></th>
                                <th width="30%">Tên sinh viên</th>
                                <th width="20%">Mã sinh viên</th>
                                <th width="15%">Điểm quá trình</th>
                                <th width="20%">Điểm thi</th>
                                
                            </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                              <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['masv']); ?></td>
                               <td><?php echo htmlspecialchars($row['diemqt']); ?></td>
                               <td><?php echo htmlspecialchars($row['diemthi']); ?></td>
                         
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>
</html>