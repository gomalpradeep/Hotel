<?php include 'menuh.php';?>
<?php   $hi=$_SESSION['id'];
$sql="SELECT `name`,	`id`	 FROM `amnities`";
$result=mysql_query($sql);
$c= mysql_num_rows($result);
 
 
 if(isset($_POST['submit'])){
 
 $to_select_list=implode(",",$_POST['to_select_list']);
 
 $sql1="UPDATE `hotels` SET `Amentilies`='$to_select_list' WHERE `hotel_id`='$hi'";
 mysql_query($sql1);
 }
 ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="js/bootstrap.min.js"></script>


<script src="js/modernizr.custom.js"></script>
<link rel="stylesheet" href="css/dashboard.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
<script language="javascript" type="text/javascript">
   
    /*
    Auther :: Dharmendra Patri
    Email  :: admin@icymic.com
    Site   :: http://lovewithbug.com
              http://forthera.com
    */
   
    /*
    @param1 - sourceid - This is the id of the multiple select box whose item has to be moved.
    @param2 - destinationid - This is the id of the multiple select box to where the iterms should be moved.
  */
 
  //this will move selected items from source list to destination list     
  function move_list_items(sourceid, destinationid)
  {
    $("#"+sourceid+"  option:selected").appendTo("#"+destinationid);
  }

  //this will move all selected items from source list to destination list
  function move_list_items_all(sourceid, destinationid)
  {
    $("#"+sourceid+" option").appendTo("#"+destinationid);
  }
   
</script>
<div >
<div class="container">
<div id="menu2">
			<ul class="nav nav-tabs nav-justified" id="nav nav-tabs nav-justified">
   <li ><a href="dashboard.php">My Hotel</a></li>
   <li><a href="hoteldetails.php">Hotel Details</a></li>
   <li class="active"><a href="facilites.php">Facilites</a></li>
   <li><a href="room.php">Rooms</a></li>
   <li><a href="hotelimage.php">Image</a></li>
   <li><a href="#">PHP</a></li>
</ul>
		</div>	<div class="form" id="checkbox">
		<form class="form-horizontal" role="form" method="post" action="">
   <h4>Choose hotel Amentilies</h4>
   <table cellpadding="5" cellspacing="5"  class="table">

<tbody>

<tr>

    <td colspan="2" >
        <select id="from_select_list" multiple="multiple" multiple class="form-control" name="from_select_list" style="height: 351px">
		<?php  for($i=0;$i<$c;$i++){?>
		<option value="<?php  echo mysql_result($result,$i,"id"); ?>" >  <?php   echo mysql_result($result,$i);  ?></br>
  <?php  }?>
        </select>
    </td>
   
    <td colspan="2" >
        <select id="to_select_list" multiple="multiple" required="required" multiple class="form-control" name="to_select_list[]" style="height: 351px">
           </select>
    </td>

</tr>

<tr>

    <td><input id="moveright" type="button" class="btn btn-primary" value="Move Right" onclick="move_list_items('from_select_list','to_select_list');" /></td>
   
    <td></td>
   
    <td><input id="moveleft" type="button" class="btn btn-primary" value="Move Left" onclick="move_list_items('to_select_list','from_select_list');" /></td>
   
    <td></td>

</tr>

</tbody>

</table>
   
		
		<input name="submit" type="submit" name="submit" class="btn btn-default">
		</form>
		</div></div>
			
			
 </div> 

			
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/cbpHorizontalMenu.min.js"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>
<script>
$('input[type="checkbox"]').checkbox({
    checkedClass: 'icon-check',
    uncheckedClass: 'icon-check-empty'
});
</script>
<style>
#checkbox{
 padding-left: 200px;
    padding-top: 60px;

}
select {
    width:200px;
    height:100px;
}
</style>
</div>
<?php include 'footer.php';?>