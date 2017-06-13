<html>
<head>
<title>RELAY SECTION</title>
        <link rel="shortcut icon" href="../../img/logo/logos.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../../shared/css/insert.css" />
        <link rel="stylesheet" type="text/css" href="../../../shared/css/layout.css" />
</head>

<body>

<form name="frm" method="post">


<?php
	include '../../../shared/nav/nav.php';
    include '../../../shared/database/connection.php';
    echo '<div class="header"><h2>Edit ข้อมูลสถานี CSCS</h2></div>';
    
    echo '<div class="row">';
	$id=$_GET['id'];
	//echo $id;
$sql=mysql_query("select * from provinceinfo WHERE id ='$id'");
$row=mysql_fetch_array($sql);
          $idc = $row['id'];
          $city = $row['city'];
          $sub = $row['sub_id'];
          $sc = $row['scada'];
          $co = $row['control'];
          $pro = $row['product'];
          $proj = $row['project'];
          $con = $row['contract'];
          $wars = $row['warranty_status'];
          $warp = $row['warranty_period'];
          $wos = $row['working_status'];
          $def = $row['defective'];

?>
        <div class="container">
  <div class="row">
        <div class="col-sm-12">
            <legend>Edit: <?php echo "แก้ไขรายละเอียดสถานี"?></legend>
        </div>
        <!-- panel preview -->
        <div class="col-sm-12">
            <h4><?php echo "สถานี "."$sub"; ?></h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    
                    <div class="form-group">
                        <label for="ca" class="col-sm-3 control-label">จังหวัด:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="city" value="<?php echo $city ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="ca" class="col-sm-3 control-label">ระบบSCADA:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sc" value="<?php echo $sc ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="ca" class="col-sm-3 control-label">ระบบControl:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="co" value="<?php echo $co ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="ca" class="col-sm-3 control-label">ผลิตภัณฑ์:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="pro" value="<?php echo $pro ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ca" class="col-sm-3 control-label">โครงการ:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="proj" value="<?php echo $proj ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ca" class="col-sm-3 control-label">เลขที่สัญญา:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="con" value="<?php echo $con ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ca" class="col-sm-3 control-label">สถานะการรับประกัน:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="wars" value="<?php echo $wars ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">หมดระยะประกัน</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="warp" name="warp" value="<?php echo $warp ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ca" class="col-sm-3 control-label">สถานะการใช้งาน:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="wos" value="<?php echo $wos ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ca" class="col-sm-3 control-label">จำนวนอุปกรณ์ชำรุด:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="def" value="<?php echo $def ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12 text-right">

                            </button><br><br><input class='btn btn-primary' type='submit' name='submit' value='SAVE'>
                            <br><br>
                            <?php 
                                $ncity = $_POST['city'];
                                $nsc = $_POST['sc'];
                                $nco = $_POST['co'];
                                $npro = $_POST['pro'];
                                $nproj = $_POST['proj'];
                                $ncon = $_POST['con'];
                                $nwars = $_POST['wars'];
                                $nwarp = $_POST['warp'];
                                $nwos = $_POST['wos'];
                                $ndef = $_POST['def'];
                                //echo "$ncity";

                            if($_POST){
                                $up = "UPDATE county SET city='$ncity', scada='$nsc' , control='$nco' , product='$npro' ,  project='$nproj' , contract='$ncon' , warranty_status='$nwars' , warranty_period='$nwarp' , working_status='$nwos' , defective='$ndef' WHERE id='$id'";
                                echo "$up";
                                $objQuery = mysql_query($up);
                                echo "$objQuery";
                                if($objQuery)
                                {
                                    echo "<br><br><br>";
                                    echo "<center><font size = 10 color=red>UPDATE SUCCESSFULLY</font></center>";
                                    echo "<br>";
                                    ?>
                                    <a href="cscs.php" class="btn btn-primary">เลือกสถานี</a>
                                    <?php 
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
<?php
    echo '<div class="col-md-1 col-sm-1 "><a href="http://localhost/HostingDetail/src/app/cscs/cscs.php" class="btn btn-primary">ย้อนกลับ</a></div><br></br>';
?>
    </div>


</form>
</body>
</html>

