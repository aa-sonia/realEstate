<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "realestate";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>


<html>
<head><title>Update Agent Information</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>


td
{
    background-color:transparent;
	font-size: 20px;
	padding-left:20px;
}

</style>
</head>
<nav class=" bg-info color sticky-top navbar-expand-lg">
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
<body style="background-color:rgba(135, 206, 235, 0.76); text-align:center; background-attachment:fixed; background-position:center; background-size:cover;">


    <div style=" background-color:rgba(243,206,110,0.23);   margin-left:120px; margin-top:30px; margin-right:100px;border:solid 1px white;height:auto;width:1100px;">

        <h1 style="color:white;">Update Records</h1>
			<form  method="post" action="">

				<table style="margin-left:50px; margin-right:50px; margin-top:-5px;">
					<tr>
						<td width="40%">
							<span style="font-size: 23px;color:white;">Enter Your Agent ID</span>
						</td>

						<td width="5%"><b>:</b></td>

						<td width="40%">
							<input name="id" style="width:250px;" type="text">
						</td>

						<td>
							<input name="display_btn" value="SUBMIT"  type="submit" style="height:35px; width:120px; background:transparent;border:solid 2px white; color:white; font-family:bold; font-size:17px; ">
						</td>
					</tr>

				</table>

        </form>

        <?php

    if(isset($_POST['display_btn']))
{

    $ID = $_POST['id'];
	$query=$conn->query("SELECT * FROM Agent_R3 WHERE Agent_ID=$ID");

	echo "<center>";
	echo "<table border=solid 1 white width=auto height=200px >";
	echo "<tr><th width=20%>Email</th><th width=20%>Phone Number</th><th width=20%>Office Location</th><th>Update </th></tr>";
    if($query && $query->num_rows>0){
        while($row = $query->fetch_assoc()){
            echo "<tr><form method=post action=>";
            echo "<tr><td> <input type='text' name='email' value='" . $row['Email']."'</td>";
		    echo "<td> <input type='text' name='phone' value='" . $row['Phone_no']."'</td>";
		    echo "<td>  <input type='text' name='office' value='" . $row['Office_loc']."'</td>";
            echo "<input type='hidden' name='id' value='" . $row['Agent_ID']."'>";
            echo "<td>  <input type='submit' name='update' value='UPDATE' style='height:35px; width:120px; background:transparent;border:solid 2px white; color:white; font-size:17px;'>" ;
            echo "</form>";

            echo "</tr>";
        }
    }
	echo "</table>";
    echo "</center>";
	}
        ?>


		</div>


   <?php
    if(isset($_POST['update'])){



    $ID = $_POST['id'];
    $Email=$_POST['email'];
    $Phone=$_POST['phone'];
    $Office=$_POST['office'];
    $query= "UPDATE Agent_R3 SET Email='$Email', Phone_no='$Phone', Office_loc='$Office' WHERE Agent_ID='$ID'";
    if(mysqli_query($conn,$query)){

        header("Location:agent.php");


    }
    else{
        echo "Not Updated";
    }
}


    ?>



</body>
</html>
