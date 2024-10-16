<?php 


$sid=$_POST['sid'];

$sname=$_POST['sname'];
$dob=$_POST['dob'];
$gender=$_POST['ok'];
$course=$_POST['course'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];

include ("config.php");

$query = "update student set sname='$sname', dob='$dob', gender='$gender', course='$course', address='$address', phone='$phone', email='$email' Where sid='$sid'";
$result=mysqli_query($con,$query);

if($result)
	{
		header("location:Read.php");
		
	}
	else
	{
		echo "Does not Update";
	}


?>