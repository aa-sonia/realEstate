<?php
$servername = "localhost";
$username = "root"; 
$password = "root"; 
$database = "realestate";
// Getting values
$UserID=$_POST['UserID'];
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
else {
 echo "Connection Succesful! <br>";
}
$query = "DELETE FROM seller WHERE User_ID ='$UserID'";
if ($conn->query($query) === TRUE) {
 echo "Your listing has been deleted and you are no longer a registered seller
 on our website. ";
} else {
 echo "Error: ". $query . "<br>" . $conn->error;
}
$conn->close();
?> 
	
