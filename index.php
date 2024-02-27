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
                <br><br><br><br><br>
                <form action="" method="post">
                    <table align="center">
                        <tr>
                            <td width="200px" height="70px"><b>Enter Adminname</b></td>
                            <td width="200px" height="70px"><input type="text" name="un" placeholder="Enter Adminname" style="width:180px; height:40px; border-radius: 10px;"></td>
                        </tr>
                        <tr>
                            <td width="200px" height="70px"><b>Enter Password</b></td>
                            <td width="200px" height="70px"><input type="password" name="ps" placeholder="Password" style="width:180px; height:40px; border-radius: 10px;"><br><br></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="sub" value="Log in" style="width:70px; height:40px; border-radius: 5px;color:cornflowerblue;"><br><br></td>
                        </tr>
                    </table>
                </form>
                <?php
                if (isset($_POST['sub'])) {
                    $un = $_POST['un'];
                    $ps = $_POST['ps'];

                    $sql = "SELECT * FROM admin WHERE uname='$un' AND pass='$ps'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $_SESSION['un']=$un;
                        header("Location:admin-home.php");
                    } else {
                        echo "<script>alert('Wrong User')</script>";
                    }
                }
                ?>
            </div></center>
            <div id="Footer"><h4 align="center">Be the reason for someone’s heartbeat.</h4>
            <p align="center"><a href="user-login.php"><font color="white"><input type="submit" value="User Login"></font></a>
        </div>
        </div>
    </div>
</body>
</html>
