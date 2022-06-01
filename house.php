
<?php
include 'connect.php';
 $conn = OpenCon();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 500px;
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
<body>

<h2> <center>Houses for sale </center></h2>


<div class="row">
 <div class='column'>
     <img src="image/1.jpg" height="200px" width="400px">
       <?php
      $query="select * from PostedListing";
	  $res=mysqli_query($conn,$query);
      $rec=mysqli_fetch_array($res);
    echo "<center><h2> Price " . $rec[3]. "</h2> </center>";
    echo "<center><h2> Address " . $rec[7]. "</h2> </center>";




    ?>

    </div>
  <div class="column">


		<img src="image/1.jpg" height="200px" width="400px">

  </div>
  <div class="column" >
      <img src="image/1.jpg" height="200px" width="400px">

  </div>
</div>

</body>
</html>
