<div>
  <tr>
  <div>
  <?php
  $sub=$_POST [$select];
    $qsun=mysql_query("select sub_name from substation where id like '".$select."' ");
        $rowsun=mysql_fetch_array($qsun);
        $sun=$rowsun['sub_name'];
          ?></div>
  <h2 align="center"><?php echo "สถานีไฟฟ้า".$sun; ;?></h2>
  <?php
      
      $result=selectDb("from substation where id='".$select."'");
        $sql=selectDb("from provinceinfo where sub_id='".mysql_fetch_array($result)[1]."'");
        ?>
      <div class="col-md-12 col-sm-12 ">
      <table class="table table-striped table-bordered" >

        <?php
        while($row=mysql_fetch_array($sql)){
          $idc = $row['id'];
          $city = $row['city'];
          $sc = $row['scada'];
          $co = $row['control'];
          $pro = $row['product'];
          $proj = $row['project'];
          $con = $row['contract'];
          $wars = $row['warranty_status'];
          $warp = $row['warranty_period'];
          $insu = $row['insurance_period'];
          $wos = $row['working_status'];
          $def = $row['defective'];
        ?>
        <tr>
        <th scope="col" bgcolor="#99FFFF">รายระเอียดสถานีไฟฟ้า</th>
        <th scope="col" bgcolor="#99FFFF"></th>
        <tr>
        <th scope="col">จังหวัด</th>
        <td><?php echo "$city"; ?></td>
        </tr>

        <tr>
        <th scope="col">ระบบSCADA</th>
        <td><?php echo "$sc"; ?></td>
        </tr>

        <tr>
        <th scope="col">ระบบControl</th>
        <td><?php echo "$co"; ?></td>
        </tr>
        
        <tr>
        <th scope="col">ผลิตภัณฑ์</th>
        <td><?php echo "$pro"; ?></td>
        </tr>

        <tr>
        <th scope="col">โครงการ</th>
        <td><?php echo "$proj"; ?></td>
        </tr>

        <tr>
        <th scope="col">เลขที่สัญญา</th>
        <td><?php echo "$con"; ?></td>
        </tr>

        <tr>
        <th scope="col">สถานะการรับประกัน</th>
        <td><?php echo "$wars"; ?></td>
        </tr>

        <tr>
        <th scope="col">หมดระยะประกัน</th>
        <td><?php echo "$warp"; ?></td>
        </tr>

        <tr>
        <th scope="col">สถานะการใช้งาน</th>
        <td><?php echo "$wos"; ?></td>
        </tr>

         <tr>
        <th scope="col">จำนวนอุปกรณ์ชำรุด</th>
        <td><?php echo "$def"; ?></td>
        </tr>
        <th scope="col" bgcolor="#99FFFF"><?php echo "<a href=edit_ac3.php?id=".$idc." class='btn btn-primary' ><strong>แกไขรายละเอียดสถานี</strong></a>" ;?></th>
        </tr>

        <?php
}

?>

      </table>
    </div>