<!doctype html>
<?php 
include 'database.php';
$sql="SELECT `id`, `name` FROM `category_hotel` WHERE `parent_id`= '0'";
$res=mysql_query($sql);

$row= mysql_fetch_array($res);
$sql1="SELECT  `name`FROM `category_hotel` WHERE `parent_id` like '%1'";
$rew=mysql_query($sql1);$row1= mysql_fetch_array($rew);$c= mysql_num_rows($rew);
?>

<html>
  <head>
    <!-- Load jQuery from Google's CDN -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <!-- Source our javascript file with the jQUERY code -->
    <script src="script.js"></script>
    <link rel="stylesheet" href="runnable.css" />
  </head>
  <body>
    <!-- Use this navigation div as your menu bar div -->
  	<div class="navigation">
  		<ul class="nav">
  			<li>
  				<a href="#">Home</a>
  			</li>
  			<li>
  				<a href="#"><?php echo $row['name'];?></a>
  				<ul>
				<?php $i=0; while($i<$c) { $f1=mysql_result($rew,$i,"name");?>
  					<li><a href="#"><?php echo $f1;?></a></li>
  					<?php $i++;}?>
  				</ul>
  			</li>
  			<li>
  				<a href="#">About Us</a>
  				<ul>
  					<li><a href="#">Company</a></li>
  					<li><a href="#">Mission</a></li>
  					<li><a href="#">Contact Information</a></li>
  				</ul>
  			</li>
  		</ul>
  	</div>
  </body>
</html>

<style>h1 {
  font-family: Helvetica;
  font-weight: 100;
}
body {
  color:#333;
  text-align:center;
  font-family: arial;
}

.nav {
	margin: 0px;
	padding: 0px;
	list-style: none;
}

.nav li {
	float: left;
	width: 160px;
	position: relative;
}

.nav li a {
	background: #333;
	color: #fff;
	display: block;
	padding: 7px 8px;
	text-decoration: none;
	border-top: 1px solid #069;
}

.nav li a:hover {
	color: #069;
}

/*=== submenu ===*/

.nav ul {
	display: none;
	position: absolute;
	margin-left: 0px;
	list-style: none;
	padding: 0px;
}

.nav ul li {
	width: 160px;
	float: left;
}

.nav ul a {
	display: block;
	height: 15px;
	padding: 7px 8px;
	color: #fff;
	text-decoration: none;
	border-bottom: 1px solid #222;
}

.nav ul li a:hover {
	color: #069;
}



</style>
<script>
/*  jQuery ready function. Specify a function to execute when the DOM is fully loaded.  */
$(document).ready(
  /* This is the function that will get executed after the DOM is fully loaded */
  function () {
    /* Next part of code handles hovering effect and submenu appearing */
    $('.nav li').hover(
      function () { //appearing on hover
        $('ul', this).fadeIn('fast');
      },
      function () { //disappearing on hover
        $('ul', this).fadeOut('fast');
      }
    );
  }
);
</script>