<!DOCTYPE html>
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



<?php
include './include/header.php';
include './include/db-config.php';
?>
<?php
if(isset($_POST['btn-del']))
{
    $id=$_GET['id'];
    $crud->delete($id);
    header("location:delete.php?deleted");
    
}



?>

<div class="container">
<?php
if(isset($_GET['deleted']))
{
?>
    <div class="alert alert-success">
        <strong>สำเร็จ!</strong>ระเบียนถูกลบ
    </div>

<?php
} else {
?>
 <div class="alert alert-danger">
        <strong>ระเบียนดังกล่าวจะถูกลบ!</strong>คุณต้องการที่จะลบระเบียนดังกล่าวหรือไม่!!
    </div>
    
    
 <?php
}
?>
</div>
<div class="container">
   <?php
   if(isset($_GET['id']))
   {
   ?>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>ผลิตภัณฑ์</th>
            <th>อุปกรณ์</th>
            <th>ชิ้นส่วนอุปกรณ์</th>
            <th>ยี่ห้อ</th>
            <th>รุ่น</th>
            <th>Serial No.</th>
            <th>วันจัดซื้อ/รับของ</th>
            <th>วันหมดประกัน</th>
            <th>ราคา</th>
            <th>ที่มา</th>
            <th>งบ</th>
            <th>สถานี</th>
            <th>ผู้เบิก</th>
            <th>หมายเหตุ</th>

        </tr>
        <?php
            $stmt=$db->prepare("select * from spare_part where id=:id");    
            $stmt->execute(array(":id"=>$_GET['id']));
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
        
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['product']; ?></td>
            <td><?php echo $row['equipment']; ?></td>
            <td><?php echo $row['equipment_parts']; ?></td>
            <td><?php echo $row['brand']; ?></td>
            <td><?php echo $row['generation']; ?></td>
            <td><?php echo $row['serial_no']; ?></td>
            <td><?php echo $row['purchasing_receiving_date']; ?></td>
            <td><?php echo $row['expiration_date']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['source']; ?></td>
            <td><?php echo $row['budget']; ?></td>
            <td><?php echo $row['station']; ?></td>
            <td><?php echo $row['pathfinder']; ?></td>
            <td><?php echo $row['note']; ?></td>
        </tr>
        
        
        
        <?php 
            }?>
    </table>    
       
   <?php
   
   }
   ?>
 </div>     

<div class="container">
    <p>
        <?php
        if(isset($_GET['id']))
        {
        ?>
    <form method="post">
        <button class="btn  btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i>&nbsp; ตกลง</button>
        <a href="index.php" class="btn btn-success"><i class="glyphicon glyphicon-backward"></i>&nbsp; ยกเลิก</a>
        
    </form>
        
        <?php
        
        }
        else {
        ?>
        
         <a href="index.php" class="btn btn-success"><i class="glyphicon glyphicon-backward"></i>&nbsp; กลับไปยังหน้าแสดงข้อมูล Spare Part</a>
        <?php 
        }?>
    </p> 
    
    
    
    
</div>
 <?php include './footer.php' ?> 
 </body>
</html>

        


