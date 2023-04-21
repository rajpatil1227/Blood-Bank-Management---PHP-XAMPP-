<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a823132034.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin Login</title>
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
            </ul>
        </div>
    </nav>

    <form action="" method="post">
        <div class="container-lg">
            <h1>Admin Login</h1>
            <div class="box">
                <i class="fa fa-envelope"></i>
                <input type="email" name="username" id="usn" placeholder="Username">
            </div>
            <div class="box">
                <i class="fa fa-key"></i>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <div class="button">
                <input type="submit" name="sub" id="button" value="Login">
            </div>
        </div>
    </form>


    <?php
    if (isset($_POST['sub'])) {
        $usn = $_POST['username'];
        $password = $_POST['password'];

        if ($usn == "admin@gmail.com" && $password == "admin123") {

            echo "<script>alert('Correct Credentials')</script>";
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $email;
            header('location:admin-home.php');
        } else {
            echo "<script>alert('Wrong Credentials')</script>";
        }
    }
    // else {
    //     echo "<script>alert('Unable to process')</script>";
    // }
    ?>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #button {
            border-radius: 8px;
            font-size: larger;
            font-weight: bold;
            width: 80px;
        }

        .button {
            margin-left: 90px;
            width: 80px;
        }

        .button :hover {
            cursor: pointer;
        }

        .link {
            color: black;
        }

        .nav-link {
            color: black;
        }

        .nav-item:hover {
            background-color: red;
            color: black;
        }

        .nav-link:hover {
            color: black;
        }

        body {
            background: url(img/blood-hand.jpg) no-repeat center center fixed;
            background-size: cover;
        }

        .container-lg {
            position: absolute;
            top: 25%;
            left: 40%;
        }

        .container-lg h1 {
            font-family: 'Heebo', sans-serif;
            width: 90%;
            display: inline-block;
            font-size: 40px;
            border-bottom: 5px solid red;
            /* margin-bottom: 15px; */
            margin: 0 auto 15px auto;

        }

        .box {
            width: 100%;
            margin: 22px 0px;
            border-bottom: 2px solid red;
        }

        .box input {
            color: black;
            background: none;
            width: 75%;
            padding: 5px 10px;
            font-size: 20px;
            border: none;
            outline: none;
        }

        .btn {
            color: black;
            cursor: pointer;
            outline: none;
            margin: 15px 70px;
            padding: 10px 21px;
            border: 2px solid red;
            border-radius: 10px;
            font-size: 18px;
            background: none;
            font-weight: bold;
        }

        .box i {
            width: 25px;
            text-align: center;
        }

        .btn:hover {
            opacity: 0.5;
            color: purple;
            background: white;

        }
    </style>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>