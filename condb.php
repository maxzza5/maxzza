<?php
$condb= mysqli_connect("localhost","root","151025Max","A4PD_POLICE") or die("Error: " . mysqli_error($condb));
mysqli_query($condb, "SET NAMES 'utf8' ");
date_default_timezone_set('Asia/Bangkok');
?>
