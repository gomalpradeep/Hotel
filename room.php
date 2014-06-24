
<?php include 'menuh.php';?><?php 
include 'database.php';
$cell="select *  from `category_hotel` where `parent_id`='0'";
$select=mysql_query($cell);


if(isset($_POST['submit'])){
$hi=$_SESSION['id'];
$alias=$_POST['alias'];
$guest=$_POST['guest'];
$price=$_POST['price'];

$discount=$_POST['discount'];
$tr=$_POST['tr'];
$category=implode(",",$_POST['category']);
print_r( $_POST['category']);
echo count($_POST['category']);$a=array();$b=array();
$a=$_POST['category'];

echo $sql2="INSERT INTO `hotel_room`( `hotel_id`, `guests`,`category_name`, `price`,`total_rooms`, `discount`, `category`)
 VALUES ('$hi','$guest','$alias','$price','$tr','$discount','$category')";
 $result=mysql_query($sql2);
 if($result)
{?><script>
alert("inserted");
</script>
<?php }
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
   <li ><a href="hoteldetails.php">Hotel Details</a></li>
  <li><a href="facilites.php">Facilites</a></li>
   <li class="active"><a href="room.php">Rooms</a></li>
   <li><a href="hotelimage.php">Image</a></li>
   <li><a href="#">PHP</a></li>
</ul>
		</div>	
        <form action="room.php" method="post" >
        			
			<div class="form-horizontal" role="form"  method="post" name="" > 
	<div class="form-group">
	<label for="regLabel" class="col-sm-2 control-label"></label>
	</div> 
<div class="form-group"> 
<label for="firstname" class="col-sm-2 control-label">Category</label> 
<div class="col-sm-10"> 


<div id="parent123">

			<div id="child">

			<select name="category[]" class="form-control" onchange="cat(this.value,'')">

              							<option value=" ">select category</option>
							<?php

							while($row=mysql_fetch_array($select))

							{

							?>

                            <option value="<?php echo $row['id'];?>">

							<?php echo $row['name'];?>

							</option>

							

							<?php

							}

							?>

							</select>
							</div>
							</div></div> 
 </div> 
 <div class="form-group"> 
<label for="alias" class="col-sm-2 control-label">Alias Name</label> 
<div class="col-sm-10">
 <input type="text" name="alias" class="form-control" id="alias" placeholder="Enter alias name" required="required">
 </div> </div> 
 
 <div class="form-group"> 
<label for="Guest" class="col-sm-2 control-label">Guest</label> 
<div class="col-sm-10">
 <input type="text" name="guest" class="form-control" id="guest" placeholder="Enter guest" required="required">
 </div> </div> 
 
 
 <div class="form-group"> 
<label for="price" class="col-sm-2 control-label">price</label> 
<div class="col-sm-10">
 <input type="text" name="price" class="form-control" id="price" placeholder="Enter price" required="required">
 </div> </div> 
 
 
 
 <div class="form-group"> 
<label for="lastname" class="col-sm-2 control-label">Discount</label> 
<div class="col-sm-10">
 <input type="text" name="discount" class="form-control" id="discount" placeholder="Enter discount" >
 </div> </div> 

 <div class="form-group"> 
<label for="total" class="col-sm-2 control-label">Total rooms</label> 
<div class="col-sm-10">
 <input type="text" name="tr" class="form-control" id="tr" placeholder="Enter total rooms required="required">
 </div> </div> 
 <div class="form-group"> 
<div class="col-sm-offset-2 col-sm-10">
 <input type="submit" value="submit" name="submit" class="btn btn-default" > 
 </div> </div> 
 </div></div>
	</form>		
		</div>	<script src="js/jquery/jquery-2.1.1.js"></script>

	
		<script src="js/cbpHorizontalMenu.min.js"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>


<script>

function cat(str,str1)
{
$('#child'+str1).nextAll('*').remove();
$.ajax({
url:'ajaxaddproduct.php?id='+str,
success:function(res)
{
$('<div>',{'id':'child'+str}).html(res).appendTo('#parent123');
}
});
}
</script>

</div>
<?php include 'footer.php';?>
