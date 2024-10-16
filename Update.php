<?php 
$sid=$_GET['sid'];
include("config.php");
$query="Select * from student where sid='$sid'";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body>
    <pre>
        
        <table cellpadding="5px">  
        <?php 
        $data=mysqli_query($con,$query);
        $result=mysqli_fetch_assoc($data);
        ?>
            <h3>Register yourself </h3>
            <form action="edit.php" method="post">
            <tr>
                    <td>S. No.</td>
                    <td><input type="text" name="sid" value="<?php echo $result['sid'];?>" ></td>
                </tr>

                <tr>
                    <td>Student Name</td>
                    <td><input type="text" name="sname" value="<?php echo $result['sname'];?>"></td>
                </tr>

             
                <tr>
                    <td>Date of Birth</td>
                    <td><input type="date" name="dob"  value="<?php echo $result['dob'];?>" ></td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td><input type="radio" name="ok" value="<?php echo $result['gender'];?>" > Male <input type="radio" name="ok" value="<?php echo $result['gender'];?>" >Female</td>
                </tr>

                <tr>
                    <td>Course</td>
                    <td><select name="course" value="<?php echo $result['course'];?>">
                        <option value="" > Select your course</option>
                        <option value="BCA"> BCA</option>
                        <option value="MCA"> MCA</option>
                        <option value="B.Sc."> B.Sc.</option>
                        <option value="M.Sc."> M.Sc.</option>
                        <option value="BBA"> BBA</option>
                        <option value="MBA"> MBA</option>
                        <option value="B.tech"> B.tech</option>
                        <option value="M.tech"> M.tech</option>
                        <option value="BA"> BA</option>
                        <option value="MA"> MA</option>
                        <option value="B.pharma"> B. phrama</option>
                        <option value="M. pharma"> M. phrma</option>

                    </select></td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td><textarea name="address" value="<?php echo $result['address'];?>" ></textarea></td>
                </tr>

                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" value="<?php echo $result['phone'];?>" ></td>
                </tr>

                <tr>
                    <td>E-mail</td>
                    <td><input type="email" name="email"  value="<?php echo $result['email'];?>" ></td>
                </tr>

                <tr >
                    
                    <td><input type="submit" name="submit"  value="Update" ></td>
                </tr>
            </form>
        </table>
    </pre>
</body>
</html>