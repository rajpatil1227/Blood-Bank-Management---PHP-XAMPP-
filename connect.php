<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password);

if (!$con){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
