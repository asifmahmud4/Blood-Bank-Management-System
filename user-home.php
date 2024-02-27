<?php
require "connection.php";

?>

<!DOCTYPE html>
<html>
<head>
<title>Blood Bank Home</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<style>
        table{
            border: 1px solid black;
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
            border: 1px solid black;
        }
        
    </style>

</head>
<body>
<div class="header">
  <div class="logo"><h2><b>Blood Bank Management System</b></h2></div>
  <div class="nav">
    <div id="a"><a href="user-home.php">Home</a></div>
    <div id="b"><a href="donor-reg.php">Donor Registration</a></div>
    <div id="c"><a href="request.php">Blood Request</a></div>
    <div id="d"><a href="about.php">About Us</a></div>
    <div id="e"><a href="search.php">Search</a></div>
    <div id="f"><a href="user-donor-list.php">Donor List</a></div>
    <div id="g"><a href="login.php"><button>Log in</button></a></div>
    <div id="h"><a href="logout.php"><button>Log out</button></a></div>
  </div>
</div>
<div class="banner">
  
</div>
<div class="container">
    <br>
    <h2 align="center" style="color:darkred"><b>Blood Stock Information</b></h2>
  <center>
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

                    </table></center>
</div>
</body>
</html>
