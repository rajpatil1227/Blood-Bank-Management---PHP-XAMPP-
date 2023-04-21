<?php
// include('connect.php');
// session_start();

$servername = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password);

if (!$con) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="s11.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style type="text/css">
        td {
            width: 200px;
            height: 20px;
        }
    </style>
    <title>Stock Blood List</title>
</head>

<body>

    <div id="full">
        <div id="inner_full">
            <div id="header">
                <h2><a href="home.php" style="text-decoration:none;">Blood Bank Portal</a></h2>
            </div>
            <div id="body">
                <br>
                <style>
                    h1 {
                        color: aqua;
                        margin: auto;
                    }
                </style>
                <h1>Blood Stock List</h1>
                <center>
                    <div id="form">
                        <!-- <form action="" method="post"> -->
                        <table>
                            <tr>
                                <td>
                                    <center><b>
                                            <font color="black">Name</font>
                                        </b></center>
                                </td>
                                <td>
                                    <center><b>
                                            <font color="black">Qnty</font>
                                        </b></center>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <center>O+</center>
                                </td>
                                <td>
                                    <center>
                                        <?php
                                        $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='O+'";
                                        // $q=$db->query("SELECT * FROM registration WHERE bgroup='O+'");
                                        $result = mysqli_query($con, $q);
                                        $row = mysqli_fetch_row($result);
                                        echo $row[2] . " units";
                                        ?>
                                    </center>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <center>A+</center>
                                </td>
                                <td>
                                    <center>
                                        <?php
                                        $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='A+'";
                                        // $q=$db->query("SELECT * FROM registration WHERE bgroup='A+'");
                                        $result = mysqli_query($con, $q);
                                        $row = mysqli_fetch_row($result);
                                        echo $row[2] . " units";
                                        ?>
                                    </center>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <center>B+</center>
                                </td>
                                <td>
                                    <center>
                                        <?php
                                        // $q=$db->query("SELECT * FROM registration WHERE bgroup='AB+'");
                                        $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='B+'";
                                        $result = mysqli_query($con, $q);
                                        $row = mysqli_fetch_row($result);
                                        echo $row[2] . " units";
                                        ?>
                                    </center>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <center>AB+</center>
                                </td>
                                <td>
                                    <center>
                                        <?php
                                        // $q=$db->query("SELECT * FROM registration WHERE bgroup='AB+'");
                                        $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='AB+'";
                                        $result = mysqli_query($con, $q);
                                        $row = mysqli_fetch_row($result);
                                        echo $row[2] . " units";
                                        ?>
                                    </center>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <center>O-</center>
                                </td>
                                <td>
                                    <center>
                                        <?php
                                        // $q=$db->query("SELECT * FROM registration WHERE bgroup='O-'");
                                        $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='O-'";
                                        $result = mysqli_query($con, $q);
                                        $row = mysqli_fetch_row($result);
                                        echo $row[2] . " units";
                                        ?>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>A-</center>
                                </td>
                                <td>
                                    <center>
                                        <?php
                                        // $q=$db->query("SELECT * FROM registration WHERE bgroup='A-'");
                                        $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='A-'";
                                        $result = mysqli_query($con, $q);
                                        $row = mysqli_fetch_row($result);
                                        echo $row[2] . " units";
                                        ?>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>B-</center>
                                </td>
                                <td>
                                    <center>
                                        <?php
                                        // $q=$db->query("SELECT * FROM registration WHERE bgroup='B+'");
                                        $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='B-'";
                                        $result = mysqli_query($con, $q);
                                        $row = mysqli_fetch_row($result);
                                        echo $row[2] . " units";
                                        ?>
                                    </center>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <center>AB-</center>
                                </td>
                                <td>
                                    <center><?php
                                            // $q=$db->query("SELECT * FROM registration WHERE bgroup='AB-'");
                                            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='AB-'";
                                            $result = mysqli_query($con, $q);
                                            $row = mysqli_fetch_row($result);
                                            echo $row[2] . " units";
                                            ?></center>
                                </td>
                            </tr>

                        </table>
                        <?php
                        $con->close();
                        ?>
                    </div>
                </center>
            </div>
            <!-- <div id="footer"><h4 align="center">Copyright@bloodbank</h4>
            <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
        </div> -->
            <div id="footer">
                <button type="button" class="btn btn-info" id="logout"><a href="uslogout.php">Log out</a></button>
            </div>

        </div>
    </div>
</body>

<style>
    body {
        background: url(img/bloodtest.jpg) no-repeat center center fixed;
        background-size: cover;
        opacity: 0.8;
    }
</style>

</html>