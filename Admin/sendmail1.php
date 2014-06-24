<?php include 'header.php';?>

<?php include 'menu.php'; ?>
<!--  start nav-outer-repeat................................................... END -->
 
 <div class="clear"></div>
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"></div>


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
			<div class="step-light-left"><a href="categories.php">Add category details</a></div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no-off">2</div>
			<div class="step-dark-left"><a href="viewCagy.php">View category</a></div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">3</div>
			<div class="step-light-left">Preview</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->


<h2>Feedback Form</h2>
<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">
  From: <input type="text" name="from"><br>
  Subject: <input type="text" name="subject"><br>
  Message: <textarea rows="10" cols="40" name="message"></textarea><br>
  Image:<input type="file" class="file_1" name="file" id="file" /><br>
  <input type="submit" name="submit" value="Submit ">
  </form>
  <?php
} else { 
	?>
<?php
$head=$_POST['subject'];
$mes=$_POST['message'];
require ('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
	$mail->isSendmail();
//Set who the message is to be sent from
//$mail->setFrom('admin@gomalpradeep.web44.net ', 'First Last');
//Set an alternative reply-to address
//$mail->addReplyTo('er.gomalpradeep90@gmail.com', 'First Last');
//Set who the message is to be sent to
//$mail->addAddress('gomalpradeep123@gmail.com', 'John Doe');
//Set the subject line
//$mail->Subject = '$head';
//$mail->Host       = "smtp.gmail.com"; 
//$mail->SMTPDebug  = 1;                
//$mail->SMTPAuth   = true; 
//$mail->SMTPSecure = "tls";
//$mail->Host       = "smtp.gmail.com"; 
//$mail->Port       = 465;              
//$mail->FromName   = "Administrator"; 
//$mail->Username   = "admin@gomalpradeep.web44.net"; 
//$mail->Password   = "power*123"; 
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
//$mail->AltBody = '$mes';
//Attach an image file
//$mail->addAttachment('PHPMailer/examples/images/phpmailer_mini.png');



//$mail->IsSMTP();  // telling the class to use SMTP
//$mail->Host     = "gomalpradeep.web44.net"; // SMTP server
//$mail->SMTPDebug  = 2;                
//$mail->SMTPAuth   = true; 
//$mail->SMTPSecure = "ssl";
//$mail->Username   = "a5397743"; 
//$mail->Password   = "power*123"; 
//$mail->Port       = 465;  
$mail->SetFrom     = "gomalpradeep123@gmail.com";
$mail->AddAddress("gomal@hotelbook.96.lt");

$mail->Subject  = "First PHPMailer Message";
$mail->Body     = "Hi! \n\n This is my first e-mail sent through PHPMailer.";
$mail->addAttachment('New.txt');
$mail->WordWrap = 50;




//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
	 } ?>


	</td>
	<td>
	
	
	</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>

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









 





<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->

 

<div class="clear">&nbsp;</div>



<?php include 'footer.php'; ?>
