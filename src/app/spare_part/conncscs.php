<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'equipment_cscs');
define('DB_USER', 'root');
define('DB_PASSWORD', '12345678');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD)or die("Failed to connect to MySQL: " . mysql_error());

$db=mysql_select_db(DB_NAME,$con) or die ("Failed to connect to MySQL: " . mysql_error());

//mysql_query("SET NAME TIS620");

mysql_query("SET NAME utf8;");

?>