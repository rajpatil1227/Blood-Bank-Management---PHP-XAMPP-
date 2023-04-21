<?php
include('connect.php');
// session_start();

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
    <title>Receiver List</title>
</head>

<body>

    <div id="full">
        <div id="inner_full">
            <div id="header">
                <h2><a href="home.php" style="text-decoration:none;">Blood Bank Portal</a></h2>

            </div>
            <div id="body">
                <br>
                <?php
                // $un = $_SESSION['un'];
                // if(!$un)
                // {
                //     header("Location:index.php");
                // }
                // 
                ?>

                <style>
                    h1 {
                        color: aqua;
                    }
                </style>
                <h1>Receiver List </h1>
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
                                            <font color="black">Surname</font>
                                        </b></center>
                                </td>
                                <td>
                                    <center><b>
                                            <font color="black">Address</font>
                                        </b></center>
                                </td>
                                <td>
                                    <center><b>
                                            <font color="black">City</font>
                                        </b></center>
                                </td>
                                <td>
                                    <center><b>
                                            <font color="black">Age</font>
                                        </b></center>
                                </td>
                                <td>
                                    <center><b>
                                            <font color="black">Blood Group</font>
                                        </b></center>
                                </td>
                                <td>
                                    <center><b>
                                            <font color="black">Quantity</font>
                                        </b></center>
                                </td>
                                <td>
                                    <center><b>
                                            <font color="black">Mobile No</font>
                                        </b></center>
                                </td>
                                <td>
                                    <center><b>
                                            <font color="black">E-Mail</font>
                                        </b></center>
                                </td>
                            </tr>
                            <?php
                            $q = "SELECT * FROM `bbp`.`receiver_reg`";

                            $num = mysqli_num_rows($con->query($q));
                            // echo $num;
                            // echo " Records found in database ";
                            $result = mysqli_query($con, $q);
                            if ($num > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td>
                                            <center><?= $row['name']; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row['lname']; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row['address']; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row['city']; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row['age']; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row['bgroup']; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row['quantity'] . " units"; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row['mno']; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $row['email']; ?></center>
                                        </td>

                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </table>


                    </div>
                </center>
            </div>
            <!-- <div id="footer">
                <h4 align="center">Copyright@bloodbank</h4>
                <p align="center"><a href="logout.php">
                        <font color="white">Logout</font>
                    </a></p>
            </div> -->

            <div id="footer">
                <button type="button" class="btn btn-info" id="logout"><a href="adlogout.php">Log out</a></button>
            </div>
        </div>
    </div>

</body>
<style>
    body {
        background: url(img/blood-hand.jpg) no-repeat center center fixed;
        background-size: cover;
        opacity: 0.8;
    }
</style>

</html>