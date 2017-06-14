<button class="btn btn-magick" data-toggle="modal" data-target="#basicModal"><span class="glyphicon glyphicon-plus"></span> เพิ่มอุปกรณ์ Relay. </button>
    <div class="modal fade" id="basicModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h2>กรอกข้อมูลอุปกรณ์ Relay</h2>
                </div>
                <div class="modal-body">
                    <form role="form" action="" method="post">
                        <div class="form-group">
                            <label for="substation">Station</label>
                            <select class='form-control' name="sub" id="sub"><option value='-1'> --- เลือกสถานี --- </option>
                                <?php
                                    $r_sub=selectDb("from substation");
                                    while($row=mysql_fetch_row($r_sub)) {
                                        $text = "<option value='".$row[0]."'";
                                        if($select != -1 && $select == $row[0]) $text .= "selected";
                                        $text .= ">".$row[1]."</option>";
                                        echo $text;
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="feeder">Feeder Name</label>
                            <select class='form-control' name="feed" id="feed"><option value='-1'> --- เลือกFeeder --- </option>
                                <?php
                                    $r_feed=selectDb("from feeder");
                                    while($row=mysql_fetch_row($r_feed)) {
                                        $text2 = "<option value='".$row[0]."'";
                                        if($select != -1 && $select == $row[0]) $text2 .= "selected";
                                        $text2 .= ">".$row[1]."</option>";
                                        echo $text2;
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group"><label for="opid">Operation ID</label>
                            <input type="text" class="form-control" name="opid" id="opid" placeholder="กรุณากรอกOperation_id. (ห้ามเว้ณวรรค)">
                        </div>
                        <!--<div class="form-group"><label for="uid">Unique_id</label>
                            <input type="text" class="form-control" name="uid" id="uid" placeholder="กรุณากรอกชื่อUnique_id. (ห้ามเว้ณวรรค) สำหรับใช้คัดกรอก้อมูล">
                        </div>-->
                        
                        <div class="form-group">
                            <label for="relaytype">Relay Type</label>
                            <select class='form-control' name="ret" id="ret">
                                <option value='-1'>-----------เลือกType ของ Relay-----------</option>
                                <?php
                                    $dd_res=selectDb('from relay_type');
                                    while($r=mysql_fetch_row($dd_res)) {
                                        echo "<option value='".$r[0]."'>".$r[1]."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product">Product</label>
                            <select class='form-control' name="pro" id="pro">
                                <option value="-1">-----------เลือกผลิตภัณฑ์-----------</option>
                                <?php
                                    $dd_res=selectDb("from product_name");
                                    while($r=mysql_fetch_row($dd_res)) {
                                        echo "<option value='".$r[0]."'>".$r[1]."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_type">Product Type</label>
                            <select class='form-control' name="prot" id="prot">
                                <option value="-1">-----------เลือก TYPE ของ ผลิตภัณฑ์-----------</option>
                                <?php
                                    $dd_res=selectDb('from product_type');
                                    while($r=mysql_fetch_row($dd_res)) {
                                        echo "<option value='".$r[0]."'>".$r[1]."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sn">SN</label>
                            <input type="text" class="form-control" name="sn" id="sn" placeholder="กรุณากรอกSN.">
                        </div>
                        <div class="form-group">
                            <label for="vt">VT</label>
                            <select class='form-control' name="vt" id="vt">
                                <option value="-1">-----------เลือกVT-----------</option>
                                <?php
                                    $dd_res=selectDb("from vt");
                                    while($r=mysql_fetch_row($dd_res)) {
                                        echo "<option value='".$r[0]."'>".$r[1]."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ct">CT</label>
                            <select class='form-control' name="ct" id="ct">
                                <option value="-1">-----------เลือกCT-----------</option>
                                <?php
                                    $dd_res=selectDb("from ct");
                                    while($r=mysql_fetch_row($dd_res)) {
                                        echo "<option value='".$r[0]."'>".$r[1]."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group"><label for="vspp">VSPP</label>
                            <input type="text" class="form-control" name="vspp" id="vspp" placeholder="กรุณากรอกVSPP.">
                        </div>
                        <div class="form-group"><label for="note">หมายเหตุ</label>
                            <input type="text" class="form-control" name="note" id="note" placeholder="หมายเหตุ.">
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-10">
                                <button name ="myBtn" id="myBtn" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Save </button>
                                <button type="reset" name="reset" class="btn btn-warning"><span class="glyphicon glyphicon-repeat"></span> Reset </button>
                            </div>
                            <die class="col-sm-2">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close </button>
                            </div>
                        </div>
                        <br></br>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    if(isset($_POST['myBtn'])) {
        $id_uni=base64_encode($_POST['sn']);
        $data=array(
            'operation_id' => $_POST['opid'],
            'active' => 1,
            'unique_id' => $id_uni,
            'relaytype' => $_POST['ret'],
            'product' => $_POST['pro'],
            'product_type' => $_POST['prot'],
            'sn' => $_POST['sn'],
            'vt' => $_POST['vt'],
            'ct' => $_POST['ct'],
            'vspp' => $_POST['vspp'],
            'remark' => $_POST['note']
        );

        $r_oper = insertDb($data, 'operation_info');
        $r_oper = selectDb('from operation_info where operation_id="'.$_POST['opid'].'" and active="1"');
        $d_oper = mysql_fetch_array($r_oper);
        $data=array(
            'substation_id' => $_POST['sub'],
            'feeder_id' => $_POST['feed'],
            'operation_id' => $d_oper['id']
        );
        $r_relay = insertDb($data, 'relay');
    }
?>