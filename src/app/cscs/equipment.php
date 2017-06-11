<html>
    <head>
        <title>RELAY SECTION</title>
        <link rel="shortcut icon" href="../../img/logo/logos.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../shared/css/insert.css" />
        <link rel="stylesheet" type="text/css" href="../../shared/css/layout.css" />
    </head>
    <body id="myPage">
        <div class="container">
        
            <?php 
                include '../../shared/nav/nav.php';
                echo '<div class="header"><h2>ข้อมูล CSCS</h2></div>';
                echo '<a href="cscs.php" class="btn btn-primary">ย้อนกลับ</a>';
                ?>
        </div>
        <div class="col-md-1 col-sm-1 ">
      </div>
    <div class="row" >
        <?php
      $op=$_GET ['serial'];
      include '../../shared/database/connection.php'; 
      ?>
<div class="col-md-12 col-sm-12 " >
      <table class="table table-striped table-bordered" >
        <tr>
        <tr>
        <th scope="col">รายละเอียดอุปกรณ์</th>

        </tr>
        <tr>
        <th scope="col"><?php //include('show.php'); ?></th>
        </tr>
        </tr>
        
      </table></div>
      <?php
      
      $sql=mysql_query("select * from equipment_info where serial_n like '".$op."' ");
      
      
      ?>

    <div class="col-md-12 col-sm-12 ">
      <table class="table table-striped table-bordered" >
        
        <?php
        while($row=mysql_fetch_array($sql))
        {
          $id = $row['id'];
          $eq = $row['unique_id'];
          $subsa = $row['sub_id'];
                 
          $ge = $row['generation'];
          $sn = $row['serial_n'];
          $proc = $row['property_code'];
          $ty = $row['type'];
          $in = $row['installed'];
          $vo = $row['voltage'];
          $res = $row['responsible_person'];
          $ins = $row['insurance'];
          $insp = $row['insurance_period'];
          $wok = $row['working_status'];
          $note = $row['note'];

          //$sqlsub=mysql_query("select * from substation where sub_id like $subsa");
          //$row2=mysql_fetch_array($sqlsub);
              $subname=$row2["sub_name"];
        ?>
        <h2 align="center"><?php echo "สถานีไฟฟ้า".$subsa; ;?></h2>
        <tr>

        <tr>
        <th scope="col">ชื่ออุปกรณ์</th>
        <td><?php echo "$eq"; ?></td>
        </tr>

        <tr>
        <th scope="col">รุ่น</th>
        <td><?php echo "$ge"; ?></td>
        </tr>

        <tr>
        <th scope="col">serial</th>
        <td><?php echo "$sn"; ?></td>
        </tr>
        
        <tr>
        <th scope="col">รหัสทรัพย์สิน</th>
        <td><?php echo "$proc"; ?></td>
        </tr>

        <tr>
        <th scope="col">ประเภท</th>
        <td><?php echo "$ty"; ?></td>
        </tr>

        <tr>
        <th scope="col">ที่ติดตั้ง</th>
        <td><?php echo "$in"; ?></td>
        </tr>

        <tr>
        <th scope="col">แรงดันไฟฟ้า</th>
        <td><?php echo "$vo"; ?></td>
        </tr>

        <tr>
        <th scope="col">ผู้รับผิดชอบดูแล</th>
        <td><?php echo "$res"; ?></td>
        </tr>

        <tr>
        <th scope="col">การรับประกัน</th>
        <td><?php echo "$ins"; ?></td>
        </tr>

         <tr>
        <th scope="col">ระยะประกัน</th>
        <td><?php echo "$insp"; ?></td>
        </tr>

         <tr>
        <th scope="col">สถานะภาพการใช้งาน</th>
        <td><?php echo "$wok"; ?></td>
        </tr>

        <tr>
        <th scope="col">หมายเหตุ</th>
        <td><?php echo "$note"; ?></td>
        </tr>
        </tr>

          <td><br><div align="center">

<?php echo "<a href=edit_ac.php?id=".$id." class='btn btn-primary' ><strong>แก้ไขข้อมูล</strong></a>" ;?> </div></td>

          <td><br><div align="center"><?php echo "<a href=uppic3.php?id=".$id." class='btn btn-primary' ><strong>อัพโหลดรูปภาพ</strong></a>" ;?></div></td>
        
        <?php
}

?>

      </table>
    </div>
</table>
<div class="col-md-12 col-sm-12 ">
      <table class="table table-striped table-bordered" >
        <tr>
        <tr>
        <th scope="col" bgcolor="red">ข้อมูลอุปกรณ์ชำรุด</th>
        <th scope="col" bgcolor="red"><?php echo "<a href=edit_ac2.php?equiment=".$eq." class='btn btn-primary' ><strong>เพิ่มรายงานข้อมูลอุปกรณ์ชำรุด</strong></a>" ;?></th>
        </tr>
        <tr>
        <tr class="info">
          <th scope="col"><center>วันที่แก้ไข</center></th>
          <th scope="col"><center>สาเหตุการชำรุด</center></th>
          <th scope="col"><center>อาการชำรุด</center></th>
          <th scope="col"><center>วิธีแก้ไข</center></th>
          <th scope="col"><center>ผู้ปฏิบัติงาน</center></th>
        </tr>
        <tr>
            
  <?php

  $sql=mysql_query("select * from defective_info where unique_id like '".$eq."'");

while($row=mysql_fetch_array($sql))
{
  
  $a=$row['edit_date'];
  $b=$row['cause'];
  $c=$row['defective'];
  $d=$row['solution'];
  $e=$row['operator'];
  
echo "<tr class=active align=center><td>$a</td> <td>$b</td> <td>$c</td> <td>$d</td> <td>$e</td></tr>";
}
  ?>

        </tr>
        </tr>
        </tr>
        
      </table></div>
    </body>
</html>