<html>
<head>
<title>RELAY SECTION</title>
        <link rel="shortcut icon" href="../../img/logo/logos.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../shared/css/insert.css" />
        <link rel="stylesheet" type="text/css" href="../../shared/css/layout.css" />
        <link rel="stylesheet" type="text/css" href="../../shared/css/button.css" />
</head>

<body id="myPage">
        <div class="container">
            <?php
                include '../../shared/nav/nav.php'; 
                include '../../shared/database/connection.php'; 
                echo '<div class="header"><h2>ข้อมูลอุปกรณ์ CSCS</h2></div>';
                ?>
<form name="frm" method="post">


<?php
	$id=$_GET['id'];
	//echo $id;
$sql=mysql_query("select * from equipment_info WHERE id='$id'");
$row=mysql_fetch_array($sql);

    $eq = $row['product_name'];
    $ge = $row['generation'];
    $sn = $row['sn'];
    $proc = $row['property_code'];
    $ty = $row['type'];
    $in = $row['installed'];
    $vo = $row['voltage'];
    $res = $row['responsible_person'];
    $ins = $row['insurance'];
    $insp = $row['insurance_period'];
    $wok = $row['working_status'];
    $note = $row['note'];
?>
        <div class="container">
  <div class="row">
        <div class="col-sm-12">
            <legend>Edit: <?php echo "อุปกรณ์ "?></legend>
        </div>
        <!-- panel preview -->
        <div class="col-sm-12">
            <h4><?php echo "แก้ไขในส่วนของ "."$eq"."&nbsp/&nbsp"."$sn"; ?></h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group" >
                        <div class="col-sm-9">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">ชื่ออุปกรณ์:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="eq" name="eq" value="<?php echo $eq ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">รุ่น:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ge" name="ge" value="<?php echo $ge ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Serial:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="se" name="se" value="<?php echo $sn ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">รหัสทรัพย์สิน:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="proc" value="<?php echo $proc ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">ประเภท:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ty" name="ty" value="<?php echo $ty ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">ที่ติดตั้ง:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="in" value="<?php echo $in ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">แรงดันไฟฟ้า:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="vo" value="<?php echo $vo ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">ผู้ดูแลรับผิดชอบ:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="res" value="<?php echo $res ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">การรับประกัน:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="ins" value="<?php echo $ins ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">ระยะประกัน:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="insp" value="<?php echo $insp ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">สถานะภาพการใช้งาน:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="wok" value="<?php echo $wok ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">หมายเหตุ:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="note" name="note" value="<?php echo $note ?>">
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                    </div>   -->
                    <div class="form-group">
                        <div class="col-sm-12 text-right">

                            </button><br><br><input class='btn btn-primary' type='submit' name='submit' value='SAVE'>
                            <br><br>
                            <?php 
                                $nid = $_POST['id'];
                                $neq = $_POST['eq'];
                                $nge = $_POST['ge'];
                                $nsn = $_POST['se'];
                                $nproc = $_POST['proc'];
                                $nty = $_POST['ty'];
                                $nin = $_POST['in'];
                                $nvo = $_POST['vo'];
                                $nres = $_POST['res'];
                                $nins = $_POST['ins'];
                                $ninsp = $_POST['insp'];
                                $nwok = $_POST['wok'];
                                $nnote = $_POST['note'];

                            if($_POST){
                                $up = "UPDATE detail SET product_name='$neq' , generation='$nge' , sn='$nsn' , property_code='$nproc', type='$nty' , installed='$nin' , voltage='$nvo' , responsible_person='$nres' , insurance='$nins' , insurance_period='$ninsp' , working_status='$nwok' , note='$nnote' WHERE id='$nid'";
                                
                                $objQuery = mysql_query($up);
                                if($objQuery)
                                {
                                    $up2 = "UPDATE defective_information SET product ='$neq' WHERE id='$nid'";
                                    $objQuery2 = mysql_query($up2);
                                    if($objQuery2)
                                    {
                                    echo "<br><br><br>";
                                    echo "<center><font size = 10 color=red>UPDATE SUCCESSFULLY</font></center>";
                                    echo "<br>";
                                    ?>
                                    <a href="cscs.php" class="btn btn-primary">เลือกสถานี</a>
                                    <?php echo "<a href=equit.php?serial=".$sn." class='btn btn-primary' >ย้อนกลับ</a>" ;
                                    //มีผลต่อการอัพเดท
                                    }
                                else
                                {
                                    echo "ERROR2";
                                    //echo "<center><a herf='edit.php'>Back to main page</a></center>";
                                }

                            }
                            else{
                                echo "ERROR1";
                            }
                        }
                                
                                //mysql_close($db);
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

