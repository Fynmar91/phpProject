<?php

$servername = "127.0.0.1";
$dbUsername = "root";
$sbPassword = "secret";
$dbName = "loginsystem";

$conn = mysqli_connect($servername, $dbUsername, $sbPassword, $dbName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}