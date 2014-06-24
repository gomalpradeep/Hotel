
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <?php 
session_start();
include 'database.php';?>

   <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   
    <meta name="description" content="Frontier Markets Partners" />
    <meta name="keywords" content="emerging markets, Africa, " />
 <meta name="google-translate-customization" content="7fecd4575cc66cac-f43c6fbcba7be1f1-g6c5c4b6788045cdb-10"></meta>
    </head>
    <body >
    <div class="oneColFixCtrHdr" id="container">
    <div id="header" >
    <div>
    <ul class="menu">
    <li class="first"><a href="index.php">HOME</a></li>
    <li><a href="#">OVERVIEW</a></li>
    <li><a href="#">OUR TEAM</a></li>
    <li><a href="#">SERVICES</a></li>
    <li><a href="#">CAPABILITIES</a></li>
    <li><a href="#">CASE STUDIES</a></li>
  
    <li class="bordernone"><a href="#">CONTACT US</a></li>

<li class="login1"> Hi <?php if(isset($_SESSION['name'])){echo $_SESSION['name'];}?> </li>
 	<li class="login"><a href="Logout.php">Log Out</a></li>
    </ul>
    </div>
    <!--end topmenu div -->
    <!-- end #header --></div>
  
    <!-- end #container --></div>

    </body>
    </html>
	
	<style>
	    @charset "UTF-8";
    
 
    .oneColFixCtrHdr #container {
    background: #CC092F;
    margin: 0 auto; 
    }
    .oneColFixCtrHdr #header {
    background: #CC092F;
    top: 0;
    height: 50px;
    position: relative;
    padding-top: 20px;
    }
    /* main navigation styles */
    .menu {

    margin-left: auto;
    margin-right: auto;
    }
    #header ul{
    padding: 0;
    position: absolute;
    bottom: 0;
    list-style: none;
    display: block;
    background-image: url(images/menu_bg.gif);
    background-repeat: repeat-x;
    background-position: left top;
    }
	
    #header ul li {
    float: left;
    }
	
    #header ul a {
    padding: 0 35px;
    font-size: 13px;
    font-weight: bold;
    line-height: 1.9em;
    text-decoration: none;
    color: #FFF;
    float: left;
    display: block;
    background-image: url(images/separator.gif);
    background-repeat: no-repeat;
    background-position: left top;
    }
	
    #header ul a.first{
    background: none;
    background-image: none;
    }
    #header ul a:hover {
    color: #fff;
    }
	#header li:hover{
	background:#B10829;
	
	
	z-index:6;
	}

    .oneColFixCtrHdr #mainContent {
    padding: 0 0px;
    background-color: #CC092F;
    }
  .login1{
        color: #FFFFFF;
	 margin-left: 81px;
	}   

    .login{
        color: #FFFFFF;
	 margin-left: 22px;
	}
	
    a {
    color: #555;
    }
	</style>
