<?php

$severname = "localhost";
$username = "password";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_errno) {
    die("Connection Failed". $conn->connect_errno);
}