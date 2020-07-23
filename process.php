<?php
include "includes/db.php";
	$id = $_GET['delete'];
	$deletequery = " delete from people where id = '$id' ";
	$query =  mysqli_query($connection, $deletequery);
	if($query)
	{
		
		echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
		
	}
	header("Location:home.php");


?>

	