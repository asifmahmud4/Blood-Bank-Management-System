<?php
require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Request</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="full">
        <div id="inner_full">
            <div id="Header" align="center"><h2><a href="user-home.php" style="text-decoration:none; color:white;">Blood Bank Management System</a></h2></div><br>
            <div id="Body">
                <br>
                <h1 align="center" style="border:5px;color:white;background-color:brown">Request Form</h1>
                <center><div id="form">
                    <form action="" method="post">
                    <table>
                        <tr>
                            <td width="200px" height="50px">Enter Name</td>
                            <td width="200px" height="50px"><input type="text"name="name"placeholder="Enter name"></td>
                            <td width="200px" height="50px">Enter Patient Name</td>
                            <td width="200px" height="50px"><input type="text"name="pname"placeholder="Enter Patient name"></td>
                        </tr>
                        <tr>
                            <td width="200px" height="50px">Disease</td>
                            <td width="200px" height="50px"><textarea name="dis"></textarea></td>
                            <td width="200px" height="50px">Enter City</td>
                            <td><input type="text"name="city"placeholder="Enter city"></td>
                        </tr>
                        <tr>
                            <td width="200px" height="50px">Enter Patient Age</td>
                            <td width="200px" height="50px"><input type="text"name="age"placeholder="Enter age"></td>
                            <td width="200px" height="50px">Select Blood Group</td>
                            <td width="200px" height="50px">
                                <select name="bgroup">
                                <option value="O+">O+</option>
                                <option value="O+">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                        </select>
                        </td>
                        </tr>
                        <tr>
                            <td width="200px" height="50px">Enter E-mail</td>
                            <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter email"></td>
                            <td width="200px" height="50px">Enter Mobile No.</td>
                            <td><input type="text"name="mno"placeholder="Enter Number"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="sub" value="Send"></td>
                            
                        </tr>
                    </table>
                    </form>
                    <?php
                        if(isset($_POST['sub'])){

                            $name = $_POST['name'];
                            $pname = $_POST['pname'];
                            $disease = $_POST['dis'];
                            $city = $_POST['city'];
                            $age = $_POST['age'];
                            $bgroup = $_POST['bgroup'];
                            $email = $_POST['email'];
                            $mno = $_POST['mno'];

                            $sql = "INSERT INTO request (name, pname, disease, city, age, bgroup, email, mno)
                            VALUES ('$name', '$pname', '$disease', '$city', '$age', '$bgroup', '$email', '$mno')";

                            $result = $conn->query($sql);
                            if($result===TRUE){
                               echo "<script>alert('Request send successfull')</script>";
                            }
                            else
                            {
                                echo "<script>alert('Request unsuccessfull')</script>";
                            }

                        }

                    ?>
                    <a href="request-list.php"><font color="white"><input type="submit" value="Request List"></font></a>
                </div></center>
                
            
                
            </div>
            <div id="Footer"><h4 align="center">Be the reason for someone’s heartbeat.</h4>
            <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
        </div>
        </div>
    </div>
</body>
</html>
