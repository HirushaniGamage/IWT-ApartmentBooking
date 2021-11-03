<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$db = "Online Apartment";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE register SET Username ='Chiristiana' WHERE User_id=1";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("Location:Homepage.html");
} 
else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
