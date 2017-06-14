<html>
    <head>
        <title>RELAY SECTION</title>
        <link rel="shortcut icon" href="http://localhost/HostingDetail/src/img/logo/logos.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
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
                $rows=selectDb('from substation');
                $select=$_POST['sub'];
                $chk = 0;
                if (!is_null($select)) $chk = 1;
                echo "<form method='post' action=''>
                        <div class='form-group col-sm-12'>
                            <div class='col-sm-1 position'>
                                <label for='selectSubstation'>เลือกสถานี:</label>
                            </div>
                            <div class='col-sm-4'>
                                <select class='form-control' id='selectSubstaion' name='selectSubstation'><option value='-1'> --- เลือกสถานี --- </option>";
                while ($row=mysql_fetch_array($rows)) {
                    $text = '<option value="'.$row[0].'"';
                    if($select != -1 && $select == $row[0]) $text .= ' selected ';
                    $text .= '>'.$row[2].'</option>';
                    echo $text;
                }
                echo '          </select>
                            </div>
                            <div class="col-sm-2">
                                <button id="sub_btn" type="submit" class="btn btn-magick spaceWhite"><span class="glyphicon glyphicon-ok"></span> Submit</button>
                            </div>
                        </div>
                    </form>';
                if ($chk == 0 || isset($_POST['selectSubstation'])) {
                    $select = $_POST['selectSubstation'];
                }
                include './equipment/provinceinfo.php';
                include './equipment/equipment-list.php';

                include '../../shared/footer/footer.php';
            ?>
        </div>
    </body>
</html>