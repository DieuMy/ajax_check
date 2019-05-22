<?php 
//kết nối dữ liệu
mysql_connect("localhost","root","");
mysql_select_db("ajax");
$check = $_GET["check"];
$a = "SELECT * FROM user WHERE username='$check'";
$check = mysql_query($a);
$count = mysql_num_rows($check);
echo $count;
 ?>