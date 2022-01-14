<?php

include("connection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$Search = $_POST['search'];
	$sql = "select * from motorsproduct where pname like '%".$Search."%'";

	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result))
	{
     
    while ($row = mysqli_fetch_assoc($result)) 
    {
    	echo '<a href="#" class="list-group list-group-item-action shadow p-2" >'.$row['pname'].'</a>';
    }

	}

	else
	{
		echo '<p class="">Rocord Not Found</p>';
		// list-group list-group-item
	}
}

?>