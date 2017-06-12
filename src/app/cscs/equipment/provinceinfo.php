<div>
    <?php
        $r_sub=selectDb("from substation where id='".$select."'");
        $d_sub=mysql_fetch_array($r_sub);
        echo '<h2 align="center">สถานีไฟฟ้า '.$d_sub['sub_name'].'</h2>';
        $r_province=selectDb("from provinceinfo where sub_id='".$d_sub[1]."'");
    ?>
    <div class="col-md-12 col-sm-12 ">
        <table class="table table-striped table-bordered" >
        <?php
            $d_province=mysql_fetch_array($r_province);
            echo '<tr><th scope="col" colspan="2" bgcolor="#99FFFF">รายระเอียดสถานีไฟฟ้า</th></tr>';
            echo '<tr><th scope="col">จังหวัด</th><td>'.$d_province['city'].'</td></tr>';
            echo '<tr><th scope="col">ระบบSCADA</th><td>'.$d_province['scada'].'</td></tr>';
            echo '<tr><th scope="col">ระบบControl</th><td>'.$d_province['control'].'</td></tr>';
            echo '<tr><th scope="col">ผลิตภัณฑ์</th><td>'.$d_province['product'].'</td></tr>';
            echo '<tr><th scope="col">โครงการ</th><td>'.$d_province['project'].'</td></tr>';
            echo '<tr><th scope="col">เลขที่สัญญา</th><td>'.$d_province['contract'].'</td></tr>';
            echo '<tr><th scope="col">สถานะการรับประกัน</th><td>'.$d_province['warranty_status'].'</td></tr>';
            echo '<tr><th scope="col">หมดระยะประกัน</th><td>'.$d_province['warranty_period'].'</td></tr>';
            echo '<tr><th scope="col">สถานะการใช้งาน</th><td>'.$d_province['working_status'].'</td></tr>';
            echo '<tr><th scope="col">จำนวนอุปกรณ์ชำรุด</th><td>'.$d_province['defective'].' รายการ</td></tr>';
            echo '<tr><th scope="col" colspan="2" bgcolor="#99FFFF"><a href="http://localhost/HostingDetail/src/app/cscs/equipment/equipment-edit.php?id='.$d_province['id'].'" class="btn btn-primary"><strong>แกไขรายละเอียดสถานี</strong></a></th></tr>';
            $insu = $d_province['insurance_period']; //<< เอาไว้ทำอะไร????
        ?>
        </table>
    </div>
</div>