<?php
include("database.php");
$id=$_GET['id'];
$select="select *  from `category_hotel` where `parent_id` LIKE '%$id'";
$data=mysql_query($select);
$rows=mysql_num_rows($data);
$id1=trim($id,',');
if($rows!="")
{
?>
<tr>			
 <th valign="top">Sub-category:</th>
 <td>
<select name="category[]" onChange="cat(this.value,'<?php echo $id1;?>')"  class="inp-form"> 
						<option value="">select category</option>
							<?php
							while($row=mysql_fetch_array($data))
							{
							if($row['name']!=" ")
							{
							?>
							
                            <option value="<?php echo $row['id'];?>">
							<?php echo $row['name'];?>
							</option>
							
							<?php
							}
							}
							?>
							</select>
							</td> </tr>
							
		<?php
		}
		?>
	