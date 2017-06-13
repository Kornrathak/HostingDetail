<html>
    <head>
        <title>RELAY SECTION</title>
        <link rel="shortcut icon" href="http://localhost/HostingDetail/src/img/logo/logos.ico">
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
                $id_province=$_GET['id'];
                if(!$_GET['id']) {
                    echo '<div class="header"><h2><font color=red>กรุณาเลือกสถานีก่อน ทำการแก้ไข</font></h2></div>';
                    echo '<div class="col-md-1 col-sm-1 ">
                            <a href="http://localhost/HostingDetail/src/app/cscs/cscs.php" class="btn btn-info"><span class="glyphicon glyphicon-chevron-left"></span> ย้อนกลับ</a>
                          </div>';
                }

                $r_province=selectDb('from provinceinfo where id="'.$id_province.'"');
                $d_province=mysql_fetch_array($r_province);
                echo '<div class="header"><h2>แก้ไขข้อมูลสถานี CSCS</h2></div>';
                echo '<form name="frm" method="post">';
                echo '  <div class="row">';
                echo '      <div class="container">';
                echo '          <div class="row">
                                    <div class="col-sm-12"><legend>Edit: แก้ไขรายละเอียดสถานี</legend></div>';
                echo '              <div class="col-sm-12"><h4>สถานี'.$d_province['sub_id'].'</h4>
                                        <div class="panel panel-default">
                                            <div class="panel-body form-horizontal payment-form">';
                echo '                          <div class="form-group"><label for="city" class="col-sm-3 control-label">จังหวัด:</label>
                                                    <div class="col-sm-9"><input type="text" class="form-control" name="city" value="'.$d_province['city'].'"></div>
                                                </div>';
                echo '                          <div class="form-group"><label for="sc" class="col-sm-3 control-label">ระบบSCADA:</label>
                                                    <div class="col-sm-9"><input type="text" class="form-control" name="sc" value="'.$d_province['scada'].'"></div>
                                                </div>';
                echo '                          <div class="form-group"><label for="co" class="col-sm-3 control-label">ระบบControl:</label>
                                                    <div class="col-sm-9"><input type="text" class="form-control" name="co" value="'.$d_province['control'].'"></div>
                                                </div>';
                echo '                          <div class="form-group"><label for="pro" class="col-sm-3 control-label">ผลิตภัณฑ์:</label>
                                                    <div class="col-sm-9"><input type="text" class="form-control" name="pro" value="'.$d_province['product'].'"></div>
                                                </div>';
                echo '                          <div class="form-group"><label for="proj" class="col-sm-3 control-label">โครงการ:</label>
                                                    <div class="col-sm-9"><input type="text" class="form-control" name="proj" value="'.$d_province['project'].'"></div>
                                                </div>';
                echo '                          <div class="form-group"><label for="con" class="col-sm-3 control-label">เลขที่สัญญา:</label>
                                                    <div class="col-sm-9"><input type="text" class="form-control" name="con" value="'.$d_province['contract'].'"></div>
                                                </div>';
                echo '                          <div class="form-group"><label for="wars" class="col-sm-3 control-label">สถานะการรับประกัน:</label>
                                                    <div class="col-sm-9"><input type="text" class="form-control" name="wars" value="'.$d_province['warranty_status'].'"></div>
                                                </div>';
                echo '                          <div class="form-group"><label for="warp" class="col-sm-3 control-label">หมดระยะประกัน</label>
                                                    <div class="col-sm-9"><input type="date" class="form-control" id="myDate" name="warp" min="'.$d_province['warranty_period'].'"></div>
                                                </div>';
                echo '                          <div class="form-group"><label for="wos" class="col-sm-3 control-label">สถานะการใช้งาน:</label>
                                                    <div class="col-sm-9"><input type="text" class="form-control" name="wos" value="'.$d_province['working_status'].'"></div>
                                                </div>';
                echo '                          <div class="form-group"><label for="def" class="col-sm-3 control-label">จำนวนอุปกรณ์ชำรุด:</label>
                                                    <div class="col-sm-9"><input type="text" class="form-control" name="def" value="'.$d_province['defective'].'"></div>
                                                </div>';
                echo '                          <div class="form-group">
                                                    <div class="col-sm-12 text-right"><button class="btn btn-primary" type="submit" name="submit"><span class="glyphicon glyphicon-save"></span> SAVE</button></div>
                                                </div>';
                echo '                      </div>
                                        </div>            
                                    </div>
                                </div>
                            </div>
                        </div>';
                echo '</form>';
                echo '<div class="col-md-1 col-sm-1 ">
                        <a href="http://localhost/HostingDetail/src/app/cscs/cscs.php" class="btn btn-info"><span class="glyphicon glyphicon-chevron-left"></span> ย้อนกลับ</a>
                      </div>';

                if($_POST){
                    $data=array(
                        'city' => $_POST['city'],
                        'scada' => $_POST['sc'],
                        'control' => $_POST['co'],
                        'product' => $_POST['pro'],
                        'project' => $_POST['proj'],
                        'contract' => $_POST['con'],
                        'warranty_status' => $_POST['wars'],
                        'warranty_period' => $_POST['warp'],
                        'working_status' => $_POST['wos'],
                        'defective' => $_POST['def']
                    );
                    
                    $result=updateDb($data, 'provinceinfo', 'id='.$id_province);
                    if($result) {
                        echo "<br><br><br>";
                        echo "<center><font size = 10 color=black>UPDATE SUCCESSFULLY</font></center>";
                        echo "<br>";
                    }
                    else {
                        echo "<br><br><br>";
                        echo "<center><font size = 10 color=red>UPDATE ERROR: ".$result."</font></center>";
                        echo "<br>";
                    }
                }
                
                include '../../../shared/footer/footer.php';
                echo '<script>
                        document.getElementById("myDate").value="'.$d_province['warranty_period'].'";
                      </script>';
            ?>
        </div>
    </body>
</html>
