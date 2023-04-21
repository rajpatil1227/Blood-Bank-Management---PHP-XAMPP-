<?php

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="new.css">
    <title>Home</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-success" style="background-color: white;">
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

    <div class="row">
        <div class="container-fluid">
            <div id="heading">
                <h3 class='learnAbout'>LEARN ABOUT DONATION</h3>
            </div>
            <div class="donation-facts">
                <p>After donating blood, the body works to replenish the blood loss. This stimulates the production of new blood cells and in turn, helps in maintaining good health.</p>
                <!-- <p>The human body contains five liters of blood, which is made of several useful components i.e. Whole blood, Platelet, and Plasma.</p> -->
                <p>Each type of component of blood has several medical uses and can be used for different medical treatments. your blood donation determines the best donation for you to make.</p>
            </div>
        </div>

        <div class="column1">
            <div class="blood_img">
                <img src="img/Save-Life-India.jpg" alt="" width="750" height="400">
            </div>
        </div>
        <div class="column2">
            <div class="Donor" style="font-size: 0.98rem;">
                <table class="table table-responsive ">
                    <tbody>
                        <tr>
                            <th colspan="3" style='color:white;background-color:red;'>Compatible Blood Type Donors</th>
                        </tr>
                        <tr>
                            <td><b>Blood Type</b></td>
                            <td><b>Donate Blood To</b></td>
                            <td><b>Receive Blood From</b></td>
                        </tr>
                        <tr>
                            <td><span style="color: #961e1b;"><b>A+</b></span></td>
                            <td>A+ AB+</td>
                            <td>A+ A- O+ O-</td>
                        </tr>
                        <tr>
                            <td><span style="color: #961e1b;"><b>O+</b></span></td>
                            <td>O+ A+ B+ AB+</td>
                            <td>O+ O-</td>
                        </tr>
                        <tr>
                            <td><span style="color: #961e1b;"><b>B+</b></span></td>
                            <td>B+ AB+</td>
                            <td>B+ B- O+ O-</td>
                        </tr>
                        <tr>
                            <td><span style="color: #961e1b;"><b>AB+</b></span></td>
                            <td>AB+</td>
                            <td>Everyone</td>
                        </tr>
                        <tr>
                            <td><span style="color: #961e1b;"><b>A-</b></span></td>
                            <td>A+ A- AB+ AB-</td>
                            <td>A- O-</td>
                        </tr>
                        <tr>
                            <td><span style="color: #961e1b;"><b>O-</b></span></td>
                            <td>Everyone</td>
                            <td>O-</td>
                        </tr>
                        <tr>
                            <td><span style="color: #961e1b;"><b>B-</b></span></td>
                            <td>B+ B- AB+ AB-</td>
                            <td>B- O-</td>
                        </tr>
                        <tr>
                            <td><span style="color: #961e1b;"><b>AB-</b></span></td>
                            <td>AB+ AB-</td>
                            <td>AB- A- B- O-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <style>
        .nav-item:hover {
            background-color: #ff4122;
        }

        .nav-link {
            color: black;
            font-weight: 600;
        }

        .nav-link:hover {
            color: black;
        }

        .blood_img {
            margin-left: 13%;
            height: 95%;
            padding-bottom: 5%;
        }

        .donation-facts {
            margin: auto;
            padding: 0 9% 0;
        }

        .column1 {
            width: 55%;
            margin-top: 2px;
        }

        .container-fluid {
            background-color: #e3e3e3;
        }

        .column2 {
            width: 45%;
            margin: 2px auto;
            padding-left: 8%;
        }

        .Donor {
            margin: auto;
        }

        #heading {
            text-align: center;
            margin: 1% auto auto auto;
            color: darkred;
        }
    </style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>