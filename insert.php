<?php 
if(isset($_POST['submit']))
{
$sname=$_POST['sname'];
$dob=$_POST['dob'];
$gender=$_POST['ok'];
$course=$_POST['course'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
}

include ("config.php");

$query = "Insert into student(sname, dob, gender, course, address, phone, email) values ( '$sname', '$dob', '$gender', '$course', '$address', '$phone', '$email')";
$result=mysqli_query($con,$query);

if($result)
	{
		header("location: Read.php");
		
	}
	else
	{
		echo "not conet";
	}


?>