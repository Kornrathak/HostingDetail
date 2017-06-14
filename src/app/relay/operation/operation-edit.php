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
            $opid=$_GET ['operation'];
            $r_equip = selectDb("from operation_info where unique_id='".$opid."' and active=1");
            $d_equip=mysql_fetch_array($r_equip);
            echo '<div class="header"><h2>ข้อมูล Relay</h2></div>';
            echo '<div class="col-md-1 col-sm-1 "><a href="http://localhost/HostingDetail/src/app/relay/relay.php" class="btn btn-info"><span class="glyphicon glyphicon-chevron-left"></span> ย้อนกลับ</a></div><br></br>';
            echo '<div class="row">';
            echo '<div class="col-md-12 col-sm-12 " >
                    <table class="table table-striped table-bordered" >
                      <tr>
                        <tr>
                          <th scope="col">รูปภาพ</th>
                        </tr>
                        <tr>';
            echo '        <th scope="col"><img src="../../../shared/upload/'.$d_equip['pic'].'"></th>
                        </tr>
                      </tr>  
                    </table>
                  </div>
                  </div>';
            echo '<div class="col-md-12 col-sm-12 "><table class="table table-striped table-bordered">';
            echo '<tr><h2 align="center">สถานีไฟฟ้า '.$d_equip['sub_id'].'</h2>';
            echo '  <tr><th scope="col">OPERATION ID</th><td>'.$d_equip['operation_id'].'</td></tr>';
            echo '  <tr><th scope="col">RELAY TYPE</th><td>'.$d_equip['relaytype'].'</td></tr>';
            echo '  <tr><th scope="col">PRODUCT</th><td>'.$d_equip['product'].'</td></tr>';
            echo '  <tr><th scope="col">PRODUCT TYPE</th><td>'.$d_equip['property_type'].'</td></tr>';
            echo '  <tr><th scope="col">Seriel Number(SN)</th><td>'.$d_equip['sn'].'</td></tr>';
            echo '  <tr><th scope="col">ตัวแปลงแรงดัน(VT)</th><td>'.$d_equip['vt'].'</td></tr>';
            echo '  <tr><th scope="col">ตัวแปลงกระแส(CT)</th><td>'.$d_equip['ct'].'</td></tr>';
            echo '  <tr><th scope="col">ผู้ใช้ไงขนานจ่ายร่วม(VSPP)</th><td>'.$d_equip['vspp'].'</td></tr>';
            echo '  <tr><th scope="col">หมายเหตุ(REMARK)</th><td>'.$d_equip['remark'].'</td></tr>';
       
            echo '</tr>';
            echo '<td><div align="center"><a href="http://localhost/HostingDetail/src/app/realy/operation/operation-edit_ac.php?id='.$d_equip['id'].'" class="btn btn-magick"><span class="glyphicon glyphicon-pencil"></span> <strong>แก้ไขข้อมูล</strong></a></div></td>';
            echo '<td><div align="center"><a href="http://localhost/HostingDetail/src/shared/upload/upload-picture.php?id='.$d_equip['id'].'&table=equipment_info&target='.base64_encode('http://localhost/HostingDetail/src/app/cscs/equipment/equipment-edit.php?serial='.$d_equip['unique_id']).'" class="btn btn-magick"><span class="glyphicon glyphicon-cloud-upload"></span> <strong>อัพโหลดรูปภาพ</strong></a></div></td>';
            echo '</table></div>';

           echo '<div class="col-md-1 col-sm-1 "><a href="http://localhost/HostingDetail/src/app/relay/relay-all.php" class="btn btn-info">แสดงข้อมูลทั้งหมด<span class="glyphicon glyphicon-chevron-right"></span></a></div><br></br>';
            include '../../../shared/footer/footer.php';
          ?>
        </div>
    </body>
</html>