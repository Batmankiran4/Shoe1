<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$role=$_POST['role'];

	$query="select * from reg where email='$email' and password='$password' and role='$role'";

	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($result);

	if($row["role"]=='admin')
	{
		//echo "sucessfull";
		header("location:admin.php");
	}

	elseif($row["role"]=='oparetor')
	{
		header("location:oparetor.php");
	}

	else
	{
		echo "invalid Password";
	}
}
?>