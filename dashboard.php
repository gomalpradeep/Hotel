
<?php include 'menuh.php';?>
<?php 

include 'database.php';
 $hi=$_SESSION['id'];
 $sql="SELECT * FROM `hotels` WHERE `hotel_id`='$hi'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
 $sql2="SELECT  `guests`, `price`, `discount`, `total_rooms`,`category`, `category_name` FROM `hotel_room` WHERE `hotel_id`='$hi'";
$result2=mysql_query($sql2);
 $c= mysql_num_rows($result2);
$row2=mysql_fetch_array($result2);


?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
	  <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
 <script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<script src="js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 10px;
    }
</style>
<script src="js/jquery.accordion.js"></script>
<script src="js/modernizr.custom.js"></script>
<link rel="stylesheet" href="css/dashboard.css">

<div >
<div class="container">
<div id="menu2">
			<ul class="nav nav-tabs nav-justified" id="nav nav-tabs nav-justified">
   <li class="active"><a href="dashboard.php">My Hotel</a></li>
   <li><a href="hoteldetails.php">Hotel Details</a></li>
   <li><a href="facilites.php">Facilites</a></li>
   <li><a href="room.php">Rooms</a></li>
   <li><a href="hotelimage.php">Image</a></li>
   <li><a href="#">PHP</a></li>
</ul>
		</div>	
<div class="inner-container">

	 <div class="page-header">
   <h1><?php echo $row['Name']?> <span class="glyphicon glyphicon-earphone"></span><?php echo $row['contact']?>
    
   </h1>  <small><?php echo $row['Address']?>,<?php echo $row['location']?></small>
</div>
<div class="row">
<div class="panel panel-default">
  <!-- Default panel contents -->

  

  <!-- Table -->
  <table class="table">
   <thead>
<tr>
<th>Room Type</th>
<th>Guests</th>
<th>Price</th>
<th>Total Rooms</th>
<th>Book Now</th>
</tr>
</thead>
 <tbody>
<?php $i=0; while($i<$c){ ?>
<tr>
<td> <b><?php  echo  $f2=mysql_result($result2,$i,"category_name");?>
  </b></td>
<td><?php  echo  $f2=mysql_result($result2,$i,"guests");?></td>
<td>RS. <b><?php  echo $f3=mysql_result($result2,$i,"price");?> </b> Per Night   </td>

<td><?php  echo $f4=mysql_result($result2,$i,"total_rooms");?> </td>
<td><button class="btn btn-small btn-primary" type="button">Book Now</button></td>
</tr>
<?php $i++; } ?>
</tbody>

  </table>
</div>


</div>
<div class="row">

<div id="myCarousel" class="carousel slide">
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
</ol>
<!-- Carousel items -->
<div class="carousel-inner">
<div class="active item"> <img src="upload/room/1.jpg" alt="" width="1000" height="400"></div>
<div class="item"><img src="upload/room/2.jpg" alt="" width="1000" height="400" ></div>
<div class="item"><img src="upload/room/3.jpg" alt="" width="1000" height="400"></div>
</div>
<!-- Carousel nav -->
<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

	</div>
	</div>
<div class="row">
<div class="bs-example">
    <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><b>Overview</b></a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        <h6><?php echo $row['overview'];?></h6>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Facilities</a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <p>Twitter Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Hotel Policy</a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <p><?php echo $row['Hotel_Policy'];?></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>

 </div> </div> </div> 
		
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/cbpHorizontalMenu.min.js"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>
		<script>
		    $('#accordion2').on('hidden', function () {$("#collapseOne").show();
// do something…
});
		</script>
</div>
<style>.inner-container{
 margin: 75px 30px 85px;

}</style>
<?php include 'footer.php';?>
