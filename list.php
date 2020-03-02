<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$result_array = array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM test ORDER by id DESC";
$result = $conn->query($sql);
/* If there are results from database push to result array */
if ($result->num_rows > 0) {
     $i=0;
    foreach($result as $row ) {
       
        foreach($row as $value){
        $result_array[$i][]= $value;
        }
       $i++;
    }
}
header('Content-type: application/json');
echo json_encode($result_array);


$conn->close();
?>