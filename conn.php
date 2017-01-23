<?php
$conn = @mysql_connect("localhost","root","") or die(mysql_error());
$dbconn = mysql_select_db("shoppingcart", $conn) or die(mysql_error());
?>