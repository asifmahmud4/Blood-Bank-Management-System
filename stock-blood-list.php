<?php
require "connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stock Blood List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        table{
            border: 1px solid white;
            border-collapse: separate;
            border-spacing: 0px;
        }
        td{
            width: 200px;
            height: 40px;
        }
        #form{
            max-height: 300px;
            overflow-y: scroll;
            margin: 20px;
        }
        th{
            position: sticky;
            top:0px;
            background-color: teal;
            color:wheat;
        }
        th,td{
            border: 1px solid white;
        }
        </style>
</head>
<body>
    <div id="full">
        <div id="inner_full">
            <div id="Header" align="center"><h2><a href="admin-home.php" style="text-decoration:none; color:white;">Blood Bank Management System</a></h2></div><br>
            <div id="Body">
                <br>
                <?php
                $un = $_SESSION['un'];
                if(!$un){
                    header("Location:index.php");
                }
                ?>
                <h1 align="center" style="border:5px;color:white;background-color:brown">Stock Blood List</h1>
                <center><div id="form">
                    <table>
                        <tr>
                            <th><center><b><font size="4">Name</font></b></center></th>
                            <th><center><b><font size="4">Quantity</font></b></center></th>
                        </tr>
                        <tr>
                            <td><center>O+</center></td>
                            <td><center>
                                <?php
                                $bgroup="O+";
                                $sql = "SELECT COUNT(*) as count FROM donor_registration WHERE bgroup='$bgroup'";
                                $result = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_assoc($result);
                                $row_count = $row['count'];
                                echo "$row_count";
                                ?>
                            </center></td>
                            
                        </tr>
                        <tr>
                            <td><center>O-</center></td>
                            <td><center>
                                <?php
                                $bgroup="O-";
                                $sql = "SELECT COUNT(*) as count FROM donor_registration WHERE bgroup='$bgroup'";
                                $result = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_assoc($result);
                                $row_count = $row['count'];
                                echo "$row_count";
                                ?>
                            </center></td>
                            
                        </tr>
                        <tr>
                            <td><center>AB+</center></td>
                            <td><center>
                                <?php
                                $bgroup="AB+";
                                $sql = "SELECT COUNT(*) as count FROM donor_registration WHERE bgroup='$bgroup'";
                                $result = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_assoc($result);
                                $row_count = $row['count'];
                                echo "$row_count";
                                ?>
                            </center></td>
                            
                        </tr>
                        <tr>
                            <td><center>AB-</center></td>
                            <td><center>
                                <?php
                                $bgroup="AB-";
                                $sql = "SELECT COUNT(*) as count FROM donor_registration WHERE bgroup='$bgroup'";
                                $result = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_assoc($result);
                                $row_count = $row['count'];
                                echo "$row_count";
                                ?>
                            </center></td>
                            
                        </tr>
                        <tr>
                            <td><center>A+</center></td>
                            <td><center>
                                <?php
                                $bgroup="A+";
                                $sql = "SELECT COUNT(*) as count FROM donor_registration WHERE bgroup='$bgroup'";
                                $result = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_assoc($result);
                                $row_count = $row['count'];
                                echo "$row_count";
                                ?>
                            </center></td>
                            
                        </tr>
                        <tr>
                            <td><center>A-</center></td>
                            <td><center>
                                <?php
                                $bgroup="A-";
                                $sql = "SELECT COUNT(*) as count FROM donor_registration WHERE bgroup='$bgroup'";
                                $result = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_assoc($result);
                                $row_count = $row['count'];
                                echo "$row_count";
                                ?>
                            </center></td>
                            
                        </tr>
                        <tr>
                            <td><center>B+</center></td>
                            <td><center>
                                <?php
                                $bgroup="B+";
                                $sql = "SELECT COUNT(*) as count FROM donor_registration WHERE bgroup='$bgroup'";
                                $result = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_assoc($result);
                                $row_count = $row['count'];
                                echo "$row_count";
                                ?>
                            </center></td>
                            
                        </tr>
                        <tr>
                            <td><center>B-</center></td>
                            <td><center>
                                <?php
                                $bgroup="B-";
                                $sql = "SELECT COUNT(*) as count FROM donor_registration WHERE bgroup='$bgroup'";
                                $result = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_assoc($result);
                                $row_count = $row['count'];
                                echo "$row_count";
                                ?>
                            </center></td>
                            
                        </tr>

                    </table>
                   
                </div></center>
                
                
            </div>
            <div id="Footer"><h4 align="center">Be the reason for someone’s heartbeat.</h4>
            <p align="center"><a href="logout.php"><font color="white"><input type="submit" value="Logout"></font></a>
        </div>
        </div>
    </div>
</body>
</html>
