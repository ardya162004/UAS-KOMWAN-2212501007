<?php
$servername = "db"; 
$username = "root";
$password = "root";
$dbname = "uas_cloud_2212501007"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
