<?php
// This is for Mysql Database Connection String File for Remote Machine
ob_start();
$con = mysql_connect("mysql917.ixwebhosting.com","C278619_maasReK","Hw.r78Hsl.") or die ('Error Connectiong to mysql: '.mysql_error());
//$dbname = "C278619_maassmatri";
$dbname = "C278619_maassmatG";
mysql_select_db($dbname,$con) or die ("Select Error: ".mysql_error());
?>