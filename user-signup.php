<?php
include "connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="full">
        <div id="inner_full">
            <div id="Header" align="center"><h2>Blood Bank Management System</h2></div>
            <center><div id="Body"
            style="background-color: rgba(0, 0, 0, 0.715);color:white;">
                <br><br>
                <h1 align="center" style="border:5px;color:white;background-color:brown">User Registration</h1>
                <form action="" method="post">
                    <table align="center">
                    <tr>
                            <td width="200px" height="50px">Enter Name</td>
                            <td width="200px" height="50px"><input type="text"name="name"placeholder="Enter name"></td>
                            <td width="200px" height="50px">Enter Age</td>
                            <td width="200px" height="50px"><input type="text"name="age"placeholder="Enter Age"></td>
                        </tr>
                        <tr>
                            <td width="200px" height="50px">Enter Address</td>
                            <td width="200px" height="50px"><textarea name="address"></textarea></td>
                            <td width="200px" height="50px">Enter City</td>
                            <td><input type="text"name="city"placeholder="Enter city"></td>
                        </tr>
                        <tr>
                            <td width="200px" height="50px">Enter Password</td>
                            <td width="200px" height="50px"><input type="text"name="ps"placeholder="Enter Password"></td>
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
                            <td><input type="submit" name="sub" value="Sign up" style="width:70px; height:40px; border-radius: 5px;color:cornflowerblue;"><br><br></td>
                        </tr>
                    </table>
                </form>
                <?php
                if(isset($_POST['sub'])){

                    $name = $_POST['name'];
                    $age = $_POST['age'];
                    $address = $_POST['address'];
                    $city = $_POST['city'];
                    $ps = $_POST['ps'];
                    $bgroup = $_POST['bgroup'];
                    $email = $_POST['email'];
                    $mno = $_POST['mno'];

                    $sql = "INSERT INTO user (name, age, address, city, pass, bgroup, email, mno)
                    VALUES ('$name', '$age', '$address', '$city', '$ps', '$bgroup', '$email', '$mno')";

                    $result = $conn->query($sql);
                    if($result===TRUE){
                       echo "<script>alert('User registration successfull')</script>";
                    }
                    else
                    {
                        echo "<script>alert('Donor registration unsuccessfull')</script>";
                    }

                }
                ?>
            </div></center>
            <div id="Footer"><h4 align="center">Be the reason for someone’s heartbeat.</h4>
            <p align="center">Already Account?<a href="user-login.php"><font color="white"><input type="submit" value="User"></font></a>
        </div>
        </div>
    </div>
</body>
</html>
