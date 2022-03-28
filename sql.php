<?php

$a = $_POST['a'];

$dbhost = 'localhost';
$dbusername = 'itflow';
$dbpassword = 'itflow';
$database = 'itflow';
$mysqli = mysqli_connect($dbhost, $dbusername, $dbpassword, $database) or die('Database Connection Failed');

mysqli_query($mysqli, "INSERT INTO a SET a = $a");

?>
