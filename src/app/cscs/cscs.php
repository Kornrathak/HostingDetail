<html>
    <head>
        <title>RELAY SECTION</title>
        <link rel="shortcut icon" href="img/logos.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../shared/css/insert.css" />
        <link rel="stylesheet" type="text/css" href="../../shared/css/layout.css" />
    </head>
    <body>
        <div class="container">
            <?php 
                include '../../shared/nav/nav.php'; 
                include '../../shared/database/connection.php'; 
                echo '<div class="header"><h2>ข้อมูล CSCS</h2></div>';
                $rows=selectDb('from substation');
                echo "<form method='post' action=''>
                        <div class='form-group col-sm-12'>
                            <div class='col-sm-1 position'>
                                <label for='selectSubstation'>เลือกสถานี:</label>
                            </div>
                            <div class='col-sm-4'>
                                <select class='form-control' id='selectSubstaion' name='selectSubstation'><option value='-1'> --- เลือกสถานี --- </option>";
                while ($row=mysql_fetch_array($rows)) {
                    echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                }
                echo '          </select>
                            </div>
                            <div class="col-sm-2">
                                <input id="sub_btn" type="submit" class="btn btn-info spaceWhite" value="Submit Button">
                            </div>
                        </div>
                    </form>';
                $select = $_POST['selectSubstation'];
                include './equipment/provinceinfo.php';
                include './equipment/equipment-list.php';
            ?>
        </div>
    </body>
</html>