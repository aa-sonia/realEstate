<!DOCTYPE html>
<!-- Code based on tutorial from: https://www.semicolonworld.com/tutorial/price-range-slider-jquery-ajax-php-mysql Mostly a reminder on how Ajax and Jquery could display the page dynamically without having to load a new page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/9de7f781e5.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
	<title>Real Estate Listings: Group 14</title>
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
<body>
	<div class="container">
		<div class ="form-group">
		<form>
		<div class="filter-panel containter">

			<div class="form-row pt-3">
			<!--PRICE INPUT -->

				<div class="col">
			<input type="text" class="min_price form-control" placeholder="Min price"/>
				</div>
				<div class="col">
			<input type="text" class="max_price form-control" placeholder="Max price"/>
				</div>
		</div>
			<!--CITY INPUT -->
		<div class="form-row fluid-container">
		<div class="col-sm m-1 form-check form-check-inline p-0">
			<input type="checkbox" class="city1 form-check-input m-0" id="city1" name="Vancouver" value="Vancouver">
			<label for="city1" class="form-check-label pr-1"> Vancouver</label><br>

			<input type="checkbox" class="city2 form-check-input m-0" id="city2" name="Burnaby" value="Burnaby">
			<label for="city2" class="form-check-label pr-1"> Burnaby</label><br>

			<input type="checkbox" class="city3 form-check-input m-0" id="city3" name="New Westminster" value="New Westminster">
			<label for="city3" class="form-check-label pr-1"> New Westminster</label>

			<input type="checkbox" class="city4 form-check-input m-0 " id="city4" name="Richmond" value="Richmond">
			<label for="city4" class="form-check-label pr-1"> Richmond</label><br>

			<input type="checkbox" class="city5 form-check-input m-0 " id="city5" name="Langley" value="Langley">
			<label for="city5" class="form-check-label pr-1"> Langley</label><br>
			<input type="checkbox" class="city6 form-check-input m-0" id="city6" name="Surrey" value="Surrey">
			<label for="city6" class="form-check-label pr-1"> Surrey</label><br>

			<input type="checkbox" class="city7 form-check-input m-0" id="city7" name="Coquitlam" value="Coquitlam">
			<label for="city7" class="form-check-label pr-1"> Coquitlam</label><br>
			<input type="checkbox" class="city8 form-check-input m-0" id="city8" name="Delta" value="Delta">
			<label for="city8" class="form-check-label pr-1"> Delta</label><br>
		</div>
	</div>
<div class= "form-row">
			<!-- <label for="bedrooms" class= "visuallyhidden" >How many bedrooms?</label> -->
			<select name= "bedrooms" id="bedrooms" class="bedrooms form-control col-sm-4" aria-label="Select Number of Bedrooms">
				<option value="0">How Many Bedrooms?</option>
				<option value="1">1 Bedroom</option>
				<option value="2">2 Bedrooms</option>
				<option value="3">3 Bedrooms</option>
				<option value="4">4 Bedrooms</option>
				<option value="5">5 Bedrooms</option>
				<option value="6">6+ Bedrooms</option>
			</select>
			<br>
			<select name= "bathrooms" id="bathrooms" class="bathrooms form-control col-sm-4 aria-label="Select Number of Bedrooms"">
				<option value="0">How Many Bathrooms?</option>
				<option value="1">1 Bathroom</option>
				<option value="2">2 Bathrooms</option>
				<option value="3">3 Bathrooms</option>
				<option value="4">4 Bathrooms</option>
				<option value="5">5 Bathrooms</option>
				<option value="6">6+ Bathrooms</option>
			</select>
			<br>
			<input type="button" class="btn btn-outline-white btn-md col-sm ml-4" onclick="filterBy()" value="SEARCH"/>
		</div>
			<!--SEARCH ACTION -->
		</div>
	</form>
</div>
		<script>
			function filterBy() {
				//Populate an array with items that have been checked
				var cityPop = [];
				if(document.getElementById("city1").checked){
					cityPop.push($('.city1').val());
				};
				if(document.getElementById("city2").checked){
					cityPop.push($('.city2').val());
				};
				if(document.getElementById("city3").checked){
					cityPop.push($('.city3').val());
				};
				if(document.getElementById("city4").checked){
					cityPop.push($('.city4').val());
				};
				if(document.getElementById("city5").checked){
					cityPop.push($('.city5').val());
				};
				if(document.getElementById("city6").checked){
					cityPop.push($('.city6').val());
				};
				if(document.getElementById("city7").checked){
					cityPop.push($('.city7').val());
				};
				if(document.getElementById("city8").checked){
					cityPop.push($('.city8').val());
				};
				//console.log(cityPop);

				//get bed and bath input from user
				if( ($('.bedrooms').val()) == 0){
					bedrooms = "";
				}else{
					var bedrooms =  $('.bedrooms').val();
				}
				//console.log(bedrooms);

				if( ($('.bathrooms').val()) == 0){
					bathrooms = "";
				}else{
				var bathrooms =  $('.bathrooms').val();
			}
				//console.log(bathrooms);

				//create JSON objects that can pass through the ajax request
				var cityList = {
						cities: cityPop,
				};

				var price_range = {
					min_price: $('.min_price').val(),
					max_price: $('.max_price').val()
				}

				var combinedData = {
					objCityList: cityList,
					objPrice_range: price_range,
					objBedrooms: bedrooms,
					objBathrooms: bathrooms
				}

				//stringify the Combined Data object to pass through ajax call
				var newCombinedData = JSON.stringify(combinedData);
				//console.log(newCombinedData);
				$.ajax({
					type: 'POST',
					url: 'getHousesFinal.php',
					data: 'combinedData=' + newCombinedData,
					beforeSend: function() {
						$('.container').css("opacity", ".5");
					},
					error: function (err) {
            	console.log(err);
      			},
					success: function(html) {
						$('#productContainer').html(html);
						$('.container').css("opacity", "");
					}
				});
			}


		</script>
		<div id="productContainer" >
			<?php
        //connect to the database
		  include 'connect.php';
	  		$conn = OpenCon();

		// Query to select all our houses on in the database and display the first 10
		  $query = $conn->query("SELECT * FROM completelisting");
		  if ($query->num_rows > 0) {
			  $rowcount = 0;
			echo "<div class='row'>";

			while(($row = $query->fetch_assoc()) && ($rowcount < 10)) {
				if($rowcount%2 == 0){
						echo "<div class='row'>";
						//echo $rowcount;
				}
			   $img = $row["Thumbnail"];
			   echo "

				<div class='col-sm'>
					<div class='card'>
					<form action='showHouse.php' method='post'>
						<button name='displayHouse' class='btn btn-info' value='".$row["List_ID"]."'type='submit'><img class='card-img-top' style='max-height: 600px' src='$img' alt='Card image cap'></button>
						<div class='card-body'>
							<h5 class='card-title'> \$" . $row["Price"]. "</h5>
							<div class='container'>
								<div class='row'>
									<div class='col'>
										<i class='fas fa-bed'></i>
										<p'card-text'>"." ". $row["Beds"]. "
											<p>
									</div>
									<div class='col'>
										<i class='fas fa-bath'></i>
										<p'card-text'>"." ". $row["Baths"]. "
											<p>
									</div>
									<div class='col'>
										<i class='fas fa-ruler-combined'></i>"." ". $row["H_size"]. " sqft"."
										<p>
									</div>
								</div>
								<p class='card-text'>"." " . $row["House_no"]." ". $row["Address"].  ", ".$row["City"]."</p>
							</div>
							</form>
						</div>
					</div>
				</div>";
			  $rowcount++;
			  if($rowcount%2 == 0){
  					echo "</div>";
					//echo $rowcount;
  			}
			}
			 }else{
				 echo 'House(s) not found';
			 }
			 echo "</div>";?>
		</div>

	</div>

</body>
<footer>

<?php
//Projection Query to find a distinct city among our agents .
$query = $conn->query("SELECT DISTINCT City FROM agent_r3");
   if($query->num_rows > 0){
		echo "<div class = 'container'>
		<h2>Check Out Our Top Agents! </h2>
		<div class='row'>
				";
  			while($row = $query->fetch_assoc()){
  				$city = $row["City"];
  				$whereCitySQL = "City='" .$city."'";
				// Query to then display the top agent in that city
  				$query2 = $conn->query("SELECT * FROM agentview2 WHERE $whereCitySQL");
  				if($query2->num_rows > 0){
  					$rowcount = 0;
  					while(($row2 = $query2->fetch_assoc()) && ($rowcount < 1)){
								echo	"<div class='col w-20'>".$row2["A_Name"].":
								<img class='img-fluid' src='image/".$row2["A_img"]."'></img>". $city."</div>";
  						$rowcount = 1;
  					}
				}
			}
			echo "</div></div>";
		} ?>
</footer>
