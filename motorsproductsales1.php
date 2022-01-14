<?php
include("connection.php");

$pn=$_REQUEST['productname'];

$q=$_REQUEST['qty'];
$q1=$_REQUEST['qty1'];

$q2=$q-$q1;

$p=$_REQUEST['price'];

//echo $pn,$q,$p;

$query="UPDATE `motorsproduct` SET `pname`='$pn',`quantity`='$q2',`price`='$p' WHERE pname='$pn'";

$data=mysqli_query($conn,$query); 

if ($data) 
 {
	

	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='menu.php';
    </script>");
 

}
else
{
	echo "not add";
}

?>


