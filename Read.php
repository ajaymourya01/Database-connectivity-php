<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styletable.css"></head>
<body>
    
</body>
</html>




<?php 
include ("config.php");
$query = "Select * From student";
$result=mysqli_query($con,$query);

echo "<table border='1' width='100%' height='50px' cellspacing='0'>
<th  bgcolor='yellow'> S.No. </th>
<th  bgcolor='yellow'> Student Name</th>
<th  bgcolor='yellow'> Date of Birth </th>
<th  bgcolor='yellow'> Gender </th> 
<th  bgcolor='yellow'> Course </th> 
<th  bgcolor='yellow'> Address </th> 
<th  bgcolor='yellow'> Phone </th> 
<th  bgcolor='yellow'> E-mail </th> 
<th  bgcolor='yellow'> Update  </th> 
<th  bgcolor='yellow'> Delete </th> 

";

while($data= mysqli_fetch_assoc($result))
{
    echo " <tr> 
    <td> ".$data['sid']."</td>
    <td> ".$data['sname']."</td>
    <td> ".$data['dob']."</td>
    <td> ".$data['gender']."</td>
    <td> ".$data['course']."</td>
    <td> ".$data['address']."</td>
    <td> ".$data['phone']."</td>
    <td> ".$data['email']."</td>
   <div > <td> <button><a href='update.php?sid=$data[sid];'>Update</a></button></td></div>
   <div > <td> <button> <a href='delete.php?sid=$data[sid];'>Delete</a></button></td></div>

  
    </tr>";
    
}
echo"</table>";
echo"<button><a href='Create.php'>New Entry</a> </button>";

?>