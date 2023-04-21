<?php
include('connect.php');
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

    <title>Admin Home</title>
</head>

<body>
    <div id="full">
        <div id="inner_full">
            <div id="header">
                <h2><a href="index.php" style="text-decoration:none; font-weight: bold; ">ADMIN HOME PAGE</a></h2>
            </div>
            <div id="body">
                <br>

                <ul>
                    <li>
                        <img src="img/b.jpg" alt="" width="150px">
                        <br>
                        <button type="button" class="btn btn-primary"><a href="donor-reg.php">New Donor</a></button>
                    </li>
                    <li>
                        <img src="img/b.jpg" alt="" width="150px">
                        <br>
                        <button type="button" class="btn btn-primary"><a href="existing-donor.php">Existing Donor</a></button>
                    </li>
                    <li>
                        <img src="img/b.jpg" alt="" width="150px">
                        <br>
                        <button type="button" class="btn btn-primary"><a href="donor-list.php">Donor List</a></button>
                    </li>

                </ul> <br><br><br><br><br><br><br>


                <ul>
                    <li>
                        <img src="img/b.jpg" alt="" width="150px">
                        <br>
                        <button type="button" class="btn btn-primary"><a href="adstock-blood.php">Stock Blood List</a></button>
                    </li>
                    <li>
                        <img src="img/b.jpg" alt="" width="150px">
                        <br>
                        <button type="button" class="btn btn-primary"><a href="receiver-admin.php">Sell Blood</a></button>
                    </li>
                    <li>
                        <img src="img/b.jpg" alt="" width="150px">
                        <br>
                        <button type="button" class="btn btn-primary"><a href="receiver-list.php">Receiver List</a></button>
                    </li>
                </ul>

            </div>
            <!-- <div id="footer"><h4 align="center">Copyright@bloodbank</h4>
            <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
        </div> -->

            <button type="button" class="btn btn-info" id="logout"><a href="adlogout.php">Log out</a></button>

        </div>

    </div>

</body>
<style>
    body {
        background: url(img/blood-hand.jpg) no-repeat center center fixed;
        background-size: cover;
        /* opacity: 0.8; */
    }
</style>

</html>