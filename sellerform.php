

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "realestate";
// Getting
$UID=$_POST['UserID'];
$Name=$_POST['Name'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$PostalCode=$_POST['PostalCode'];
$DOB=$_POST['DOB'];
$EMail=$_POST['email'];
$MaxSellingPeriod=$_POST['MaxSellingPeriod'];
$AskingPrice=$_POST['AskingPrice'];
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
else {
 echo "";
}?>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <title>Seller Form </title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="buySell.css">
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
 <div class="buy">
 <h2> Sell </h2>
 </div>
<p></p>
<?php
$query = "INSERT INTO user_r1 VALUES('$PostalCode','$City')";
if ($conn->query($query) === TRUE) {
 echo "";
} else {
 echo "<b><font size=“20” face='Times New roman'>Trouble registering you to the USER database, press back button on
 your browser window and make changes.</b> " ;
 echo "</br>Reason: ". $conn->error;
 echo "</br>";
}
$query = "INSERT INTO user_r2 VALUES('$UID','$Name','$EMail','$DOB','$Address','$PostalCode')";
if ($conn->query($query) === TRUE) {
 echo "";
} else {
echo "</br>";
echo "<b>Trouble registering you to the USER database, press back button on
 your browser window and make changes.</b>" ;
 echo "</br>Reason: ". $conn->error;
 echo "</br>";
}
$query = "INSERT INTO user_r3 VALUES('$Address','$City','$PostalCode')";
if ($conn->query($query) === TRUE) {
 echo "";
} else {
	echo "</br>";
echo "<b>Trouble registering you to the USER database, press back button on
 your browser window and make changes.</b>";
 echo "</br>Reason: ". $conn->error;
 echo "</br>";
}
$query = "INSERT INTO seller VALUES('$UID','$MaxSellingPeriod','$AskingPrice')";
if ($conn->query($query) === TRUE) {
	echo "</br>";
 echo "<b>Thankyou </b>" .$Name. " <b>for registering , your data has been submitted</b>" ;
 echo "</br>";
} else {
	echo "</br>";
echo "<b>Trouble registering you to the SELLER database, press back button on
 your browser window and make changes. </b>";
 echo "</br>Reason: ". $conn->error;
 echo "</br>";
}
$conn->close();
?>
</body>
</html>
