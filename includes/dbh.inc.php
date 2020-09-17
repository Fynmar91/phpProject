<?php

$servername = "localhost";
$dbUsername = "root";
$sbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($servername, $dbUsername, $sbPassword, $dbName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}