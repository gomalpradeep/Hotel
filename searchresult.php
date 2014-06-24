<?php
session_start();
include 'database.php';
//include 'menuh.php'; 
include 'searchmenu.php';
if(isset($_REQUEST['submit']))
{
echo $searchdestiny=$_REQUEST['location'];
echo $startdate=$_REQUEST['startdate'];
echo $enddate=$_REQUEST['enddate'];
echo $adults=$_REQUEST['adults'];
 $_SESSION['destination']=$searchdestiny;
 $_SESSION['startdate']=$startdate;
 $_SESSION['enddate']=$enddate;
 $_SESSION['adults']=$adults;
 
$sql="SELECT * FROM `hotels` WHERE `location`='$searchdestiny'";
 
$result=mysql_query($sql);
$row= mysql_fetch_array($result);
echo $num= mysql_num_rows($result);
}
?> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
 <script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
 
<link rel="stylesheet" href="css/dashboard.css">
 
<body id="container">
<div  id="searchWrap" class="searchWrap">
<div class="htfilter">rgtre
</div>
<div class="htdetails">

<?php $i=0; while($i<$num) {?>
<article class="article">
<ul id="ul"><li class="dydetails">
<div id="htdetailsin">
<div class="aside">
<h3><?php echo mysql_result($result,$i,"name");?> </h3>

<h4 id="h4"><?php echo mysql_result($result,$i,"Address");?>, <?php echo mysql_result($result,$i,"location");?></h4>

<?php if(  mysql_result($result,$i,"cancellation_policy")==""){?>

<br>
<sup class="reinforcement">FREE cancellation</sup>
<?php }?>
<span class="latestbook">Latest Booking</span>

</div>
<div class="figure">
<img src="upload/room/default/Logo.jpg" width="96" height="120">
</div>
</div>
</li><li class="htprice">
<h3>
<span class="rupee">Rs.</span>
<?php echo mysql_result($result,$i,"min_price") ; ?>
</h3>
<br>

<a class="searchbtn" target="_blank" href="details.php?hotelid=<?php   echo urlencode(mysql_result($result,$i,"hotel_id")) ; ?>"> View Hotel</a>
  </li></ul>
</article>
<?php  $i++; }?>

</div></div>

</body>
 
<style>
#container{
margin:00px;
padding:0px;
 
}
#h4{

font-size: 12px;}
#searchWrap{
 
     
    }
.searchWrap{
 
margin:50px;
padding-left:15px;
}
.htfilter{
float: left;
    margin-right: 15px;
    width: 236px;
}
.htdetails{
 
padding: 1.3em 18px 1em;
    width: 780px;
}
li{display: inline;
   
list-style-type:none;
}

.article ul{
float:left;
width:100%;

}
#ul{
  
 
    width:95%;
    height:145px;
	border: 1px solid #e4e5e5;
    box-shadow: 0 0 2px #e4e5e5;
    margin-bottom: 10px;
    position: relative;
	
    }
.dydetails{
     display: inline-block;
	 float:left;
    width:77.8%;
	position:relative;
    border: 1px solid #e4e5e5;
}
.htprice{
      text-align: center;
     float:left;
	 width:22%;
	   display: inline-block;
    }
#htdetailsin{
    width:100%;
    height:100%;
     
    }     
#htdetailsin h3{

width:80%;
 font-size: 20px;
    font-weight: normal;font-size:20px;
}
.aside{position: relative;
float:right;
width:70%;
}
.figure{position: relative;
width:20%;
float:left;
height:140px;
padding:5px;
}
.htfilter, .htdetails {
     
    background: none repeat scroll 0 0 #fff;
    border: 1px solid #ededed;
    display: inline-block;
    padding: 1em 0;
    vertical-align: top;
}
.htprice h3{
  color: #3e4141;
    display: inline-block;
    font: 30px "LatoBold";

}

.rupee{
display: inline-block;
    font: 11px/20px "WebRupee";
    margin: 0 2px 0 0;
	}
.reinforcement{
color:#390;

	}
	.latestbook{
	color: #690;
    display: block;
	
	}
	
.searchbtn{
     background-color: #f5f5f5;
    background-image: linear-gradient(to bottom, #fff, #ededed);
    background-repeat: repeat-x;
    border: 1px solid #ccc;
    border-radius: 4px;
    color: #333;
    cursor: pointer;
    display: inline-block;
    margin-bottom: 0;
    padding: 4px 6px 6px;
    text-align: center;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
    vertical-align: middle;
	 text-decoration: none;


	 }
</style> 
