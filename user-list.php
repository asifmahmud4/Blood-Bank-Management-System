<?php
require "connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User list</title>
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
                <h1 align="center" style="border:5px;color:white;background-color:brown">User List</h1>
                <center><div id="form">
                    <table>
                        <tr>
                        <th><center><b><font size="4">ID</font></b></center></th>
                            <th><center><b><font size="4">Name</font></b></center></th>
                            <th><center><b><font size="4">Address</font></b></center></th>
                            <th><center><b><font size="4">City</font></b></center></th>
                            <th><center><b><font size="4">Age</font></b></center></th>
                            <th><center><b><font size="4">Blood Group</font></b></center></th>
                            <th><center><b><font size="4">Mobile No</font></b></center></th>
                            <th><center><b><font size="4">E-Mail</font></b></center></th>
                            <th><center><b><font size="4">Action</font></b></center></th>
                        </tr>
                        <?php
                        $sql = "SELECT id, name,age,address,city,bgroup,email,mno FROM `user`";
                        $result = mysqli_query($conn,$sql);
                        ?>
                        <tr>
                            <?php
                                while($row = mysqli_fetch_assoc($result))
                                {
                            ?>
                            <td><center><?php echo $row['id'];?></center></td>
                            <td><center><?php echo $row['name'];?></center></td>
                            <td><center><?php echo $row['address'];?></center></td>
                            <td><center><?php echo $row['city'];?></center></td>
                            <td><center><?php echo $row['age'];?></center></td>
                            <td><center><?php echo $row['bgroup'];?></center></td>
                            <td><center><?php echo $row['mno'];?></center></td>
                            <td><center><?php echo $row['email'];?></center></td>
                            <td>
                            <button><a href="delete-user.php?id=<?php echo $row['id']; ?>">Delete</a></button>
                            <button><a href="edit-user.php?id=<?php echo $row['id']; ?>">Edit</a></button>
                                </td>
                           
                        </tr>

                            <?php
                                }
                            ?>
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
