<?php 
session_start();
include 'database.php';
echo $roomid=$_GET['roomid'];
echo $hotelid=$_SESSION['hotelid'];
echo  $adult=$_SESSION['adults'];
$sql="SELECT * FROM `hotels` WHERE `hotel_id`='$hotelid'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

$sql2="SELECT * FROM `hotel_room` WHERE `id`='$roomid'";
$res2=mysql_query($sql2);
$row2=mysql_fetch_array($res2);
$price=$row2['price'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-translate-customization" content="7fecd4575cc66cac-f43c6fbcba7be1f1-g6c5c4b6788045cdb-10"></meta>
	  <link href="bootstrap-3.1.1-dist/css/bootstrap.css" rel="stylesheet">
	  <link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">	  
  
	  <script src="bootstrap-3.1.1-dist/js/bootstrap.js"></script>
	  <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="bootstrap-3.1.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-3.1.1-dist/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="bootstrap-3.1.1-dist/css/bootstrap-theme.css">
</head>
<div class="container">
<div class="col-md-9">
<div class="panel panel-info">
  <div class="panel-heading">Hotel Details</div>
  <div class="panel-body" id="bookhd">
    <h3><?php echo $row['Name'];?></h3> <small><?php echo $row['Address']?>,<?php echo $row['location']?></small>
	
  </div>
   <div class="panel-body" >
   Check In: <?php ?> | Check Out: <?php ?> </br>
	RoomType:<?php echo $row2['category_name'];?></br>
	Guest: | Night: | Rooms:  
	
  </div>
  
</div>

<div class="panel panel-info">
  <div class="panel-heading">Your Details</div>
  <div class="panel-body" >
<div class="form-inline" role="form">
<div class="form-group">
	<select class="form-control">
  <option>Mr.</option>
  <option>Ms.</option>
  <option>Mrs.</option>
  
</select>
</div>
  <div class="form-group">
    <label class="sr-only" for="First Name">First Name</label>
    <input type="text" class="form-control" id="firstname" placeholder="Enter firstname">
  </div>
  <div class="form-group">
    <label class="sr-only" for="LastName">Last Name</label>
    <input type="text" class="form-control" id="lastname" placeholder="Enter last name">
  </div></div>
  </div>
</div>
<div class="panel panel-info">
	<div class="panel-heading">Payment Details</div>
	<div class="panel-body">
		
		Credit card type 
		<select class="form-control">
			<option>Visa</option>
			<option>Master Card</option>
			<option>American Card</option>
		</select>
		Credit card Number:
		<input type="num" name="ccn" class="form-control">
		Expired Date:
		<div class="form-group">
		<select name="month">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>
		| <select name="year">
			<option value="2014">2014</option>
			<option value="2015">2015</option>
			<option value="2016">2016</option>
			<option value="2017">2017</option>
			<option value="2018">2018</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
			<option value="2020">2021</option>
			<option value="2020">2022</option>
			<option value="2020">2023</option>
			<option value="2020">2024</option>
		</select>
		</div>
		Secuirty code:
		<div class="form-group">
		<input name="ccv" type="num" class="fo">
		</div>
		<div class="btn-group">
			
			</div><script src="paypal-button.min.js?merchant=er.gomalpradeep90@gmail.com "
    data-button="buynow"
    data-name="My product"
    data-amount="1.00"
></script><button type="button" id="buynow" class="btn btn-primary pull-right">Book</button>
</div>
</div>
fuy
</div>
<div class="col-md-3">
<div class="panel panel-info">
	<div class="panel-heading">Total Price : <?php echo $adult*$price+$price*.2; ?></div>
	<div class="panel-body">
		Rooms : <?php echo $price;?> </br>
		VAT tax (20%): <?php echo $price*.2;?> </br>
</div>
</div>
</div>
</div>

</html>
<style>
#bookhd{
 border-color: #d8d8d8;
    border-image: none;
    border-style: none none solid;
    border-width: 1px;
}
</style>
