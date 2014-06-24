
<?php 
if(!session_start()){
session_start();
}
include 'database.php';
echo $hotelid=$_GET['hotelid'];
$_SESSION['hotelid']=$hotelid;

$sql= "SELECT * FROM `hotels` WHERE `hotel_id`=$hotelid";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

 
$sql1="SELECT * FROM `hotel_room` WHERE `hotel_id`=$hotelid";
$res2=mysql_query($sql1);
$row2=mysql_fetch_array($res2);

 $c= mysql_num_rows($res2);
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
	  
	  <link href="bootstrap-3.1.1-dist/css/bootstrap.css" rel="stylesheet">
	  <link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">	  
  
	  <script src="bootstrap-3.1.1-dist/js/bootstrap.js"></script>
	  <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="bootstrap-3.1.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-3.1.1-dist/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="bootstrap-3.1.1-dist/css/bootstrap-theme.css">

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
<div class="container"  >

<div class="inner-container">

	 <div class="page-header">
   <h1><?php echo $row['Name']?>  <?php echo $row['contact']?>
    
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
<th>Rooms</th>
<th>Book Now</th>
</tr>
</thead>
 <tbody>
<?php $i=0;if($c!=""){  while($i<$c){ $f1= mysql_result($res2,$i,"category_name"); $f2=mysql_result($res2,$i,"guests");
$f3=mysql_result($res2,$i,"price");$f4=mysql_result($res2,$i,"total_rooms"); $f5=mysql_result($res2,$i,"id"); ?>
<tr>
<td> <b><?php echo $f1; ?>
  </b></td>
<td><?php  echo $f2; ?></td>
<td>RS. <b><?php  echo  $f3;?> </b> Per Night   </td>

<td><?php echo $row['Amentilies'];?> </td>
<td><a href="booknow.php?roomid=<?php echo $f5;?>&nr=" target="_blank"><button class="btn btn-small btn-primary" type="button">Book Now</button></a></td>
</tr>
<?php $i++; }} ?>
</tbody>

  </table>
</div>


</div>
<div class="row"  >
<div class="col-md-8">



         <ul class="slides">
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
		<div class="slide">
			<img src="upload/room/<?php echo $hotelid;?>/1.jpeg" />
        </div>
		<div class="nav">
			<label for="img-6" class="prev">&#x2039;</label>
			<label for="img-2" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-2" />
    <li class="slide-container">
        <div class="slide">
          <img src="upload/room/<?php echo $hotelid;?>/2.jpeg" />
        </div>
		<div class="nav">
			<label for="img-1" class="prev">&#x2039;</label>
			<label for="img-3" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
          <img src="upload/room/<?php echo $hotelid;?>/3.jpeg" />
        </div>
		<div class="nav">
			<label for="img-2" class="prev">&#x2039;</label>
			<label for="img-4" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-4" />
    <li class="slide-container">
        <div class="slide">
          <img src="upload/room/<?php echo $hotelid;?>/4.jpeg" />
        </div>
		<div class="nav">
			<label for="img-3" class="prev">&#x2039;</label>
			<label for="img-5" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-5" />
    <li class="slide-container">
        <div class="slide">
          <img src="upload/room/<?php echo $hotelid;?>/6.jpeg" />
        </div>
		<div class="nav">
			<label for="img-4" class="prev">&#x2039;</label>
			<label for="img-6" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-6" />
    <li class="slide-container">
        <div class="slide">
          <img src="upload/room/<?php echo $hotelid;?>/1.jpeg" />
        </div>
		<div class="nav">
			<label for="img-5" class="prev">&#x2039;</label>
			<label for="img-1" class="next">&#x203a;</label>
		</div>
    </li>

    <li class="nav-dots">
      <label for="img-1" class="nav-dot" id="img-dot-1"></label>
      <label for="img-2" class="nav-dot" id="img-dot-2"></label>
      <label for="img-3" class="nav-dot" id="img-dot-3"></label>
      <label for="img-4" class="nav-dot" id="img-dot-4"></label>
      <label for="img-5" class="nav-dot" id="img-dot-5"></label>
      <label for="img-6" class="nav-dot" id="img-dot-6"></label>
    </li>
</ul>
  
  

	</div>
	<div class="col-xs-6 col-md-4"><div id="googleMap" style="width: 330px; height: 417px;"></div>
	</div></div>
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
		<script src="js/jquery.min.js"></script>
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
		<script>
		$('.carousel').carousel({
  interval: 3000
});
</script>
</div>
<style>@import url(http://fonts.googleapis.com/css?family=Varela+Round);


.slides {
    padding: 0;
    width: 609px;
    height: 420px;
    display: block;
    margin: 0 auto;
    position: relative;
}

.slides * {
    user-select: none;
    -ms-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    -webkit-touch-callout: none;
}

.slides input { display: none; }

.slide-container { display: block; }

.slide {
    top: 0;
    opacity: 0;
    width: 609px;
    height: 420px;
    display: block;
    position: absolute;

    transform: scale(0);

    transition: all .7s ease-in-out;
}

.slide img {
    width: 100%;
    height: 100%;
}

.nav label {
    width: 100px;
    height: 100%;
    display: none;
    position: absolute;

	  opacity: 0;
    z-index: 9;
    cursor: pointer;

    transition: opacity .2s;

    color: #FFF;
    font-size: 156pt;
    text-align: center;
    line-height: 380px;
    font-family: "Varela Round", sans-serif;
    background-color: rgba(255, 255, 255, .3);
    text-shadow: 0px 0px 15px rgb(119, 119, 119);
}

.slide:hover + .nav label { opacity: 0.5; }

.nav label:hover { opacity: 1; }

.nav .next { right: 0; }

input:checked + .slide-container  .slide {
    opacity: 1;

    transform: scale(1);

    transition: opacity 1s ease-in-out;
}

input:checked + .slide-container .nav label { display: block; }

.nav-dots {
	width: 100%;
	bottom: 9px;
	height: 11px;
	display: block;
	position: absolute;
	text-align: center;
}

.nav-dots .nav-dot {
	top: -5px;
	width: 11px;
	height: 11px;
	margin: 0 4px;
	position: relative;
	border-radius: 100%;
	display: inline-block;
	background-color: rgba(0, 0, 0, 0.6);
}

.nav-dots .nav-dot:hover {
	cursor: pointer;
	background-color: rgba(0, 0, 0, 0.8);
}

input#img-1:checked ~ .nav-dots label#img-dot-1,
input#img-2:checked ~ .nav-dots label#img-dot-2,
input#img-3:checked ~ .nav-dots label#img-dot-3,
input#img-4:checked ~ .nav-dots label#img-dot-4,
input#img-5:checked ~ .nav-dots label#img-dot-5,
input#img-6:checked ~ .nav-dots label#img-dot-6 {
	background: rgba(0, 0, 0, 0.8);
}


.row{
	
	margin:5px;
	background:#fff; 
	boxshadow: 0 0 1px #E4E5E5;
	}
</style>
<?php include 'footer.php';?>
<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>

<script>
var myCenter=new google.maps.LatLng(51.508742,-0.120850);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
