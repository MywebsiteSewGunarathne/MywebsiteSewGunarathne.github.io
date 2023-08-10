<?php
$conn=mysql_connect('localhost','root','','user_db');
if(!$conn){
	die("connection failed". mysqli_connect_error());
}
echo "Connected successfully"; 
?>