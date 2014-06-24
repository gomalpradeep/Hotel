<?php 


include("database.php");

$id=','.$_GET['id'];

 $query = "select *from `category_hotel` where parent_id like '%$id'";

$result = mysql_query($query);

?>
<table border="0" width="100%" cellpadding="0" cellspacing="0">

	<tr valign="top">

	<td>

	

	

		<!--  start step-holder -->

	

		<!--  end step-holder -->

	

		<!-- start id-form -->

				<table border="1" cellpadding="0" cellspacing="0" width="100%" height="100%" >

				<tr>

				<td valign="top"><h2>Id</h2></td><td><h2>Name</h2></td><td><h2>Meta_title</h2></td><td><h2>Meta_keyword</h2></td><td><h2>pagetitle</h2></td><td><h2>Image</h2></td><td><h2>Option</h2></td>

				</tr>

				<?php	while ($row = mysql_fetch_array($result)) {?> 

				

			<tr>  <td>   <?php echo  $row['id'];?> </td>  

				<td><?php echo $row['name'];?></td>  

					<td><?php echo $row['meta_title'];?></td>   	

					<td><?php echo $row['meta_keyword'];?></td> 

					 	<td><?php echo $row['pagetitle'];?></td>

						 	<td><img src="<?php echo $row['imageurl'];?>" /></td>

							

							<td><a href="editcat.php?id=<?php echo $row['id'];?>" title="Edit" class="icon-1 info-tooltip"></a>



					<a href="editcat.php?del=<?php echo $row['id'];?>" title="Delete" class="icon-2 info-tooltip"></a>
					<a href="#" onclick='cat("<?php echo $row['id'];?>")'>child</a>



					</td>





							</tr>				

			<?php }?>

				</table>

	<!-- end id-form  -->

