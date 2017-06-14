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
                $r_equip = selectDb("from equipment_info where unique_id='".$equipment."' and active='1'");
                $d_equip=mysql_fetch_array($r_equip);

            echo '<div class="col-md-1 col-sm-1 "><a href="http://localhost/HostingDetail/src/app/cscs/equipment/equipment-edit.php?serial='.$equipment.'" class="btn btn-info"><span class="glyphicon glyphicon-chevron-left"></span> ย้อนกลับ</a></div><br></br>';
             echo '<form name="frm" method="post">';
                echo '  <div class="row">';
                echo '      <div class="container">';
                
                echo '          <div class="col-sm-12"><h4>แจ้งชำรุดสำหรับอุปกรณ์ '.$d_equip['equipment'].'&nbsp/&nbsp'.$d_equip['serial_n'].'</h4></div>';
                echo '          <div class="panel panel-default">
                                    <div class="panel-body form-horizontal payment-form">';
                echo '                  <div class="form-group"><label for="issue_date" class="col-sm-3 control-label">วันที่แจ้งปัญหา:</label>
                                            <div class="col-sm-9"><input type="date" class="form-control" name="issue_date" ></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="receipt_date" class="col-sm-3 control-label">วันที่ได้รับแจ้ปัญหา:</label>
                                            <div class="col-sm-9"><input type="date" class="form-control" name="receipt_date" ></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="Record_number" class="col-sm-3 control-label">เลขที่บันทึก:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="Record_number" placeholder="กรุณากรอกเลขที่บันทึก."></div>
                                        </div>';

                echo '                  <div class="form-group"><label for="problem_type" class="col-sm-3 control-label">ประเภทของปัญหา:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="problem_type" placeholder="กรุณากรอกประเภทของปัญหา."></div>
                                        </div>';
                // echo '                  <div class="form-group"><label for="problem_type" class="col-sm-3 control-label">รหัสอุปกรณ์ชำรุด:</label>
                //                             <div class="col-sm-9"><input type="text" class="form-control" name="problem_type" placeholder="กรุณากรอกรหัสอุปกรณ์ชำรุด."></div>
                //                         </div>';
                echo '                  <div class="form-group"><label for="cause" class="col-sm-3 control-label">สาเหตุของปัญหา:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="cause" placeholder="กรุณากรอกสาเหตุของปัญหา."></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="defective" class="col-sm-3 control-label">อาการที่ชำรุด:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="defective" placeholder="กรุณากรอกอาการที่ชำรุด."></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="effect" class="col-sm-3 control-label">ผลกระทบที่เกิดขึ้น:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="effect" placeholder="กรุณากรอกผลกระทบที่เกิดขึ้น."></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="edit_date" class="col-sm-3 control-label">วันที่แก้ไข:</label>
                                            <div class="col-sm-9"><input type="date" class="form-control" name="edit_date" ></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="edit_time" class="col-sm-3 control-label">ครั้งที่แก้ไข:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="edit_time" placeholder="กรุณากรอกจำนวนครั้งที่แก้ไข."></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="action" class="col-sm-3 control-label">การดำเนินการ:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="action" placeholder="กรุณากรอกการดำเนินการ."></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="action_info" class="col-sm-3 control-label">รายระเอียดในการดำเนินการ:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="action_info" placeholder="กรุณากรอกรายระเอียดในการดำเนินการ."></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="equip_use" class="col-sm-3 control-label">อุปกรณ์ที่ใช้:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="equip_use" placeholder="กรุณากรอกรายละเอียดอุปกรณ์ที่ใช้."></div>
                                        </div>';

                echo '                  <div class="form-group"><label for="edit_status" class="col-sm-3 control-label">สถานะการแก้ไข:</label>
                                            <div class="col-sm-9"><select class="form-control" name="edit_status" id="edit_status">
                                                        <option value="-1"> --- เลือกสถานะการแก้ไข--- </option>
                                                        <option value="ดำเนินการแก้ไขแล้วเสร็จ">ดำเนินการแก้ไขแล้วเสร็จ</option>
                                                        <option value="ยังไม่ได้แก้ไข">ยังไม่ได้แก้ไข</option>
                                            </select></div>
                                        </div>';

                echo '                  <div class="form-group"><label for="operator" class="col-sm-3 control-label">ผู้ดำเนินงาน:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="operator" placeholder="กรุณากรอกชื่อผู้ดำเนินงาน."></div>
                                        </div>';
                echo '                  <div class="form-group"><label for="note" class="col-sm-3 control-label">หมายเหตุ:</label>
                                            <div class="col-sm-9"><input type="text" class="form-control" name="note" placeholder="หมายเหตุ."></div>
                                        </div>';
                echo '                  <div class="form-group">
                                            <div class="col-sm-12 text-right"><button type="reset" name="reset" class="btn btn-danger"> Reset </button></div>
                                            <div class="col-sm-12"></div>
                                            <div class="col-sm-12 text-right"><button class="btn btn-primary" type="submit" name="submit" value="'.$equipment.'"><span class="glyphicon glyphicon-save"></span> SAVE</button></div>
                                        </div>';
                echo '              </div>
                                </div>
                            </div>
                        </div>
                      </form>';
            ?>
            <?php
        if(isset($_POST['submit'])) {    
        
        $data=array(
            'active' => 1,
            'unique_id' => $_POST['submit'],
            'issue_date' => $_POST['issue_date'],
            'receipt_date' => $_POST['receipt_date'],
            'Record_number' => $_POST['Record_number'],
            'problem_type' => $_POST['problem_type'],
            'cause' => $_POST['cause'],
            'defective' => $_POST['defective'],
            'edit_date' => $_POST['edit_date'],
            'edit_time' => $_POST['edit_time'],
            'action' => $_POST['action'],
            'action_info' => $_POST['action_info'],
            'equip_use' => $_POST['equip_use'],
            'edit_status' => $_POST['edit_status'],
            'operator' => $_POST['operator'],
            'note' => $_POST['note']
        );

        $result=insertDb($data, 'defective_info');
    }
include '../../../shared/footer/footer.php';
            ?>
        </div>
    </body>
</html>