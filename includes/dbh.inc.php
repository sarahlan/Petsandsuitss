<?php

$servername = "localhost:3306";
$dBUsername = "mahs_petsandsuitss";
$dBPassword = "mustangs";
$dBName = "mahs_petsandsuitss";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("connection failed: ".mysqli_connect_error());
}
?>