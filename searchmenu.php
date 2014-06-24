<?php 

 $searchdestiny=$_SESSION['destination'];
 $startdate=$_SESSION['startdate'];
 $enddate=$_SESSION['enddate'];
 $adults=$_SESSION['adults'];
?>
 <html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Frontier Markets Partners" />
<meta name="keywords" content="emerging markets, Africa, " />
<meta name="google-translate-customization" content="7fecd4575cc66cac-f43c6fbcba7be1f1-g6c5c4b6788045cdb-10"></meta>
</head>
<script src="js/jquery/jquery-2.1.1.js"></script>
  <script src="js/jquery.min.js"></script>
 <script src="js/jquery/jquery-ui.js"></script>
 <link rel="stylesheet" href="css/jquery-ui.css">
 <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<div id="searchwiget">
<ul class="menusw"><form action=""  method="get">
	<li class="">Destination: <input type="text" name="location" value="<?php echo $searchdestiny;?>"> </li>	
	<li>Check In: <input type="text" id="datepicker1" name="startdate" value="<?php echo $startdate;?>"> </li>
	<li>Check out: <input type="text" id="datepicker2" name="enddate" value="<?php echo $enddate;?>"></li>
	<li><input type="submit" value="Search" name="submit"</button></li>
	</form>
	
</ul>
	
</div>
<style>
	#searchwiget {
    background: #240092;
    top: 0;
    height: 50px;
    position: relative;
    padding-top: 20px;
    }
	
#searchwiget ul{
    padding: 0;
    position: absolute;
    bottom: -6px;
    list-style: none;
    display: block;

    }
#searchwiget li{
		  margin: 5px 5px 5px 20px;
		  color:#FFF;
	}
	
#searchwiget ul li {
    float: left;
    }
	
#searchwiget ul a {
    padding: 0 35px;
    font-size: 13px;
    font-weight: bold;
    line-height: 1.9em;
    text-decoration: none;
    color: #FFF;
    float: left;
    display: block;
   
    }
 #searchwiget input{

	  height: 24px;
	   line-height: 14px;
    margin: 3px 0 5px;
    padding: 6px 5px;
	 }
 .menusw {

    margin-left: auto;
    margin-right: auto;
    }
</style>
 <script>
$(function() {
$( "#datepicker1" ).datepicker({
defaultDate: "+1D",

changeMonth: true,
numberOfMonths: 2,
maxDate: "+10M +10D",
onClose: function( selectedDate ) {
$( "#datepicker2" ).datepicker( "option", "minDate", selectedDate );
}
});
$( "#datepicker2" ).datepicker({
defaultDate: "+2D",
changeMonth: true,
numberOfMonths: 2,
minDate: "+10M +10D",
onClose: function( selectedDate ) {
$( "#datepicker1" ).datepicker( "option", "maxDate", selectedDate );
}
});
});
</script>
<style type="text/css">
.ui-datepicker {
   background: #fff;
   border: 1px solid #555;
   color: #EEE;
 }
</style>
