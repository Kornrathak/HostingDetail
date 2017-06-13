<!DOCTYPE html>
<html lang="en">
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

<?php
   $id=$_GET['id'];
   //echo $id;
   
   $sql=mysql_query("select * from equipment_info WHERE id='$id'");
   $row=mysql_fetch_array($sql);
   $os = $row['product_name'];

   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         //echo "Stored in: " . "images/" . $file_name."<br />";
         //echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<?php 
                                $mid = $_POST['id'];
                                $mod = $_POST['product_name'];
                                $image_path = "images/" . $file_name;
                                //echo "id = "."$id"."<br>";
                                $sf=mysql_query("select * from detail where id like '$id'");

while($rp=mysql_fetch_array($sf))
{

  //$id=$row['id'];
  $opid = $rp['sn'];
  $pic=$rp['pic'];
  
  //echo "$op"."<br>";
  //echo "$pic";
//echo "$id"."<img src=$pic>"."<br>"."<br>";
}
                                //echo "$image_path";
                                //echo "$opid"."asdasasddas" ;
                                
                            if($_POST){
                                $up = "UPDATE detail SET pic='$image_path'WHERE id='$id'";

                                $objQuery = mysql_query($up);
                                if($objQuery)
                                {
                                    echo "<br><br><br>";
                                    echo "<div><center><font size = 16 color=red>UPDATE SUCCESSFULLY</font></center></div>";
                                    //include ('index.php');
                                    ?>
                                    <div class="col-sm-2">
                                    <?php
                                    echo "<br>"."รูปใหม่"."<br>";
$ax=mysql_query("select pic from detail where id like '$id'");

while($cv=mysql_fetch_array($ax))
{

  $picx=$cv['pic'];

echo "<img src=$picx>"."<br>"."<br>";
} 
                                    ?>
                                    </div>
                                    <a href="relay.php" class='btn btn-primary'>เลือกสถานี</a>
                                    <?php
                                    echo "<a href=equit.php?serial=".$opid." class='btn btn-primary'>ย้อนกลับ</a>";
                                    //มีผลต่อการอัพเดท
                                }
                                else
                                {
                                    echo "ERROR";
                                    //echo "<center><a herf='relay.php'>Back to main page</a></center>";
                                }

                            }
                                
                                //mysql_close($db);
                            ?>
<br>
      <div class="col-sm-2"> </div>
            <div class="col-sm-12"><h1>อัพโหลดรูปภาพ:</h1></div>
            <br>
            <legend></legend>
<div class="col-md-6 col-sm-6 "><?php
            echo "รูปเดิม :"."<br><img src=$pic>" ;
            ?></div>
<div class="col-md-6 col-sm-6 ">
      <div class="col-md-6 col-sm-6 ">
          
<form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" /><br>
         <input type='submit' name='submit' value='SAVE'>
         <br>
         <br>

         <ul>
            <li>Sent file(ตำแหน่ง): <?php echo $_FILES['image']['name'];  ?></li>
            <li>File size(ขนาด): <?php echo $_FILES['image']['size'];  ?></li>
            <li>File type(ประเภท): <?php echo $_FILES['image']['type'] ?></li>
         </ul>
      
      </form>
      </div>
      
      </div><div class="col-sm-6" ><?php
            //echo "รูปเดิม :"."<br><img src=$pic>" ;
            ?></div>




</body>
</html>