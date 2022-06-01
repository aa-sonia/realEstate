<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "realestate";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
else {
}?>
<html>
<head>
 <title>Query</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="buySell.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </head>
<body>
   <nav class="navbar-expand-lg bg-info color sticky-top">
      <ul class="nav justify-content-center">
         <li class="nav-item">
            <a class="nav-link active text-light" href="index.php">Search for a Home!</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="buyer.html">Buy</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="seller.html">Sell</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="agent.php">Find an agent</a>
         </li>
      </ul>
   </nav>
<p></p>
<?php
$query = $conn->query("SELECT s.User_ID FROM seller s WHERE NOT EXISTS (SELECT * from house_r2 h2 WHERE EXISTS (SELECT p.User_ID FROM postedListing p WHERE s.User_ID = p.User_ID AND h2.House_no = p.House_no))");
if ($query->num_rows > 0) {
while($row = $query->fetch_assoc()) {

   echo  "Seller's ID who has not listed a house: ".$row["User_ID"]."<br>" ;
}
}
?>
