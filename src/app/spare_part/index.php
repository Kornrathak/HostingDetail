<link rel="shortcut icon" href="logos.ico">
<?php
//PDO-OOP-PHP-CRUD-with-Bootstrap 2016 (CRUD Operation) | Part-14
//Playlist Name  : PDO-OOP-PHP-CRUD-with-Bootstrap 2016
include './include/db-config.php';
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
        <?php include './include/header.php'; ?>

        <div class="container">
            <a href="http://localhost/HostingDetail/src/app/cscs/cscs.php" class="btn btn-success"></i>&nbsp; กลับไปยังหน้าอุปกรณ์ CSCS</a>
            <a href="add-records.php" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i>&nbsp; เพิ่มข้อมูล</a>
            


        </div>

        <div class="clearfix"></div></br>

        <div class="container">
            <table id="myTable" class="table table-bordered table-responsive">
              
                    <tr>
                        <th style="text-align: center;">ผลิตภัณฑ์</th>
                        <th  style="text-align: center;">อุปกรณ์</th>
                        <th  style="text-align: center;">ชิ้นส่วนอุปกรณ์</th>
                        <th  style="text-align: center;">ยี่ห้อ</th>
                        <th style="text-align: center;">รุ่น</th>
                        <th style="text-align: center;">Serial No.</th>
                        <th style="text-align: center;">วันจัดซื้อ/รับของ</th>
                        <th style="text-align: center;">วันหมดประกัน</th>
                        <th style="text-align: center;">ราคา</th>
                        <th style="text-align: center;">ที่มา</th>
                        <th style="text-align: center;">งบ</th>
                        <th style="text-align: center;">สถานี</th>
                        <th style="text-align: center;">ผู้เบิก</th>
                        <th style="text-align: center;">หมายเหตุ</th>
                       

                        <th  style="text-align: center;" colspan="2">Action</th>
                    </tr>
              
             
                 <?php
                 $query="select * from spare_part";
                 $record_per_page=3;
                 $query2=$crud->paging($query,$record_per_page);
                
                 $crud->dataview($query2);
                 ?>

                    <tr>
                        <td colspan="16" align="center">
                            <div class="pagination-wrap">
                                <?php   $crud->pagelink($query, $record_per_page);    ?>
                                
                            </div>
                        </td>
                        
                    </tr>






            </table>




        </div>

      <?php include './footer.php' ?> 








    </body>
  
</html>
