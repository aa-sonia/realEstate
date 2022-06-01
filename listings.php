<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "realestate";
// Getting values
$HouseNo=$_POST['HouseNum'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$PostalCode=$_POST['PostalCode'];
$Beds=$_POST['Beds'];
$Baths=$_POST['Baths'];
$H_Type=$_POST['HouseType'];
$H_Size=$_POST['HouseSize'];
$AskingPrice=$_POST['AskingPrice'];
$ListID=$_POST['listid'];
$Cities=$_POST['NearByCities'];
$Agent=$_POST['Agent'];
$UserID=$_POST['UserID'];
$Thumbnail=$_POST['photo'];
$id=0;
$agentid=0;
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
else {
 echo "";
}

switch($Cities) {
	case "New Westminister/South Van/Richmond" :
	$id = 1;
	break;
	case "Delta/Surrey/Langley/Abbotsford" :
	$id = 2;
	break;
	case "North Van/West Van/Downtown Van" :
	$id = 3;
	break;
	case "New Westminister/Burnaby/Coquitlam" :
	$id = 4;
	break;
	case "Surrey/Langley/Abbotsford" :
	$id = 5;
	break;
}
switch($Agent){
	case "George Ion" :
	$agentid = 1;
	break;
	case "Yang Song" :
	$agentid = 2;
	break;
	case "Sumir Atwal" :
	$agentid = 3;
	break;
	case "Phyllis Zhou" :
	$agentid = 4;
	break;
	case "Rahel Staeheli" :
	$agentid = 5;
	break;
	case "Maria Telfer" :
	$agentid = 6;
	break;
	case "Joey Dawson" :
	$agentid = 7;
	break;
	case "Emily Watson" :
    $agentid = 8;
	break;
   case "George Smith" :
    $agentid = 9;
	break;
}
$Pricepersqft = $AskingPrice/$H_Size;
$ListDate=date("Y/m/d");
?>
<html>
<head>
 <title>Listing form </title>
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
 <div class="buy">
  <h2> Listing </h2>
 <p>List your house today ! </p>
 </div>
<p></p>
<?php
$query = "INSERT INTO house_r1 VALUES('$Pricepersqft','$PostalCode', '$City')";
if ($conn->query($query) === TRUE) {
 echo "";
} else {
 echo "<b><font size=“20” face='Times New roman'>Trouble registering your house to the HOUSE database, press back button on
 your browser window and make changes.</b> " ;
 echo "</br>Reason: ". $conn->error;
 echo "</br>";
}
$query = "INSERT INTO house_r2 VALUES('$HouseNo','$Address', '$Pricepersqft','$H_Type','$H_Size')";
if ($conn->query($query) === TRUE) {
 echo "";
} else {
 echo "<b><font size=“20” face='Times New roman'>Trouble registering your house to the HOUSE database, press back button on
 your browser window and make changes.</b> " ;
 echo "</br>Reason: ". $conn->error;
 echo "</br>";
}
$query = "INSERT INTO feature_r2 VALUES('$HouseNo', '$Address' , '$City','$Beds','$Baths','$id')";
if ($conn->query($query) === TRUE) {
 echo "";
} else {
 echo "<b><font size=“20” face='Times New roman'>Trouble registering your house to the FEATURES database, press back button on
 your browser window and make changes.</b> " ;
 echo "</br>Reason: ". $conn->error;
 echo "</br>";
}
$query = "INSERT INTO postedlisting VALUES('$agentid', '$ListID' , '$UserID','$AskingPrice','$ListDate','$HouseNo','$Address','$Pricepersqft','$Thumbnail')";
if ($conn->query($query) === TRUE) {
 echo "</br>";
 echo "<b>Thank you User: </b>" .$UserID. " <b>for registering , your data has been submitted</b>" ;
 echo "</br>";
} else {
 echo "<b><font size=“20” face='Times New roman'>Trouble registering your house to the LISTING database, press back button on
 your browser window and make changes.</b> " ;
 echo "</br>Reason: ". $conn->error;
 echo "</br>";
}
$conn->close();
?>
