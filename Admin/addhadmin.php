<?php include 'database.php';
include 'header.php';
include 'menu.php';?>

<?php if(isset($_POST['submit'])){
$user=$_REQUEST['username'];
$pass=$_REQUEST['password'];
$email=$_REQUEST['email'];
$sql="INSERT INTO `user`( `username`, `password`,`email_address`,`usertype`,`status`) VALUES ('$user','$pass','$email','client',1)";
mysql_query($sql);


} ?>
<div id="page-heading"><h1>Add product</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="">Add Hotel Admin</a></div>
			<div class="step-dark-right">&nbsp;</div>
			
		</div>
		<!--  end step-holder -->
	<!-- start id-form -->
		<form action="addhadmin.php" method="post" >
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">UserName:</th>
			<td><input type="text" name="username" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Password:</th>
			<td><input type="password" name="password" class="inp-form"		/></td>
			<td>
			</div>
			
			</td>
		</tr>
		
	<tr>
			<th valign="top">Email:</th>
			<td><input type="text" name="email" class="inp-form" /></td>
			<td>
			</div>
			
			</td>
		</tr>
	
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="submit" name="submit" class="form-submit" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
	</table>
	<!-- end id-form  -->
</form>
	</td>
	<td>



</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>








<?php include 'footer.php';?>