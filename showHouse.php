

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>


*{box-sizing: border-box;
}


.navbar {
        margin: 0;
        border-radius: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:whitesmoke;
}

li{
    float: left;
    margin:10px;
    font-size:20px;

}

li a {
  display: block;
  color:#847e7e;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}


    h1{
        font-family:Algerian;
        color:#625e60;
    }

    h2{
        font-family:Algerian;
        color:#625e60;
    }

    table{
        height:100%;
        width:100%;
    }
    th{
        padding:20px;
        color:white;
        font-size:20px;
        text-align: center;
    }

    tr:nth-child(even){
        background-color:whitesmoke;
    }
    tr:nth-child(odd){
        background-color:white;
    }

    td{
        padding:20px;
        color:black;
        font-size:20px;
        text-align: center;

    }

}



@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>

</head>
<body style="background-image:url(image/hd.png);">

	<nav class="navbar-expand-lg bg-info color sticky-top">
		<ul class="nav justify-content-center">
			<li class="nav-item">
				<a class="nav-link active" href="index.php">Search for a Home!</a>
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

<div class="container">
   <?php
  //Include database configuration file
  include 'connect.php';
   $conn = OpenCon();
   $list_ID = $_POST['displayHouse'];
   //This gets info based on which house was clicked
  $query = $conn->query("SELECT * FROM completeListing WHERE List_ID='$list_ID'");

  if($query->num_rows > 0){
          while($row = $query->fetch_assoc()){
      ?>
      <div class="container">
          <div class="column">
              <h1>
          <img src="<?php echo $row["Thumbnail"] ?>" style="height:500px; width:100%;">
              </h1>
          </div>

           <div class="column">
           <br>
          <h1 >Price : <?php echo $row["Price"]; ?></h1>

          <h1> Features </h1>
             <h2>  Bedrooms : <?php echo $row["Beds"]; ?></h2>
               <h2>  Bathrooms :  <?php echo $row["Baths"]; ?></h2>
               <h2> House Size :  <?php echo $row["H_size"]; ?></h2>
              <h1>Type :  <?php echo $row["H_type"]; ?></h1>
               <h1>Price Per Square Feet : <?php echo $row["Price_per_sqft"]; ?> </h1>

             <h1> Address : <?php echo $row["House_no"] ." ". $row["Address"]; ?> </h1>


          </div>


      </div>
   <?php }
  }else{
      echo 'House(s) not found';
  } ?>


</div>
</body>
</html>
