<html>
    <head>
        <title>RELAY SECTION</title>
        <link rel="shortcut icon" href="../../img/logo/logos.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../../shared/css/insert.css" />
        <link rel="stylesheet" type="text/css" href="../../../shared/css/layout.css" />
    </head>
    <body id="myPage">
        <div class="container">
          <?php 
            include '../../../shared/nav/nav.php';
            include '../../../shared/database/connection.php';
            echo '<div class="header"><h2>ข้อมูล CSCS</h2></div>';
            echo '<div class="col-md-1 col-sm-1 "><a href="http://localhost/HostingDetail/src/app/cscs/cscs.php" class="btn btn-primary">ย้อนกลับ</a></div><br></br>';
            echo '<div class="row">';
            $serial=$_GET ['serial'];
            echo '<div class="col-md-12 col-sm-12 " >
                    <table class="table table-striped table-bordered" >
                      <tr>
                        <tr>
                          <th scope="col">รายละเอียดอุปกรณ์</th>
                        </tr>
                        <tr>';
            echo '        <th scope="col">Picture</th>
                        </tr>
                      </tr>  
                    </table>
                  </div>
                  </div>';
            $r_equip = selectDb("from equipment_info where serial_n='".$serial."' and active=1");
            echo '<div class="col-md-12 col-sm-12 "><table class="table table-striped table-bordered">';
            $d_equip=mysql_fetch_array($r_equip);
            echo '<tr><h2 align="center">สถานีไฟฟ้า '.$d_equip['sub_id'].'</h2>';
            echo '  <tr><th scope="col">ชื่ออุปกรณ์</th><td>'.$d_equip['equipment'].'</td></tr>';
            echo '  <tr><th scope="col">รุ่น</th><td>'.$d_equip['generation'].'</td></tr>';
            echo '  <tr><th scope="col">serial</th><td>'.$d_equip['serial_n'].'</td></tr>';
            echo '  <tr><th scope="col">รหัสทรัพย์สิน</th><td>'.$d_equip['property_code'].'</td></tr>';
            echo '  <tr><th scope="col">ประเภท</th><td>'.$d_equip['type'].'</td></tr>';
            echo '  <tr><th scope="col">ที่ติดตั้ง</th><td>'.$d_equip['installed'].'</td></tr>';
            echo '  <tr><th scope="col">แรงดันไฟฟ้า</th><td>'.$d_equip['voltage'].'</td></tr>';
            echo '  <tr><th scope="col">ผู้รับผิดชอบดูแล</th><td>'.$d_equip['responsible_person'].'</td></tr>';
            echo '  <tr><th scope="col">การรับประกัน</th><td>'.$d_equip['insurance'].'</td></tr>';
            echo '  <tr><th scope="col">ระยะประกัน</th><td>'.$d_equiprow['insurance_period'].'</td></tr>';
            echo '  <tr><th scope="col">สถานะภาพการใช้งาน</th><td>'.$d_equip['working_status'].'</td></tr>';
            echo '  <tr><th scope="col">หมายเหตุ</th><td>'.$d_equip['note'].'</td></tr>';
            echo '</tr>';
            echo '<td><div align="center"><a href=edit_ac.php?id='.$d_equip['id'].' class="btn btn-primary"><strong>แก้ไขข้อมูล</strong></a></div></td>';
            echo '<td><div align="center"><a href=uppic3.php?id='.$id.' class="btn btn-primary"><strong>อัพโหลดรูปภาพ</strong></a></div></td>';
            echo '</table></div>';
          //$subname=$d_equip["sub_name"];

            echo '<div class="col-md-12 col-sm-12"><table class="table table-striped table-bordered">';
            echo '<tr>
                    <th scope="col" colspan="4" bgcolor="red">ข้อมูลอุปกรณ์ชำรุด</th>
                    <th scope="col" bgcolor="red"><a href=edit_ac2.php?equiment='.$d_equip['unique_id'].' class="btn btn-primary"><strong>เพิ่มรายงาน</strong></a></th>
                  </tr>';
            echo '<tr><tr class="info">
                    <th scope="col"><center>วันที่แก้ไข</center></th>
                    <th scope="col"><center>สาเหตุการชำรุด</center></th>
                    <th scope="col"><center>อาการชำรุด</center></th>
                    <th scope="col"><center>วิธีแก้ไข</center></th>
                    <th scope="col"><center>ผู้ปฏิบัติงาน</center></th>
                  </tr></tr>';
            $r_def=selectDb("from defective_info where unique_id='".$d_equip['unique_id']."'");
            while($d_def=mysql_fetch_array($r_def)){
              echo '<tr class=active align=center>
                      <td>'.$d_def['edit_date'].'</td>
                      <td>'.$d_def['cause'].'</td>
                      <td>'.$d_defrow['defective'].'</td>
                      <td>'.$d_def['solution'].'</td>
                      <td>'.$d_def['operator'].'</td>
                    </tr>';
            }
            echo '</table></div>';
            include '../../../shared/footer/footer.php';
          ?>
        </div>
    </body>
</html>