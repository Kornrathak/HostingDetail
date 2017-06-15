<!DOCTYPE html>
<html lang="en">
<head>
  <title>ข้อมูลอุปกรณ์RELAY</title>
        <link rel="shortcut icon" href="../../img/logo/logos.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../shared/css/insert.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../../shared/css/layout.css" />
        <link rel="stylesheet" type="text/css" href="../../shared/css/button.css" />
        <link rel="stylesheet" type="text/css" href="../../shared/css/panel.css" />
</head>
<body id="myPage">
        <div class="container">
<?php
                include '../../shared/nav/nav.php'; 
                include '../../shared/database/connection.php'; 
                echo '<div class="header"><h2>ดูอุปกรณ์ RELAY ทั้งหมด</h2></div>'; 
                echo '<div class="col-md-12 col-sm-12 ">';
                echo '<table class="table table-bordered ">';
                echo '  <tr class="info" >';
                ?>
                            <th scope="col"><center>ลำดับ</center></th>
                            <th scope="col"><center>Operation_ID</center></th>
                            <th scope="col"><center>Relay Type</center></th>
                            <th scope="col"><center>Product</center></th>
                            <th scope="col"><center>Product Type</center></th>
                            <th scope="col"><center>Seriel Number(SN)</center></th>
                            <th scope="col"><center>ตัวแปลงแรงดัน(VT)</center></th>
                            <th scope="col"><center>ตัวแปลงกระแส(CT)</center></th>
                            <th scope="col"><center>ผู้ใช้ไงขนานจ่ายร่วม(VSPP)</center></th>
                            <th scope="col"><center>หมายเหตุ(REMARK)</center></th>
                            <?php
                echo '  </tr>';
                $r_equip=selectDb("from operation_info");
                while($row=mysql_fetch_array($r_equip)) {
                   echo "<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[4]."</td><td>".$row[5]."</td>
                            <td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td>
                            <td>".$row[10]."</td><td>".$row[11]."</td></tr>";
                }


                echo '</table>' ;



                include '../../shared/footer/footer.php';
            ?>
        </div>
    </body>
</html>
