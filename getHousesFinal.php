
<!--Code that is Called on Ajax request from index.php-->
<?php
if(isset($_POST['combinedData'])){
    //Databse connection
	 include 'connect.php';
	 $conn = OpenCon();
	 //intialize key variables
    $whereSQL = $orderSQL = '';
    $combinedData= $_POST['combinedData'];
	 $CombinedDataObj = json_decode($combinedData);
	 $bedAnd = "";

	 //PRICE CONDITIONAL allows user to fitler by the price and sets a default if they dont
    if(!empty($CombinedDataObj)){
		 if($CombinedDataObj->objPrice_range->min_price != 0){
			 $wherePriceSQL = "WHERE price > ".$CombinedDataObj->objPrice_range->min_price." AND";
		 }
		 if($CombinedDataObj->objPrice_range->max_price != 0){
			 $wherePriceSQL = "WHERE price < ".$CombinedDataObj->objPrice_range->max_price." AND";
		 }
		 if($CombinedDataObj->objPrice_range->min_price == 0 && $CombinedDataObj->objPrice_range->max_price == 0){
			 $wherePriceSQL = "WHERE price > 0 AND";
		 }

		if($CombinedDataObj->objPrice_range->min_price != 0 && $CombinedDataObj->objPrice_range->max_price != 0){
			  	//echo "CD at 0: " .$CombinedDataObj->objPrice_range->min_price. "<br>";
	 			//echo "CD at 1 " .$CombinedDataObj->objPrice_range->max_price. "<br>";

		  		$wherePriceSQL = "WHERE Price BETWEEN '".$CombinedDataObj->objPrice_range->min_price."' AND '".$CombinedDataObj->objPrice_range->max_price."'AND";
	  		}
		$whereCitySQL = " ";
		//CITY CONDITIONAL allows user to fitler by the city and sets a default if they dont, cities are in check boxes so they all apply if checked
		if(!empty($CombinedDataObj->objCityList->cities)){

			$whereCitySQL = "";
			$citiesObj = $CombinedDataObj->objCityList->cities;
			//echo count($citiesObj);

			if(count($citiesObj)==1){
				$whereCitySQL = $whereCitySQL . "AND (City= '".$citiesObj[0]."')";
				//echo "$whereCitySQL";
			}else{
				$whereCitySQL = "AND (City= '".$citiesObj[0]."'";
				for($i = 1; $i < count($citiesObj); $i++){

					$whereCitySQL = $whereCitySQL . " OR City= '".$citiesObj[$i]."'";
				}
				$whereCitySQL = $whereCitySQL .")";
			}
			//echo "$whereCitySQL";
		}else{
			//echo "else";
			$whereCitySQL = "";
			//echo "$whereCitySQL";
		}
	}

//BATHS CONDITIONAL allows user to fitler by the number of baths and sets a default if they dont
	$baths = $CombinedDataObj->objBathrooms;
	$whereBathsSQL = " ";

	if(!empty($baths)){
		$whereBathsSQL = "AND Baths='" .$baths."'";
		if($baths =="6"){
			echo "";
			$whereBathsSQL = "AND Baths >='" .$baths."'";
		}
	}else{$whereBathsSQL = "AND Baths > '0'";}

	//BEDS CONDITIONAL allows user to fitler by the number of beds and sets a default if they dont
	$beds = $CombinedDataObj->objBedrooms;
	$whereBedsSQL = " ";
	if(!empty($beds)){
		$whereBedSQL = "Beds='" .$beds."'";
		if($beds =="6"){
			$whereBedSQL = "Beds >='" .$beds."'";
		}
	}else{$whereBedSQL = "Beds > '0'";
	}

	if(!empty($CombinedDataObj->objCityList->cities)){

		$cityAverageSQL = "";
		$citiesObj = $CombinedDataObj->objCityList->cities;

		if(count($citiesObj)==1){
			$cityAverageSQL = $cityAverageSQL . "WHERE (City= '".$citiesObj[0]."')";
			//echo "$whereCitySQL";
		}else{
			$cityAverageSQL = "WHERE (City= '".$citiesObj[0]."'";
			for($i = 1; $i < count($citiesObj); $i++){

				$cityAverageSQL = $cityAverageSQL . " AND City= '".$citiesObj[$i]."'";
			}
			$cityAverageSQL = $cityAverageSQL .")";
		}
	}else{
		$cityAverageSQL = "";
	}
	echo "<div class='fluid-container'><h4>Buyer's Guide:</h4><p class='mb-0'>Know the average listing price in each city:</p><div class='row'>";


	//Nested Agregation grouped by city to show the average price of listings in our database

	$query = $conn->query("SELECT AVG(Price), City FROM completelisting
	GROUP BY City
	ORDER BY AVG(City) DESC;");

	if ($query->num_rows > 0) {

	while($row = $query->fetch_assoc()) {

	   echo "<div class='col-sm pb-2' >". $row["City"].": \$". round($row["AVG(Price)"],2). " </div>";
		 //echo $row["AVG(Price)"];
	}

	}
 echo"</div>";

		//Agregation to show the number of listings that meet the search criteria
		$sql = "SELECT COUNT(*) FROM completelisting $wherePriceSQL $whereBedSQL $whereBathsSQL $whereCitySQL";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
	       echo "".$row["COUNT(*)"]." house(s) available that meet your search critera"."<br>";
	}
	}else {
	    echo "0 houses available that meet your critera, try widening your search!";
	}

	//Render search results from user inputs
	//echo "completelisting $wherePriceSQL $whereBedSQL $whereBathsSQL $whereCitySQL  $orderSQL";
	$query = $conn->query("SELECT * FROM completelisting $wherePriceSQL $whereBedSQL $whereBathsSQL $whereCitySQL $orderSQL");

	if ($query->num_rows > 0) {
  	 $rowcount = 0;

    echo "<div class='row'>";

    while($row = $query->fetch_assoc()) {
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
  					  <p class='card-text'>"." " . $row["House_no"]." ". $row["Address"]. ", ".$row["City"]."</p>
  				  </div>
  				  </form>
  			  </div>
  		  </div>
  	  </div>";
  	 $rowcount++;
  	 if($rowcount%2 == 0){
  		  echo "</div>";
	  }
   }
  	}else{
  	   //echo 'House(s) not found';
  		}
  	echo "</div>";
}
?>
