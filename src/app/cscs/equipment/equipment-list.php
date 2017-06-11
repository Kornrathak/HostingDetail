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
        <tr>
            <?php
                $result=selectDb("from substation where id='".$select."'");
                $sql=selectDb("from equipment_info where active='1' and sub_id='".mysql_fetch_array($result)[1]."'");
                while($row=mysql_fetch_array($sql)) {
                    echo "<tr align=center ><td><a href=equipment.php?serial=".$row[6].">".$row[1]."</a></td> <td>".$row[5]."</td> <td>".$row[9]."</td> <td>".$row[6]."</td> <td>".$row[10]."</td></tr>";
                }
            ?>
        </tr>
    </table>
</div>
<button class="btn btn-primary btn-lg" 
data-toggle="modal" data-target="#basicModal">
กรอกข้อมูลเพิ่มเติม
</button>
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
        <input type="text" class="form-control" name="name"
        id="name" placeholder="กรุณากรอกชื่ออุปกรณ์. (ห้ามเว้ณวรรค)">
    </div>

<div class="form-group">
    <label for="substation">Station</label>
    <select name = "sub" id="sub"><option value = " ">-----------เลือกสถานี-----------</option>

<?php
    $dd_res=mysql_query("select * from substation");

    while($r=mysql_fetch_row($dd_res))
{
    echo "<option value='$r[0]'> $r[1]</option>";//$r จำนวนตัวเลข คือลำดับข้อมูล
    //echo $r['id'];
    //echo $r['name'];
}
    mysql_close($dd_res);

?>
</select>
</div>
    <div class="form-group">
        <label for="gene">unique_id</label>
        <input type="text" class="form-control" name="uni"
        id="uni" placeholder="กรุณากรอกunique_id">
    </div>
    ---------------------------------------------------
    <div class="form-group">
        <label for="gene">รุ่น</label>
        <input type="text" class="form-control" name="gene"
        id="gene" placeholder="กรุณากรอกชื่อรุ่น. (ห้ามเว้ณวรรค)">
    </div>
     <div class="form-group">
        <label for="sn">serial</label>
        <input type="text" class="form-control" name="sn"
        id="sn" placeholder="กรุณากรอกserial. (ห้ามเว้ณวรรค)">
    </div>
<!------------------------------------------------------>
     <div class="form-group">
        <label for="code">รหัสทรัพย์สิน</label>
        <input type="text" class="form-control" name="code"
        id="code" placeholder="กรุณากรอกรหัสทรัพย์สิน. (ห้ามเว้ณวรรค)">
    </div>
<!------------------------------------------------------>
     <div class="form-group">
        <label for="type">ประเภท</label>
        <input type="text" class="form-control" name="type"
        id="type" placeholder="กรุณากรอกประเภท. (ห้ามเว้ณวรรค)">
    </div>
<!---------------------------------------------------------->
        <div class="form-group"><label for="install">ที่ติดตั้ง</label>
        <input type="text" class="form-control" name="install"
        id="install" placeholder="กรุณากรอกที่ติดตั้ง.">
    </div>
<!---------------------------------------------------------->
<div class="form-group"><label for="vol">แรงดันไฟฟ้า</label>
        <input type="text" class="form-control" name="vol"
        id="vol" placeholder="กรุณากรอกแรงดันไฟฟ้า.">
    </div>
<!---------------------------------------------------------->
    <div class="form-group"><label for="person">ผู้รับผิดชอบดูแล</label>
        <input type="text" class="form-control" name="person"
        id="person" placeholder="กรุณากรอกผู้รับผิดชอบดูแล.">
    </div>
<!---------------------------------------------------------->
    <div class="form-group"><label for="insurance">การรับประกัน</label>
        <input type="text" class="form-control" name="insurance"
        id="insurance" placeholder="กรุณากรอกการรับประกัน.">
    </div>
<!---------------------------------------------------------->
    <div class="form-group"><label for="inst">ระยะประกัน</label>
        <input type="text" class="form-control" name="inst"
        id="inst" placeholder="กรุณากรอกระยะประกัน.">
    </div>
<!---------------------------------------------------------->
    <div class="form-group"><label for="status">สถานะภาพการใช้งาน</label>
        <input type="text" class="form-control" name="status"
        id="status" placeholder="กรุณากรอกสถานะภาพการใช้งาน.">
    </div>
<!---------------------------------------------------------->
    <div class="form-group"><label for="note">หมายเหตุ</label>
        <input type="text" class="form-control" name="note"
        id="note" placeholder="หมายเหตุ.">
    </div>
    <br>
    <button name ="submit" type="submit" class="btn btn-default"> SAVE </button>
    <button type="reset" name="reset" class="btn btn-default">Reset</button>
</form>
            </div>
            <div class="modal-footer">
                Please fill your information.
                <br>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<?php

if(isset($_POST['submit']))
{
    // 'connect.php';
    
$name = $_POST['name'];
$sub = $_POST['sub'];
$uni = $_POST['uni'];
$gene = $_POST['gene'];
$sn = $_POST['sn'];
$code = $_POST['code'];
$type = $_POST['type'];
$in = $_POST['install'];
$vol = $_POST['vol'];
$per = $_POST['person'];
$ins = $_POST['insurance'];
$inst = $_POST['inst'];
$status = $_POST['status'];
$note = $_POST['note'];
echo "$name";
echo "$sub";
        $qret=mysql_query("select sub_id from substation where id like '$sub' ");
        $rowsub=mysql_fetch_array($qret);
        $sub2=$rowsub['sub_id'];
        echo "$sub2"; 
        echo "$uni";
echo "$gene";
echo "$sn";
echo "$code";
echo "$type";
echo "$in";
echo "$vol";
echo "$per";
echo "$ins";
echo "$inst";
echo "$status";
echo "$note";
echo "<br>";

    $result = mysql_query("INSERT INTO equipment_info(equipment , unique_id , sub_id , generation ,serial_n, property_code , type , installed , voltage , responsible_person , insurance , insurance_period , working_status , note)VALUES('$name', '$uni', '$sub2', '$gene','$sn', '$code', '$type', '$in' , '$vol', '$per','$ins', '$inst', '$status', '$note')");

if( $result){
    $result2 = mysql_query("INSERT INTO defective_info(unique_id)VALUES('$uni')");
    if( $result2){
        echo("insert  successfully");
    }
    else
    {
    echo("insert not successfully");
    
    }
}
else
{
    echo("insert not successfully");
    
}
}

?>
</div>