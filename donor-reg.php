<?php
// include('connect.php');
// session_start();
$servername = "localhost:3307";
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Donor</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-success" style="background-color: #e3e3e3;">
        <a class="navbar-brand" href="#" style="margin-left: 3%;">Blood Bank Portal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 15%; padding:0%">
            <ul class="navbar-nav" style="margin-left:35%;">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin-login.php">Admin Login</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        User Section
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="user-login.php">User Login</a>
                        <a class="dropdown-item" href="user-signup.php">User Registration</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adlogout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="registration">
        <div class="container-lg">
            <div class="title">Donor Registration</div>
            <form action="" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="name" placeholder="First Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Mobile Number</span>
                        <input type="text" name="mno" placeholder="Enter Mobile No" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Age</span>
                        <input type="text" name="age" placeholder="Enter Age" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Blood Group</span>
                        <select name="bgroup" class="bgroup">
                            <option>O+</option>
                            <option>AB+</option>
                            <option>A+</option>
                            <option>B+</option>
                            <option>O-</option>
                            <option>AB-</option>
                            <option>A-</option>
                            <option>B-</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" name="address" placeholder="Address" required>
                    </div>
                    <div class="input-box">
                        <span class="details">City</span>
                        <input type="text" name="city" placeholder="City" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="sub" value="Register">
                </div>
            </form>
        </div>
    </div>


    <?php
    $op = 0;
    $ap = 0;
    $bp = 0;
    $abp = 0;
    $on = 0;
    $an = 0;
    $bn = 0;
    $abn = 0;
    if (isset($_POST['sub'])) {
        $name = $_POST['name'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $age = $_POST['age'];
        $bgroup = $_POST['bgroup'];
        $mno = $_POST['mno'];
        $email = $_POST['email'];

        $sql = "INSERT INTO `bbp`.`donor_reg` (`name`, `lname`, `email`, `mno`, `age`, `bgroup`, `quantity`, `address`, `city`) VALUES ('$name', '$lname', '$email', '$mno', '$age', '$bgroup', '1', '$address', '$city')";
        if ($bgroup == 'O+') {
            $op++;
            $sql1 = "UPDATE `bbp`.`stock_list` SET `quantity`='$op' WHERE `bgroup`='$bgroup'";
            $con->query($sql1);
        } else if ($bgroup == 'A+') {
            $ap++;
            $sql2 = "UPDATE `bbp`.`stock_list` SET `quantity`='$ap' WHERE `bgroup`='$bgroup'";
            $con->query($sql2);
        } else if ($bgroup == 'B+') {
            $bp++;
            $sql3 = "UPDATE `bbp`.`stock_list` SET `quantity`='$bp' WHERE `bgroup`='$bgroup'";
            $con->query($sql3);
        } else if ($bgroup == 'AB+') {
            $abp++;
            $sql4 = "UPDATE `bbp`.`stock_list` SET `quantity`='$abp' WHERE `bgroup`='$bgroup'";
            $con->query($sql4);
        } else if ($bgroup == 'O-') {
            $on++;
            $sql5 = "UPDATE `bbp`.`stock_list` SET `quantity`='$on' WHERE `bgroup`='$bgroup'";
            $con->query($sql5);
        } else if ($bgroup == 'A-') {
            $an++;
            $sql6 = "UPDATE `bbp`.`stock_list` SET `quantity`='$an' WHERE `bgroup`='$bgroup'";
            $con->query($sql6);
        } else if ($bgroup == 'B-') {
            $bn++;
            $sql7 = "UPDATE `bbp`.`stock_list` SET `quantity`='$bn' WHERE `bgroup`='$bgroup'";
            $con->query($sql7);
        } else if ($bgroup == 'AB-') {
            $abn++;
            $sql8 = "UPDATE `bbp`.`stock_list` SET `quantity`='$abn' WHERE `bgroup`='$bgroup'";
            $con->query($sql8);
        }


        if ($con->query($sql) == true) {
            echo "<script>alert('Blood Donation Successful')</script>";
        } else {
            echo "<script>alert('Donor Registration Failed')</script>";
        }
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
<style>
    body {
        background: url(img/blood-hand.jpg) no-repeat center center fixed;
        background-size: cover;
        opacity: 0.9;
    }
</style>

</html>