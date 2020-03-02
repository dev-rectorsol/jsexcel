<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id=$_POST['id'];

$sql = "INSERT INTO test( car, make, available) VALUES ('','',NULL)";


if ($conn->query($sql) === TRUE) {
    echo "Record INSERTED successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>