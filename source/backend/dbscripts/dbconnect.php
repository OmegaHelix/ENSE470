<?php 
$conn = new mysqli("localhost","root","", "ENSE470");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>