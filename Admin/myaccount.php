<?php include 'header.php'; ?>
<div class="clear">&nbsp;</div>
 <?php include 'menu.php'; 
 
 include 'database.php';
 $set="SELECT * FROM `general_setting`";
 $res=mysql_query($set);
 
 
 
 ?>
<!--  start nav-outer-repeat................................................... END -->
 <?php  if(isset($_POST['submit']))
 {
 $name=$_REQUEST['aname'];
 $phone=$_REQUEST['phone'];
$username=$_REQUEST['uname'];
$password=$_REQUEST['password'];
 $email=$_REQUEST['email'];
 $facebook=$_REQUEST['facebook'];
 $pp=$_REQUEST['pp'];
 
 $sql1="UPDATE `General_setting` SET `admin_name`='$name',`user_name`='$username',`password`='$password',`phone_no`='$phone',`email_id`='$email',`facebookapp`='$facebook',`paypalapp`='$pp' WHERE id=1";
 mysql_query($sql1);
 
 $name=$phone=$username=$password=$email=$facebook=$pp="";
 
 } ?>
 <div class="clear"></div>
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>General Setting</h1></div>


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
			<div class="step-dark-left"><a href="myaccount.php">My details</a></div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">2</div>
			<div class="step-light-left"><a href="viewCagy.php">View category</a></div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no-off">3</div>
			<div class="step-light-left">Preview</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	<?php $row = mysql_fetch_array($res)?>
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<form action ="myaccount.php" method="post" enctype="multipart/form-data">
		<tr>
			<th valign="top">Admin Name:</th>
			<td><input type="text" name="aname" id="aname" value="<?php echo $row['admin_name'];?>" required="required"/></td>
			<td>
		
			</td>
		</tr>
		<tr>
			<th valign="top">USer Name:</th>
			<td><input type="text" name="uname" id="uname" value="<?php echo $row['user_name'];?>" required="required" /></td>
			<td>
		
			</td>
		</tr>
		<tr>
			<th valign="top">Password:</th>
			<td><input type="password" name="password" id="password" value="<?php echo $row['password'];?>" required="required"/></td>
			<td>
		
			</td>
		</tr>
		
	<tr>
			<th valign="top">Phone No:</th>
			<td><input type="text" name="phone" id="phone"  value="<?php echo $row['phone_no'];?>" required="required"/></td>
			<td>
		
			</td>
		</tr>
<tr>
			<th valign="top">Email id:</th>
			<td><input type="text" name="email" id="email" value="<?php echo $row['email_id'];?>" required="required"/></td>
			<td>
		
			</td>
		</tr>
		<tr>
			<th valign="top">Facebook app:</th>
			<td><input type="text" name="facebook" id="facebook" value="<?php echo $row['facebookapp'];?>"  required="required"/></td>
			<td>
		
			</td>
		</tr>
		<tr>
			<th valign="top">paypal app:</th>
			<td><input type="text" name="pp" id="pp" value="<?php echo $row['paypalapp'];?>" required="required"/></td>
			<td>
		
			</td>
		</tr>
		
	
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" name="submit" value="submit" class="form-submit" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr></form>
	</table>
	<!-- end id-form  -->

	</td>
	<td>

	<!--  start related-activities -->
	<div id="related-activities">
		
		<!--  start related-act-top -->
		<div id="related-act-top">
		<img src="images/forms/header_related_act.gif" width="271" height="43" alt="" />
		</div>
		<!-- end related-act-top -->
		
		<!--  start related-act-bottom -->
		<div id="related-act-bottom">
		
			<!--  start related-act-inner -->
			<div id="related-act-inner">
			
				<div class="left"><a href=""><img src="images/forms/icon_plus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Add another product</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				
				<div class="left"><a href=""><img src="images/forms/icon_minus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Delete products</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				
				<div class="left"><a href=""><img src="images/forms/icon_edit.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Edit categories</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				<div class="clear"></div>
				
			</div>
			<!-- end related-act-inner -->
			<div class="clear"></div>
		
		</div>
		<!-- end related-act-bottom -->
	
	</div>
	<!-- end related-activities -->

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


<script>
function error()
{
$().val()
	<div class="error-left"></div>
			<div class="error-inner">This field is required.</div>
}


</script>






 





<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->

 


<div class="clear">&nbsp;</div>
<?php include 'footer.php';?>
