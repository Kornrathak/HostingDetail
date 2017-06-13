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
                $id_equipment=$_GET['id'];
                
                $r_equip=selectDb('from equipment_info where id="'.$id_equipment.'" and active="1"');
                $d_equip=mysql_fetch_array($r_equip);
                $data_old=array(
                    'equipment' => $_POST['eq'],
                    'generation' => $_POST['ge'],
                    'serial_n' => $_POST['sn'],
                    'property_code' => $_POST['proc'],
                    'type' => $_POST['ty'],
                    'installed' => $_POST['in'],
                    'voltage' => $_POST['vo'],
                    'responsible_person' => $_POST['res'],
                    'insurance' => $_POST['ins'],
                    'insurance_period' => $_POST['insp'],
                    'working_status' => $_POST['wok'],
                    'note' => $_POST['note'],
                    'active' => 0
                );
                echo '<div class="header"><h2>แก้ไขข้อมูลอุปกรณ์ CSCS</h2></div>';
                echo '<form name="frm" method="post">';
                echo '  <div class="row">';
                echo '      <div class="container">';
                echo '          <div class="row"><div class="col-sm-12"><legend>Edit: อุปกรณ์</legend></div></div>';
                echo '          <div class="col-sm-12"><h4>แก้ไขในส่วนของ '.$d_equip['equipment'].'&nbsp/&nbsp'.$d_equip['serial_n'].'</h4></div>';
                echo '          <div class="panel panel-default">
                                    <div class="panel-body form-horizontal payment-form">';
                echo '                  <div class="form-group"><label for="eq" class="col-sm-3 control-label">ชื่ออุปกรณ์:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="eq" value="'.$d_equip['equipment'].'"></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="ge" class="col-sm-3 control-label">รุ่น:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="ge" value="'.$d_equip['generation'].'"></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="sn" class="col-sm-3 control-label">Serial:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="sn" value="'.$d_equip['serial_n'].'"></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="proc" class="col-sm-3 control-label">รหัสทรัพย์สิน:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="proc" value="'.$d_equip['property_code'].'"></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="ty" class="col-sm-3 control-label">ประเภท:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="ty" value="'.$d_equip['type'].'"></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="in" class="col-sm-3 control-label">ที่ติดตั้ง:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="in" value="'.$d_equip['installed'].'"></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="vo" class="col-sm-3 control-label">แรงดันไฟฟ้า:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="vo" value="'.$d_equip['voltage'].'"></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="res" class="col-sm-3 control-label">ผู้ดูแลรับผิดชอบ:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="res" value="'.$d_equip['responsible_person'].'"></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="ins" class="col-sm-3 control-label">การรับประกัน:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="ins" value="'.$d_equip['insurance'].'"></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="insp" class="col-sm-3 control-label">ระยะประกัน:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="insp" value="'.$d_equip['insurance_period'].'"></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="wok" class="col-sm-3 control-label">สถานะภาพการใช้งาน:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="wok" value="'.$d_equip['working_status'].'"></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="note" class="col-sm-3 control-label">หมายเหตุ:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="note" value="'.$d_equip['note'].'"></div>
                                        </div>';
                echo '                  <div class="form-group">
                                            <div class="col-sm-12 text-right"><button class="btn btn-primary" type="submit" name="submit"><span class="glyphicon glyphicon-save"></span> SAVE</button></div>
                                        </div>';
                echo '              </div>
                                </div>
                            </div>
                        </div>
                      </form>';
                echo '<div class="col-md-1 col-sm-1 ">
                        <a href="http://localhost/HostingDetail/src/app/cscs/equipment/equipment-edit.php?serial='.$d_equip['unique_id'].'" class="btn btn-info"><span class="glyphicon glyphicon-chevron-left"></span> ย้อนกลับ</a>
                      </div>';

                if ($_POST) {
                    $data_new=array(
                        'equipment' => $_POST['eq'],
                        'generation' => $_POST['ge'],
                        'serial_n' => $_POST['sn'],
                        'property_code' => $_POST['proc'],
                        'type' => $_POST['ty'],
                        'installed' => $_POST['in'],
                        'voltage' => $_POST['vo'],
                        'responsible_person' => $_POST['res'],
                        'insurance' => $_POST['ins'],
                        'insurance_period' => $_POST['insp'],
                        'working_status' => $_POST['wok'],
                        'note' => $_POST['note'],
                        'active' => 1,
                        'sub_id' => $d_equip['sub_id'],
                        'unique_id' => $d_equip['unique_id']
                    );

                    $result=updateDb($data_old, 'equipment_info', 'id="'.$d_equip['id'].'" and active="1"');
                    if ($result != 1) echo '<br><br><br><center><font color=red>Error: '.$result.'</font></center><br>';
                    $result=insertDb($data_new, 'equipment_info');
                    if ($result != 1) echo '<br><br><br><center><font color=red>Error: '.$result.'</font></center><br>';
                    if ($result == 1) echo "<br><br><br><center><font size = 10 color=black>UPDATE SUCCESSFULLY</font></center><br>";
                }
                include '../../../shared/footer/footer.php';
            ?>
        </div>
    </body>
</html>

