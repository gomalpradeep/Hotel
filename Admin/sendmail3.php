<?php
if(isset($_POST['submit'])){
echo $to=$_POST['to'];
echo $head=$_POST['subject'];
echo $body=$_POST['message'];
$file=$_FILES['file']['tmp_name'];
$filename=$_FILES['file']['name'];
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

                                    // Set mailer to use SMTP
//$mail->IsSMTP(); // enable SMTP
//$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
//$mail->SMTPAuth = true; // authentication enabled
//$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "mx1.hostinger.in";
$mail->Port = 2525;//143; // or 110
$mail->Username = 'gomal@hotelbook.96.lt';                 // SMTP username
$mail->Password = 'power*123';                           // SMTP password

$mail->From = 'gomal@hotelbook.96.lt';
$mail->FromName = 'Mailer';
     // Add a recipient
$mail->addAddress($to);               // Name is optional

//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
 // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->addAttachment($file);
//$mail->addAttachment($filename);
$mail->Subject = $head;
$mail->Body    = $body.'<b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}
else{
?>

<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
 To: <input type="text" name="to"><br>
  Subject: <input type="text" name="subject"><br>
  Message: <textarea rows="10" cols="40" name="message"></textarea><br>
  File:<input type="file" name="file" id="file" /><br>
  <input type="submit" name="submit" value="Submit ">

</form>

</body>
</html><?php }?>
