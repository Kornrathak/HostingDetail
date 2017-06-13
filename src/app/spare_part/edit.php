<link rel="shortcut icon" href="logos.ico">
<?php
include './include/header.php';
include './include/db-config.php'
?>
<?php
if(isset($_POST['update']))
{
    
    $id=$_GET['id'];
    $product=$_POST['product'];
    $equipment=$_POST['equipment'];        
    $equipment_parts=$_POST['equipment_parts'];
    $brand=$_POST['brand'];
    $generation=$_POST['generation'];
    $serial_no=$_POST['serial_no'];
    $purchasing_receiving_date=$_POST['purchasing_receiving_date'];
    $expiration_date=$_POST['expiration_date'];
    $price=$_POST['price'];
    $source_info=$_POST['source_info'];
    $budget=$_POST['budget'];
    $station=$_POST['station'];
    $pathfinder=$_POST['pathfinder'];
    $note=$_POST['note'];
    
    if($crud->update($id,$product,$equipment,$equipment_parts,$brand,$generation,$serial_no,$purchasing_receiving_date,$expiration_date,$price,$source_info,$budget,$station,$pathfinder,$note))
    {
        $msg="<div class='alert alert-info'>
                <strong>สำเร็จ!</strong>ระเบียนถูกปรับปรุงเรียบร้อย <a href='index.php'>กลับไปยังหน้าแสดงข้อมูล Spare part</a>
                </div>";
                  
    }
    else
    {
        $msg="<div class='alert alert-danger'>
                <strong>ไม่สำเร็จ!</strong>ระเบียนไม่ถูกปรับปรุง 
                </div>";
    }
    
    
    
}
?>

<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    extract($crud->getID($id));
}


?>


<html>
    <head>
    <link rel="shortcut icon" href="logos.ico">
        <meta charset="UTF-8">
        <meta http-equiv="Content-Language" content="th"> 
        <meta http-equiv="content-Type" content="text/html; charset=window-874"> 
        <meta http-equiv="content-Type" content="text/html; charset=tis-620"> 
        <title>RELAY SECTION</title>
       

    </head>
    <body>
        <div class="clearfix"></div></br>
        
        
        
        
        
        <div class="container">
            <?php
            if(isset($msg))
            {
             echo    $msg;
            }   
            
            ?>
            
            <form method="post">
                <table class="table table-bordered">
                    <tr>
                        <td>ผลิตภัณฑ์</td>
                        <td><input type="text" name="product" class="form-control" value="<?php echo $product; ?>" required="required"></td>
                     </tr>
                      <tr>
                        <td>อุปกรณ์</td>
                        <td><input type="text" name="equipment" class="form-control" value="<?php echo $equipment; ?>" required="required"></td>
                     </tr>
                     <tr>
                        <td>ชิ้นส่วนอุปกรณ์</td>
                        <td><input type="text" name="equipment_parts" class="form-control" value="<?php echo $equipment_parts; ?>" required="required"></td>
                     </tr>
                      <tr>
                        <td>ยี่ห้อ</td>
                        <td><input type="text" name="brand" class="form-control" value="<?php echo $brand; ?>" required="required"></td>
                     </tr>
                     <tr>
                        <td>รุ่น</td>
                        <td><input type="text" name="generation" class="form-control" value="<?php echo $generation; ?>" required="required"></td>
                     </tr>
                     <tr>
                        <td>Serial No.</td>
                        <td><input type="text" name="serial_no" class="form-control" value="<?php echo $serial_no; ?>" required="required"></td>
                     </tr>
                     <tr>
                        <td>วันจัดซื้อ/รับของ</td>
                        <td><input type="date" name="purchasing_receiving_date" class="form-control" value="<?php echo $purchasing_receiving_date; ?>"></td>
                     </tr>
                     <tr>
                        <td>วันหมดประกัน</td>
                        <td><input type="date" name="expiration_date" class="form-control" value="<?php echo $expiration_date; ?>"></td>
                     </tr>
                     <tr>
                        <td>ราคา</td>
                        <td><input type="text" name="price" class="form-control" value="<?php echo $price; ?>"></td>
                     </tr>
                     <tr>
                        <td>ที่มา</td>
                        <td><input type="text" name="source_info" class="form-control" value="<?php echo $source_info; ?>"></td>
                     </tr>
                     <tr>
                        <td>งบ</td>
                        <td><input type="text" name="budget" class="form-control" value="<?php echo $budget; ?>" required="required"></td>
                     </tr>
                     <tr>
                        <td>สถานี</td>
                        <td><input type="text" name="station" class="form-control" value="<?php echo $station; ?>"></td>
                     </tr>
                     <tr>
                        <td>ผู้เบิก</td>
                        <td><input type="text" name="pathfinder" class="form-control" value="<?php echo $pathfinder; ?>" required="required"></td>
                     </tr>
                     <tr>
                        <td>หมายเหตุ</td>
                        <td><input type="text" name="note" class="form-control" value="<?php echo $note; ?>" required="required"></td>
                     </tr>
                     <tr>
                         <td colspan="2">
                             <button type="submit" name="update" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> ปรับปรุงระเบียน</button>
                             <a href="index.php" class="btn btn-success"><i class="glyphicon glyphicon-backward"></i> ยกเลิก</a>
                             
                         </td>
                         
                         
                         
                     </tr>
                    
                    
                    
                </table>
                
                
                
                
                
                
                
            </form>
            
            
            
            
            
            
            
        </div>
        
         <?php include './footer.php' ?> 
        
        
    </body>

</html>    

