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

echo "<table border='1' width='100%' height='50px' cellspacing='0' id='main'>
<tr><button class='add'><a href='Create.php'>New Entry</a> </button> </tr>
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
    <td> <button class='up'><a href='update.php?sid=$data[sid];'>Update</a></button> </td>
   <td><button class='de'> <a href='delete.php?sid=$data[sid];'>Delete</a></button></td>

  
    </tr>";
    
}
echo"</table>";


?>


<style>

#main{text-align:center;}
.add  {background:#ebcc34;
font-size:20px;
font-weight:bold;

}
button a {
    text-decoration:none;
}


.up{background:green;
font-size:15px;
font-weight:bold;
font-style: normal;

}

.up a{color:white;
text-decoration:none;}
.de a{color:white;
    text-decoration:none;
}

.de{background:red;
font-size:15px;
font-weight:bold;}

th{background:#9fd3c7;
text-align:center

}


    </style>