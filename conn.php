<?php
global $conn;

$conn = mysql_connect("localhost", "wearevl_test", "tangramAlpha2") or die(mysql_error());
mysql_select_db("wearevl_int", $conn) or die(mysql_error());
?>