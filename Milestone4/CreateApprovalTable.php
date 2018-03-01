<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "HELLDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE Approval (
userid INT(6) NOT NULL, 
softwareid INT(6) NOT NULL,
location VARCHAR(50),
FOREIGN KEY (userid) REFERENCES Login(id),
FOREIGN KEY (softwareid) REFERENCES Software(id),
PRIMARY KEY(userid, softwareid, location)

)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>