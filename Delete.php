<?php 
$sid=$_GET['sid'];
include ("config.php");

$query = "delete from student where sid='$sid';";
$result=mysqli_query($con,$query);

if($result)
	{
		header("location:Read.php");
		
	}
	else
	{
		echo "Does not delete";
	}

?>