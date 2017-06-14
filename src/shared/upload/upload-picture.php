<!DOCTYPE html>
<html>
    <head>
        <title>RELAY SECTION</title>
        <link rel="shortcut icon" href="http://localhost/HostingDetail/src/img/logo/logos.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://localhost/HostingDetail/src/shared/bootstrap/bootstrap-filestyle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/insert.css" />
        <link rel="stylesheet" type="text/css" href="../css/layout.css" />
        <link rel="stylesheet" type="text/css" href="../css/button.css" />
    </head>
    <body id="myPage">
        <div class="container">
        <?php 
            include '../nav/nav.php';
            include '../database/connection.php';
            $id_item=$_GET['id'];
            $table=$_GET['table'];
            $target=base64_decode($_GET['target']);

            $r_item=selectDb('from '.$table.' WHERE id='.$id_item.' and active=1');
            $d_item=mysql_fetch_array($r_item);
            if(isset($_FILES['image'])) {
                $errors= array();
                $file_name = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_tmp = $_FILES['image']['tmp_name'];
                $file_type = $_FILES['image']['type'];
                $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
                
                $expensions= array("jpeg","jpg","png");
                if(in_array($file_ext,$expensions)=== false) {
                    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                }
                
                if($file_size > 2097152) {
                    $errors[]='File size must be excately 2 MB';
                }
                
                if(empty($errors)==true) {
                    move_uploaded_file($file_tmp,"images/".$file_name);
                }
                else {
                    print_r($errors);
                }
            }

            echo '<div class="header"><h2>อัพโหลดรูปภาพ:</h2></div><legend></legend>';
            echo '<div class="col-md-12 col-sm-12 ">
                    <a href="'.$target.'" class="btn btn-info"><span class="glyphicon glyphicon-chevron-left"></span> ย้อนกลับ</a>
                  </div><br>';
            echo '<div class="col-md-6 col-sm-6 ">
                    <p>รูปเดิม :</p>
                    <img src="'.$d_item['pic'].'">
                  </div>';
                  //<input type="file" name="image" />
            echo '<div class="col-md-6 col-sm-6">
                    <div class="col-md-6 col-sm-6">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="file" class="filestyle" data-icon="false" name="image">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="submit"><span class="glyphicon glyphicon-save"></span> SAVE</button>
                            </div>
                            <div class="form-group">
                                <ul>
                                    <li>Sent file(ตำแหน่ง): '.$_FILES["image"]["name"].'</li>
                                    <li>File size(ขนาด): '.$_FILES['image']['size'].'</li>
                                    <li>File type(ประเภท): '.$_FILES['image']['type'].'</li>
                                </ul>
                            </div>
                        </form>
                    </div>
                  </div>';

            $mid = $_POST['id'];
            $mod = $_POST['product_name'];
            $image_path = "images/" . $file_name;

            $opid = $d_item['serial_n'];
            
            if($_POST){
                $data=array(
                    'pic' => $image_path
                );
                $result=updateDb($data, $table, 'id='.$id_item);
                if ($result != 1) echo '<br><br><br><center><font color=red>Error: '.$result.'</font></center><br>';
                if($result) {
                    echo '<div class="col-md-6 col-sm-6">';
                    echo "<br>รูปใหม่<br>";
                    $ax=selectDb('from '.$table.' where id='.$id_item.' and active=1');
                    while($cv=mysql_fetch_array($ax)) {
                        $picx=$cv['pic'];
                        echo "<img src=".$picx.">";
                    } 
                    echo '</div>';
                }
            }
            include '../footer/footer.php';
        ?>
        </div>
    </body>
</html>