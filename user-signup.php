<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
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
                    <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Admin Login</a>
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
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="registration">
        <div class="container-lg">
            <div class="title">Blood Collection</div>
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
    if (isset($_POST['sub'])) {
        $name = $_POST['name'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mno = $_POST['mno'];
        $age = $_POST['age'];
        $bgroup = $_POST['bgroup'];
        $address = $_POST['address'];
        $city = $_POST['city'];

        $sql = "INSERT INTO `bbp`.`receiver_reg` (`name`, `lname`, `email`, `mno`, `age`, `bgroup`,`quantity`,`address`, `city` ) VALUES ('$name', '$lname', '$email', '$mno', '$age', '$bgroup', '0', '$address', '$city');";

        // $result = mysqli_query($con, $sql);
        if ($conn->query($sql)) {
            echo "<script>alert('User Registration Successful')</script>";
        } else {
            echo "<script>alert('User Registration Failed')</script>";
        }
    }
    ?>

</body>
<style>
    body {
        background: url(img/blood-hand.jpg) no-repeat center center fixed;
        background-size: cover;
        opacity: 0.8;
    }
</style>

</html>