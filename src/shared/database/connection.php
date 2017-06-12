<?php
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'cscs2');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '12345678');

    $con=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
    $db=mysql_select_db(DB_NAME, $con) or die ("Failed to connect to MySQL: " . mysql_error());
    mysql_query("SET NAME utf8;");

    function selectDb($_command) {
        $command = 'select * '.$_command;
        $rows = mysql_query($command);
        return $rows;
    }

    // Pattern เตรียม data
    // $data = array(
    //     'sub_id' => $sub_id,
    //     'sub_name' => $sub_name
    // );

    function insertDb(array $data, $table_name) {
        $command = 'insert into '.$table_name.' (';
        $count = count($data);
        $values = "'";

        foreach ($data as $key => $value) {
            $command .= $key;
            $values = $values.$value."'";
            if ($count != 1) {
                $command .= ', ';
                $values .= ", '";
            }
            $count--;
        }
        $command .= ') values ('.$values.')';

        echo '<br>'.$command;

        $result = mysql_query($command);
        if ($result)
            return $result;
        else
            return mysql_error();
    }

    function updateDb(array $data, $table_name, $condition = NULL) {
        $command = 'update '.$table_name.' set ';
        $count = count($data);

        foreach ($data as $key => $value) {
            $command = $command.$key."='".$value."'";
            if ($count != 1) {
                $command .= ', ';
            }
            $count--;
        }
        if ($condition)
            $command = $command.' where '.$condition;

        echo '<br>'.$command;

        $result = mysql_query($command);
        if ($result)
            return $result;
        else
            return mysql_error();
    }
?>