<?php

$mysql_hostname = "localhost"; //write here your hostname
$mysql_user = "root"; //write here your username
$mysql_password = ""; //write here the password
$mysql_database = "vacationHR"; //write here the database
 
$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database) or die("Could not connect database");
mysqli_set_charset($db, "utf8");

?>
