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
if(isset($_POST['car'])){
    $car =$_POST['car'];
$sql = "UPDATE test SET car='$car' WHERE id='$id'";
}
if(isset($_POST['make'])){
    $make =$_POST['make'];
$sql = "UPDATE test SET make='$make' WHERE id='$id'";
}
if(isset($_POST['avail'])){
    $avail =$_POST['avail'];
$sql = "UPDATE test SET available='$avail' WHERE id='$id'";
}

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>