<?php include 'header.php';
?>

	<div class="modal-header">
<?php include 'menu.php';
?>
</div>
<link class="cssdeck" rel="stylesheet" href="bootstrap-3.1.1/docs/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-responsive.min.css" class="cssdeck">

<div class="" id="loginModal">
	
	<div class="modal-body">
		<div class="well">
			
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="login">
					<form class="form-horizontal" action='' method="POST">
						<fieldset>
							<div id="legend">
								<legend class="">Login</legend>
							</div>    
							<div class="control-group">
								<!-- Username -->
								<label class="control-label"  for="username">Username</label>
								<div class="controls">
									<input type="text" id="username" name="username" placeholder="" class="input-xlarge">
								</div>
							</div>
							<div class="control-group">
								<!-- Password-->
								<label class="control-label" for="firstname">firstname</label>
								<div class="controls">
									<input type="text" id="firstname" name="firstname" placeholder="" class="input-xlarge">
								</div>
							</div>
							<div class="control-group">
								<!-- Password-->
								<label class="control-label" for="lastname">Last name</label>
								<div class="controls">
									<input type="text" id="lastname" name="lastname" placeholder="" class="input-xlarge">
								</div>
							</div>
							<div class="control-group">
								<!-- Password-->
								<label class="control-label" for="password">Password</label>
								<div class="controls">
									<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
								</div>
							</div>
							
							<div class="control-group">
								<!-- Password-->
								<label class="control-label" for="email">EMail</label>
								<div class="controls">
									<input type="text" id="email" name="email" placeholder="" class="input-xlarge">
								</div>
							</div>
							<div class="control-group">
								<!-- Button -->
								<div class="controls">
									<button class="btn btn-success">Login</button>
								</div>
							</div>
						</fieldset>
					</form>                
				</div>
				
			</div>
		</div>
	</div>

<script class="cssdeck" src="js/jquery/jquery-2.1.1.js"></script>
<script class="cssdeck" src="bootstrap-3.1.1/docs/dist/js/bootstrap.min.js"></script>

<?php  include 'footer.php';?>