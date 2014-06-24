<?php require_once "phpuploader/include_phpuploader.php" ?>
<?php session_start(); include 'database.php';
$hi=$_SESSION['id'];?>

<?php 

 $updir='upload/room/'.$hi;

if( is_dir($updir) === false )
{
    mkdir($updir,0700);
}
if(isset($_POST['submit'])){
	


	


}
?>
<?php include 'menuh.php';?>
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
   <li><a href="hoteldetails.php">Hotel Details</a></li>
   <li><a href="facilites.php">Facilites</a></li>
   <li><a href="room.php">Rooms</a></li>
   <li class="active"><a href="hotelimage.php">Image</a></li>
   <li><a href="#">PHP</a></li>
</ul>
		</div>	
			<div class="demo">
        <h2>Selecting multiple files for upload</h2>
        <p> Select multiple files in the file browser dialog then upload them at once (Allowed file types: <span style="color:red">jpg, gif, png, zip</span>).
		<p> 
		<?php
			$uploader=new PhpUploader();
			
			$uploader->MultipleFilesUpload=true;
			$uploader->InsertText="Upload Multiple File (Max 10M)";
			
			$uploader->MaxSizeKB=1024000;	
			$uploader->AllowedFileExtensions="jpeg,jpg,gif,png,zip";
			
			//Where'd the files go?
			$uploader->SaveDirectory="upload/room/".$hi;
			
			$uploader->Render();
		?>	
		</p>
	<script type='text/javascript'>
	function CuteWebUI_AjaxUploader_OnTaskComplete(task)
	{
		var div=document.createElement("DIV");
		div.innerHTML=task.FileName + " is uploaded!";
		document.body.appendChild(div);
	}
	</script>		
	</div>
 
			
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