
<?php include 'menuh.php';?><?php
include 'database.php';

$hi=$_SESSION['id'];
if($hi!=""){

$sql2="select * from `hotels` where `hotel_id` =$hi";
$res=mysql_query($sql2);
$row=mysql_fetch_array($res);
}
if(isset($_POST['submit'])){
$fn=$_POST['hn'];
$address=$_POST['address'];
$ln=$_POST['ln'];
$minprice=$_POST['minprice'];
$email=$_POST['email'];
$details=$_POST['details'];
$no=$_POST['no'];
 $sql="INSERT INTO `hotels`( `Name`,`hotel_id`,`Address`, `location`, `email`, `overview`,`min_price`, `contact`)
 VALUES ('$fn','$hi','$address','$ln','$email','$details','$minprice',$no)";
$result=mysql_query($sql);
if($result)
{
echo "inserted";
}
else{
echo "not ";}
}

?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="js/bootstrap.min.js"></script>


<script src="js/modernizr.custom.js"></script>
<link rel="stylesheet" href="css/dashboard.css">

<div >
<div class="container">
<div id="menu2">
			<ul class="nav nav-tabs nav-justified" id="nav nav-tabs nav-justified">
   <li ><a href="dashboard.php">My Hotel</a></li>
   <li class="active"><a href="hoteldetails.php">Hotel Details</a></li>
  <li><a href="facilites.php">Facilites</a></li>
   <li><a href="room.php">Rooms</a></li>
  <li><a href="hotelimage.php">Image</a></li>
   <li><a href="#">PHP</a></li>
</ul>
		</div>	<div class="form">
        <form action="hoteldetails.php" method="post" >
        			
			<div class="form-horizontal" role="form"  method="post" name="" > 
	<div class="form-group">
	<label for="regLabel" class="col-sm-2 control-label"></label>
	</div> 
<div class="form-group"> 
<label for="firstname" class="col-sm-2 control-label">Hotel Name</label> 
<div class="col-sm-10"> 
<input type="text" name="hn" class="form-control" id="Hotelname" value="<?php echo $row["Name"];?>" placeholder="Enter Hotel Name" required="required"> 
</div> 
</div> 
<div class="form-group"> 
<label for="address" class="col-sm-2 control-label">address</label> 
<div class="col-sm-10">
 <input type="text" name="address" class="form-control" value="<?php echo $row["Address"];?>"  id="address" placeholder="Enter address" required="required">
 </div> </div> 
<div class="form-group"> 
<label for="lastname" class="col-sm-2 control-label">Location</label> 
<div class="col-sm-10">
 <input type="text" name="ln" class="form-control" value="<?php echo $row["location"];?>" id="location" placeholder="Enter location" required="required">
 </div> </div> 
 
 <div class="form-group"> 
<label for="email" class="col-sm-2 control-label">Email ID</label> 
<div class="col-sm-10"> 
<input type="text" name="email" class="form-control" value="<?php echo $row["email"];?>" id="email" class="form-control" placeholder="Enter Email Id" required="required"> 
</div> 
</div>
  <div class="form-group"> 
<label for="minprice" class="col-sm-2 control-label">Starting price</label> 
<div class="col-sm-10">
 <input type="text" name="minprice" class="form-control" value="<?php echo $row["min_price"];?>" id="minprice" placeholder="Enter starting price" required="required">
 </div> </div> 
 
 <div class="form-group"> 
<label for="details" class="col-sm-2 control-label">Details</label> 
<div class="col-sm-10"> 
<textarea class="form-control" value="<?php echo $row["overview"];?>" name="details" rows="3"></textarea></div> 
</div>
 
   
 <div class="form-group"> 
<label for="no" class="col-sm-2 control-label">Contact NO</label> 
<div class="col-sm-10"> 
<input type="num" class="form-control" name="no" value="<?php echo $row["contact"];?>" id="cno" class="form-control" placeholder="Enter Contact Number"> 
</div> 
</div>
  
 <div class="form-group"> 
<label for="state" class="col-sm-2 control-label">State</label> 
<div class="col-sm-10"> 
<input type="text" class="form-control" data-provide="typeahead"  name="state" id="cno" class="form-control" placeholder="Enter state"> 
</div> 
</div>
 
 <div class="form-group">
 <div class="col-sm-offset-2 col-sm-10"> <div class="checkbox">
 <label> 

 </div> </div> </div> 
 <div class="form-group"> 
<div class="col-sm-offset-2 col-sm-10">
 <input type="submit" value="submit" name="submit" class="btn btn-default" />
 </div> </div> 
 </div></div>
	</form>		
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/cbpHorizontalMenu.min.js"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>


</div>
<?php include 'footer.php';?>