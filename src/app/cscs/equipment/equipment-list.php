<div class="container">
    <div class="header">
        <h4>ตารางแสดงอุปกรณ์ </h4>
    </div>
    <div class="col-md-12 col-sm-12 ">
        <table class="table table-bordered "><!--table-striped-->
            <tr class="info" >
                <th scope="col"><center>Equipment</center></th>
                <th scope="col"><center>Name</center></th>
                <th scope="col"><center>Panel</center></th>
                <th scope="col"><center>Serial</center></th>
                <th scope="col"><center>Voltage</center></th>
            </tr>
            <?php
                $r_sub=selectDb("from substation where id='".$select."'");
                $r_equip=selectDb("from equipment_info where active='1' and sub_id='".mysql_fetch_array($r_sub)[1]."'");
                while($row=mysql_fetch_array($r_equip)) {
                    echo "<tr align=center ><td><a href='http://localhost/HostingDetail/src/app/cscs/equipment.php?serial=".$row[6]."'>".$row[1]."</a></td>";
                    echo "<td>".$row[5]."</td><td>".$row[9]."</td><td>".$row[6]."</td><td>".$row[10]."</td></tr>";
                }

            ?>
        </table>
        <?php
            echo $select;
        ?>
    </div>
    <button class="btn btn-primary" data-toggle="modal" data-target="#basicModal"> กรอกข้อมูลเพิ่มเติม </button>
    <div class="modal fade" id="basicModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h2>กรอกข้อมูลอุปกรณ์ CSCS</h2>
                </div>
                <div class="modal-body">
                    <form role="form" action="" method="post">
                        <div class="form-group">
                            <label for="name">ชื่ออุปกรณ์</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="กรุณากรอกชื่ออุปกรณ์. (ห้ามเว้ณวรรค)">
                        </div>
                        <div class="form-group">
                            <label for="substation">Station</label>
                            <select class='form-control' name="sub" id="sub"><option value='-1'> --- เลือกสถานี --- </option>
                                <?php
                                    $r_sub=selectDb("from substation");
                                    while($row=mysql_fetch_row($r_sub)) {
                                        $text = "<option value='".$row[0]."'";
                                        if($select != -1 && $select == $row[0]) $text .= "selected";
                                        $text .= ">".$row[1]."</option>";//$r จำนวนตัวเลข คือลำดับข้อมูล
                                        echo $text;
                                    }
                                ?>
                            </select>
                        </div>
                        <!--<div class="form-group">
                            <label for="gene">unique_id</label>
                            <input type="text" class="form-control" name="uni" id="uni" placeholder="กรุณากรอกunique_id">
                        </div>-->
                        <div class="form-group"><label for="gene">รุ่น</label>
                            <input type="text" class="form-control" name="gene" id="gene" placeholder="กรุณากรอกชื่อรุ่น. (ห้ามเว้ณวรรค)">
                        </div>
                        <div class="form-group"><label for="sn">serial</label>
                            <input type="text" class="form-control" name="sn" id="sn" placeholder="กรุณากรอกserial. (ห้ามเว้ณวรรค)">
                        </div>
                        <div class="form-group"><label for="code">รหัสทรัพย์สิน</label>
                            <input type="text" class="form-control" name="code" id="code" placeholder="กรุณากรอกรหัสทรัพย์สิน. (ห้ามเว้ณวรรค)">
                        </div>
                        <div class="form-group"><label for="type">ประเภท</label>
                            <input type="text" class="form-control" name="type" id="type" placeholder="กรุณากรอกประเภท. (ห้ามเว้ณวรรค)">
                        </div>
                        <div class="form-group"><label for="install">ที่ติดตั้ง</label>
                            <input type="text" class="form-control" name="install" id="install" placeholder="กรุณากรอกที่ติดตั้ง.">
                        </div>
                        <div class="form-group"><label for="vol">แรงดันไฟฟ้า</label>
                            <input type="text" class="form-control" name="vol" id="vol" placeholder="กรุณากรอกแรงดันไฟฟ้า.">
                        </div>
                        <div class="form-group"><label for="person">ผู้รับผิดชอบดูแล</label>
                            <input type="text" class="form-control" name="person" id="person" placeholder="กรุณากรอกผู้รับผิดชอบดูแล.">
                        </div>
                        <div class="form-group"><label for="insurance">การรับประกัน</label>
                            <input type="text" class="form-control" name="insurance" id="insurance" placeholder="กรุณากรอกการรับประกัน.">
                        </div>
                        <div class="form-group"><label for="inst">ระยะประกัน</label>
                            <input type="text" class="form-control" name="inst" id="inst" placeholder="กรุณากรอกระยะประกัน.">
                        </div>
                        <div class="form-group"><label for="status">สถานะภาพการใช้งาน</label>
                            <select class='form-control' name="status" id="status">
                                <option value='-1'> --- เลือกสถานะภาพการใช้งาน--- </option>
                                <option value="ใช้งานได้">ใช้งานได้</option>
                                <option value="ใช้งานไม่ได้">ใช้งานไม่ได้</option>
                            </select>
                        </div>
                        <div class="form-group"><label for="note">หมายเหตุ</label>
                            <input type="text" class="form-control" name="note" id="note" placeholder="หมายเหตุ.">
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-10">
                                <button name ="submit" id="myBtn" type="submit" class="btn btn-default"> Save </button>
                                <button type="reset" name="reset" class="btn btn-default"> Reset </button>
                            </div>
                            <die class="col-sm-2">
                                <button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
                            </div>
                        </div>
                        <br></br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['submit']) && $chkInsert == 0) {    
        $r_sub=selectDb("from substation where id='".$_POST['sub']."'");
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
        if ($r_equip == 1) {
            $data=array(
                'unique_id' => $id_uni
            );
            $r_def = insertDb($data, 'defective_info');
            $select=$_POST['sub'];
            $chkInsert=1;
            if ($r_def != 1) echo $r_def;
        }
        else echo $r_equip;
    }
?>
<script>
    var btn = document.getElementById('myBtn');
    btn.addEventListener('click', function() {
        document.location.href = '<?php echo $page; $chkInsert=0; ?>';
    });
</script>