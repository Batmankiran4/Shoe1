<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$post=$_POST['post'];

	$query="select * from motors where email='$email' and password='$password' and post='$post'";

	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($result);

	if($row["post"]=='admin')
	{
		//echo "sucessfull";
		header("location:admin.php");
	}

	elseif($row["post"]=='oparetor')
	{
		header("location:menu.php");
	}

	else
	{
		echo "invalid Password";
	}
}
?>