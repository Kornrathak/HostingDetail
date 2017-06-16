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

<body>
<?php 
        include '../../../shared/nav/nav.php';
        include '../../../shared/database/connection.php';
?>
<form name="frm" method="post">

<?php
	$id=$_GET['id'];
	//echo $id;
$sql=mysql_query("select * from operation_info WHERE id='$id'");
$row=mysql_fetch_array($sql);
$opid=$_GET ['operation'];
        $r_equip = selectDb("from operation_info where unique_id='".$opid."' and active=1");
        $d_equip=mysql_fetch_array($r_equip);
echo "$opid" ;
	$os = $row['operation_id'];
    $ret = $row['relaytype'];
    $pro = $row['product'];
    $prot = $row['product_type'];
    $sn = $row['sn'];
    $vt = $row['vt'];
    $ct = $row['ct'];
    $vspp = $row['vspp'];
    $rem = $row['remark'];
?>

        <div class="container">
  <div class="row">
        <div class="col-sm-12">
            <legend>Edit: <?php echo "id = "."$id"?></legend>
        </div>

        <div class="col-sm-12">
            <h4><?php echo "แก้ไขในส่วนของ   "."$os"; ?></h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group" >
                        <div class="col-sm-9">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">OperationID:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="osid" value="<?php echo $os ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Relay Type:</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="ret" name="ret" >
                                <?php
                                    $rt=mysql_query("select * from relay_type");

                                    while($r=mysql_fetch_row($rt))
                                    {
                                        if($r[0]==$ret){
                                            echo "<option selected value='$r[0]'> $r[1]</option>";
                                        }
                                        else{
                                            echo "<option value='$r[0]'> $r[1]</option>";
                                        }
                                    
                                    }
                                    mysql_close($rt);

                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Product:</label>
                        <div class="col-sm-9">
                            <select class="form-control"  name="pro">
                                <?php
                                    $pr=mysql_query("select * from product_name");

                                    while($r=mysql_fetch_row($pr))
                                    {
                                        if($r[0]==$pro){
                                            echo "<option selected value='$r[0]'> $r[1]</option>";
                                        }
                                        else{
                                            echo "<option value='$r[0]'> $r[1]</option>";
                                        }
                                    }
                                    mysql_close($pr);

                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">ProductType:</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="prot" name="prot">
                                <?php
                                    $prt=mysql_query("select * from product_type");

                                    while($r=mysql_fetch_row($prt))
                                    {
                                        if($r[0]==$prot){
                                            echo "<option selected value='$r[0]'> $r[1]</option>";
                                        }
                                        else{
                                            echo "<option value='$r[0]'> $r[1]</option>";
                                        }
                                    }
                                    mysql_close($prt);

                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">sn:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="sn" name="sn" value="<?php echo $sn ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">vt:</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="vt" name="vt">
                                <?php
                                    $v=mysql_query("select * from vt");

                                    while($r=mysql_fetch_row($v))
                                    {
                                    if($r[0]==$vt){
                                            echo "<option selected value='$r[0]'> $r[1]</option>";
                                        }
                                        else{
                                            echo "<option value='$r[0]'> $r[1]</option>";
                                        }
                                    }
                                    mysql_close($v);

                                    ?>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">ct:</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="ct" name="ct">
                                <?php
                                    $c=mysql_query("select * from ct");

                                    while($r=mysql_fetch_row($c))
                                    {
                                        if($r[0]==$ct){
                                            echo "<option selected value='$r[0]'> $r[1]</option>";
                                        }
                                        else{
                                            echo "<option value='$r[0]'> $r[1]</option>";
                                        }
                                    }
                                    mysql_close($c);

                                    ?>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">VSPP:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="vspp" name="vspp" value="<?php echo $vspp ?>">
                        </div>
                    </div>
                    <div class="required-field-block">
                        <label for="concept" class="col-sm-3 control-label">REMARK:</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="rem" name="rem" value="<?php echo $rem ?>">
                            </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                            <br><br><input class='btn btn-primary' type='submit' name='submit' value='SAVE'>

                            <br><br><?php echo "<a href=http://localhost/HostingDetail/src/app/relay/operation/operation-edit.php?operation=".$row['unique_id']." class='btn btn-magick' >ย้อนกลับ</a>"; ?>
                            <?php 
                            
                                $mid = $_POST['id'];
                                $mos = $_POST['osid'];
                                $mret = $_POST['ret'];
                                $mpro = $_POST['pro'];
                                $mprot = $_POST['prot'];
                                $msn = $_POST['sn'];
                                $mvt = $_POST['vt'];
                                $mct = $_POST['ct'];
                                $mvspp = $_POST['vspp'];
                                $mrem = $_POST['rem'];
                                //echo "id = "."$mid"."<br>";
                            if($_POST){
                                $up = "UPDATE operation_info SET operation_id='$mos' , relaytype='$mret' , product='$mpro' , product_type='$mprot', sn='$msn' , vt='$mvt' , ct='$mct' , vspp='$mvspp' , remark='$mrem' WHERE id='$mid'";
                                echo "$up";
                                $objQuery = mysql_query($up);
                                if($objQuery)
                                {
                                    echo "<br><br><br>";
                                    echo "<center><font size = 16 color=red>UPDATE SUCCESSFULLY</font></center>";
                                    echo "<br>";
                                    ?>
                                    <a href="equipment_relay.php" class="btn btn-primary">เลือกสถานี</a>
                                    <?php
                                    "<a href=operation-edit.php?operation=".$os." class='btn btn-primary' >ย้อนกลับ</a>";
                                    //มีผลต่อการอัพเดท
                                }
                                else
                                {
                                    echo "ERROR";

                                }

                            }
                                

                            ?>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
         
            </div>
        </div>
  </div>
</div>
    

    </div>


</form>
</body>
</html>
