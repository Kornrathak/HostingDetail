<html>
    <head>
        <title>RELAY SECTION</title>
        <link rel="shortcut icon" href="http://localhost/HostingDetail/src/img/logo/logos.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../../shared/css/insert.css" />
        <link rel="stylesheet" type="text/css" href="../../../shared/css/layout.css" />
        <link rel="stylesheet" type="text/css" href="../../../shared/css/button.css" />
    </head>
    <body id="myPage">
        <div class="container">
          <?php 
            include '../../../shared/nav/nav.php';
            include '../../../shared/database/connection.php';
                echo '<div class="header"><h2>ดูอุปกรณ์ CSCS ทั้งหมด</h2></div>'; 
                echo '<div class="col-md-12 col-sm-12 ">';
                echo '<table class="table table-bordered ">';
                echo '  <tr class="info" >';
                ?>
                            <th scope="col"><center>ลำดับ</center></th>
                            <th scope="col"><center>วันที่แจ้งปัญหา</center></th>
                            <th scope="col"><center>วันที่ได้รับแจ้งปัญหา</center></th>
                            <th scope="col"><center>เลขที่บันทึก</center></th>
                            <th scope="col"><center>ประเภทของปัญหา</center></th>
                            <th scope="col"><center>สาเหตุของปัญหา</center></th>
                            <th scope="col"><center>อาการที่ชำรุด</center></th>
                            <th scope="col"><center>ผลกระทบที่เกิดขึ้น</center></th>
                            <th scope="col"><center>วันที่แก้ไข</center></th>
                            <th scope="col"><center>ครั้งที่แก้ไข</center></th>
                            <th scope="col"><center>การดำเนินการ</center></th>
                            <th scope="col"><center>รายละเอียดในการดำเนินการ</center></th>
                            <th scope="col"><center>อุปกรณ์ที่ใช้</center></th>
                            <th scope="col"><center>สถานะการแก้ไข</center></th>
                            <th scope="col"><center>ผู้ดำเนินงาน</center></th>
                            <th scope="col"><center>หมายเหตุ</center></th>

                            <?php
                echo '  </tr>';
                $r_equip=selectDb("from defective_info");
                while($row=mysql_fetch_array($r_equip)) {
                   echo "<td>".$row[0]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td>
                            <td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td>
                            <td>".$row[10]."</td><td>".$row[11]."</td><td>".$row[12]."</td><td>".$row[13]."</td>
                            <td>".$row[14]."</td><td>".$row[15]."</td><td>".$row[16]."</td><td>".$row[17]."</td></tr>";
                }


                echo '</table>' ;



                include '../../../shared/footer/footer.php';
            ?>
        </div>
    </body>
</html>