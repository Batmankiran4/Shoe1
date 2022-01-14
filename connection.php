<?php
$servername="localhost";
$username="root";
$password="";
$db="shoe";
$conn=mysqli_connect($servername,$username,$password,$db);
if ($conn) {
//echo "connection successfull";
}
else
{
	echo "not connected";
}
?>