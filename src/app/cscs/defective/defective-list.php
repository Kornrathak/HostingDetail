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
                echo    "<div class='header'>
                            <h4>เพิ่มรายงานอุปกรณ์ชำรุด </h4>
                        </div>";
                $equipment=$_GET ['equipment'];
                $r_equip = selectDb("from equipment_info where unique_id='".$equipment."' and active=1");
                $d_equip=mysql_fetch_array($r_equip);

            echo '<div class="col-md-1 col-sm-1 "><a href="http://localhost/HostingDetail/src/app/cscs/cscs.php" class="btn btn-info"><span class="glyphicon glyphicon-chevron-left"></span> ย้อนกลับ</a></div><br></br>';
             echo '<form name="frm" method="post">';
                echo '  <div class="row">';
                echo '      <div class="container">';
                
                echo '          <div class="col-sm-12"><h4>แจ้งชำรุดสำหรับอุปกรณ์ '.$d_equip['equipment'].'&nbsp/&nbsp'.$d_equip['serial_n'].'</h4></div>';
                echo '          <div class="panel panel-default">
                                    <div class="panel-body form-horizontal payment-form">';
                echo '                  <div class="form-group"><label for="eq" class="col-sm-3 control-label">วันที่แจ้งปัญหา:</label>
                                            <div class="col-sm-9"><input type="date" class="form-control" name="di" ></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="ge" class="col-sm-3 control-label">วันที่ได้รับแจ้ปัญหา:</label>
                                            <div class="col-sm-9"><input type="date" class="form-control" name="dr" ></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="sn" class="col-sm-3 control-label">เลขที่บันทึก:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="rn" placeholder="กรุณากรอกเลขที่บันทึก."></div>
                                        </div>';

                echo '                  <div class="form-group"><label for="ty" class="col-sm-3 control-label">ประเภทของปัญหา:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="ty" placeholder="กรุณากรอกประเภทของปัญหา."></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="in" class="col-sm-3 control-label">รหัสอุปกรณ์ชำรุด:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="in" placeholder="กรุณากรอกรหัสอุปกรณ์ชำรุด."></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="vo" class="col-sm-3 control-label">สาเหตุของปัญหา:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="vo" placeholder="กรุณากรอกสาเหตุของปัญหา."></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="res" class="col-sm-3 control-label">อาการที่ชำรุด:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="res" placeholder="กรุณากรอกอาการที่ชำรุด."></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="ins" class="col-sm-3 control-label">ผลกระทบที่เกิดขึ้น:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="ins" placeholder="กรุณากรอกผลกระทบที่เกิดขึ้น."></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="insp" class="col-sm-3 control-label">วันที่แก้ไข:</label>
                                            <div class="col-sm-9"><input type="date" class="form-control" name="insp" ></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="wok" class="col-sm-3 control-label">ครั้งที่แก้ไข:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="wok" placeholder="กรุณากรอกจำนวนครั้งที่แก้ไข."></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="note" class="col-sm-3 control-label">การดำเนินการ:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="note" placeholder="กรุณากรอกการดำเนินการ."></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="note" class="col-sm-3 control-label">รายระเอียดในการดำเนินการ:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="note" placeholder="กรุณากรอกรายระเอียดในการดำเนินการ."></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="note" class="col-sm-3 control-label">อุปกรณ์ที่ใช้:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="note" placeholder="กรุณากรอกรายละเอียดอุปกรณ์ที่ใช้."></div>
                                        </div>';

                echo '                  <div class="form-group"><label for="note" class="col-sm-3 control-label">สถานะการแก้ไข:</label>
                                            <div class="col-sm-9"><select class="form-control" name="status" id="status">
                                                        <option value="-1"> --- เลือกสถานะการแก้ไข--- </option>
                                                        <option value="ดำเนินการแก้ไขแล้วเสร็จ">ดำเนินการแก้ไขแล้วเสร็จ</option>
                                                        <option value="ยังไม่ได้แก้ไข">ยังไม่ได้แก้ไข</option>
                                            </select></div>
                                        </div>';

                 echo '                  <div class="form-group"><label for="note" class="col-sm-3 control-label">อุปกรณ์ที่ใช้:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="note" placeholder="กรุณากรอกรายละเอียดอุปกรณ์ที่ใช้."></div>
                                        </div>';
                echo '                  <div class="form-group">
                                            <div class="col-sm-12 text-right"><button type="reset" name="reset" class="btn btn-danger"> Reset </button></div>
                                            <div class="col-sm-12"></div>
                                            <div class="col-sm-12 text-right"><button class="btn btn-primary" type="submit" name="submit"><span class="glyphicon glyphicon-save"></span> SAVE</button></div>
                                        </div>';
                echo '              </div>
                                </div>
                            </div>
                        </div>
                      </form>';
            ?>
            <?php
        if(isset($_POST['submit']) && $chkInsert == 0) {    
        $r_sub=selectDb("from defective_info where id='".$_POST['sub']."'");
        $id_uni=base64_encode($_POST['sn']);
        $data=array(
            'equipment' => $_POST['name'],
            'active' => 1,
            'unique_id' => $id_uni,
            'sub_id' => mysql_fetch_array($r_sub)['sub_id'],
            'generation' => $_POST['gene'],
            'serial_n' => $_POST['sn'],
            'property_code' => $_POST['code'],
            'type' => $_POST['type'],
            'installed' => $_POST['install'],
            'voltage' => $_POST['vol'],
            'responsible_person' => $_POST['person'],
            'insurance' => $_POST['insurance'],
            'insurance_period' => $_POST['inst'],
            'working_status' => $_POST['status'],
            'note' => $_POST['note']
        );

        $r_equip = insertDb($data, 'equipment_info');
        $select=$_POST['sub'];
        $chkInsert=1;
    }
?>
            
        </div>
                