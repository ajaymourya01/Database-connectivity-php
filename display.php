<?php 
include ("config.php");
$query = "Select * From student";
$result=mysqli_query($con,$query);

echo "<table border='1' width='100%' height='50px' cellspacing='0'>
<th  bgcolor='yellow'> S.No. </th>
<th  bgcolor='yellow'> Student Name</th>
<th  bgcolor='yellow'> Class </th>
<th  bgcolor='yellow'> Roll No. </th>
<th  bgcolor='yellow'> Mobile No. </th>  ";

while($data= mysqli_fetch_assoc($result))
{
    echo " <tr> 
    <td> ".$data['s_id']."</td>
    <td> ".$data['s_name']."</td>
    <td> ".$data['course']."</td>
    <td> ".$data['roll_no']."</td>
    <td> ".$data['m_no']."</td>
    
    </tr>";
}
echo"</table>";

?>