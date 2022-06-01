<?php

$servername = "localhost"; $username = "root"; $password = "root"; $dbname = "realestate";
$conn = new mysqli($servername, $username, $password, $dbname) or die("Connect failed: %s\n". $conn -> error);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>

<html>


<head>
<meta name="viewport" content="width=device-width,initial-scale=1">

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

.top{
    position: relative;
    text-align: center;
    font-size: 70px;
    font-style:bold;
    color: black;
    opacity: 0.9;
}
.centered {
    font-family:Algerian;
    color:rgb(139, 0, 240);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.images{
    border-radius: 50%;
}
.column {
  text-align: center;
  background-color:white;
  float: left;
  width: 400px;
  padding: 10px;
  height: 600px;
  margin:10px;
}

.row{
    display: inline-flex;
}

.row:after {

  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    }
}
</style>

</head>

<body style="background-image:url(image/hd.png);">
<nav>
    <ul class="nav nav-pills nav-fill">
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
        <a class="nav-link" href="agent.php">Agent</a>
      </li>
    </ul>
</nav>

    <div class ="top">
        <img src="image/first.jpg" style="height:450px; width:100%;">
        <div class ="centered">Find the perfect agent for you</div>

    </div>

<center><h2 style="font-family:Calibri ;font-size:30px;"> Most recommended Agents </h2></center>


<?php

    $query = $conn->query("SELECT * FROM Agent_R2 INNER JOIN Agent_R3 ON Agent_R2.Agent_ID=Agent_R3.Agent_ID");
    if($query && $query->num_rows>0){
        while($row = $query->fetch_assoc()){
?>
        <div class="row" >

            <div class="column" >

           <h2><?php

            echo "<br> <img class='images' src=image/" .$row["A_img"]." height='200px' width='200px' align='center'> <br>";

            ?>
               </h2>
            <h3>
                <?php

            echo "<span style='font-family:Algerian;font-size:30px;font-style:italic;'>" . $row["A_Name"] . "</span><br>";
            echo "<br> Email : " . $row["Email"] . "<br>";
            echo "<br> Office Location : " . $row["Office_loc"] . "<br>";
            echo "<br> Phone Number : " . $row["Phone_no"] . "<br>";

                ?>
            </h3>

            </div>

    </div>
    <?php
    }
}else{
        echo "Agent not found";

    }
    ?>

  <center><h3> Do you want to change your Agent information ? <a href="update.php">Click Here </a></h3></center>




</body>

</html>

<!--
 Links to images I have used in my page.
1) https://www.pinterest.ca/pin/233694668144566695/
2) https://www.pinterest.ca/sitesforagents/real-estate-agent-portraits/
3) https://agents.allstate.ca/on/toronto/27-rean-dr/dan-cormier.html
4) https://www.jobpostings.ca/jp-student-career-guides/real-estate/what-makes-successful-real-estate-agent
5) https://www.calgaryrealestate.directory/idx/commercial/
6) https://www.mltaikins.com/people/ryan-lepage/
7) https://www.royallepagesudbury.ca/find-a-realtor

Layout
https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_three_columns_responsive
-->
