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
                        <!------------------------------------------------------------------------------------------------>
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
                        <!------------------------------------------------------------------------------------------------>
                        <div class="form-group"><label for="opid">Operation ID</label>
                            <input type="text" class="form-control" name="opid" id="opid" placeholder="กรุณากรอกOperation_id. (ห้ามเว้ณวรรค)">
                        </div>
                        <!------------------------------------------------------------------------------------------------>
                        <div class="form-group"><label for="uid">Unique_id</label>
                            <input type="text" class="form-control" name="uid" id="uid" placeholder="กรุณากรอกชื่อUnique_id. (ห้ามเว้ณวรรค) สำหรับใช้คัดกรอก้อมูล">
                        </div>
                        <!------------------------------------------------------------------------------------------------>
                        <div class="form-group">
    <label for="relaytype">Relay Type</label>
    <select name = "ret"><option value = " ">-----------เลือกType ของ Relay-----------</option>

<?php
    include ('conn.php');
    $dd_res=mysql_query("select * from relaytype");

    while($r=mysql_fetch_row($dd_res))
{
    echo "<option value='$r[0]'> $r[1]</option>";
}
    mysql_close($dd_res);

?>
</select>
</div>
<!------------------------------------------------------>
     <div class="form-group">
    <label for="product">Product</label>
    <select name = "pro"><option value = " ">-----------เลือกผลิตภัณฑ์-----------</option>

<?php
    include ('conn.php');
    $dd_res=mysql_query("select * from product_name");

    while($r=mysql_fetch_row($dd_res))
{
    echo "<option value='$r[0]'> $r[1]</option>";
}
    mysql_close($dd_res);

?>
</select>
</div>
<!------------------------------------------------------>
     <div class="form-group">
    <label for="product_type">Product Type</label>
    <select name = "prot"><option value = " ">-----------เลือก TYPE ของ ผลิตภัณฑ์-----------</option>

<?php
    include ('conn.php');
    $dd_res=mysql_query("select * from product_type");

    while($r=mysql_fetch_row($dd_res))
{
    echo "<option value='$r[0]'> $r[1]</option>";
}
    mysql_close($dd_res);

?>
</select>
</div>
<!---------------------------------------------------------->
        <div class="form-group"><label for="sn">SN</label>
        <input type="text" class="form-control" name="sn"
        id="sn" placeholder="กรุณากรอกSN.">
    </div>
<!---------------------------------------------------------->
<div class="form-group">
    <label for="vt">VT</label>
    <select name = "vt"><option value = " ">-----------เลือกVT-----------</option>

<?php
    include ('conn.php');
    $dd_res=mysql_query("select * from vt");

    while($r=mysql_fetch_row($dd_res))
{
    echo "<option value='$r[0]'> $r[1]</option>";
}
    mysql_close($dd_res);

?>
</select>
</div>
<!---------------------------------------------------------->
<div class="form-group">
    <label for="ct">CT</label>
    <select name = "ct"><option value = " ">-----------เลือกCT-----------</option>

<?php
    include ('conn.php');
    $dd_res=mysql_query("select * from ct");

    while($r=mysql_fetch_row($dd_res))
{
    echo "<option value='$r[0]'> $r[1]</option>";
}
    mysql_close($dd_res);

?>
</select>
</div>
                        
                        <!--<div class="form-group"><label for="status">สถานะภาพการใช้งาน</label>
                            <select class='form-control' name="status" id="status">
                                <option value='-1'> --- เลือกสถานะภาพการใช้งาน--- </option>
                                <option value="ใช้งานได้">ใช้งานได้</option>
                                <option value="ใช้งานไม่ได้">ใช้งานไม่ได้</option>
                            </select>
                        </div>-->
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
        $select=$_POST['sub'];
        $chkInsert=1;
    }
?>
<script>
    var btn = document.getElementById('myBtn');
    btn.addEventListener('click', function() {
        document.location.href = '<?php echo $page; $chkInsert=0; ?>';
    });
</script>