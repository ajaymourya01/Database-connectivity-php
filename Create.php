

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
            <h3>Register yourself </h3>
            <form action="insert.php" method="post">
                <tr>
                    <td>Student Name</td>
                    <td><input type="text" name="sname" placeholder="Enter your fist name " value="" required></td>
                </tr>

             
                <tr>
                    <td>Date of Birth</td>
                    <td><input type="date" name="dob"  value="" required></td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td><input type="radio" name="ok" value="Male"  required> Male <input type="radio" name="ok" value="Female"required>Female</td>
                </tr>

                <tr>
                    <td>Course</td>
                    <td><select name="course" id="" required>
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
                    <td><textarea name="address" id="" placeholder="Enter your address " required></textarea></td>
                </tr>

                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" placeholder="Enter your phone no. " value="" required></td>
                </tr>

                <tr>
                    <td>E-mail</td>
                    <td><input type="email" name="email" placeholder="Enter your email " value="" required></td>
                </tr>

                <tr >
                    <td><input type="reset" name="reset" value="Reset"></td>
                    <td><input type="submit" name="submit"  value="submit" ></td>
                </tr>
            </form>
        </table>
    </pre>
</body>
</html>