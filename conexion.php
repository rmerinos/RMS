<?php

$host = 'eurekabankdb.mysql.database.azure.com';
$username = 'eurekabank@eurekabankdb';
$password = '3ur3K4B@nk';
$db_name = 'eurekabank';

$cn = mysqli_init();
mysqli_real_connect($cn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($cn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}


?>

