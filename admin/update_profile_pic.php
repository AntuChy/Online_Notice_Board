<?php 
$admin= $_SESSION['admin'];
extract($_POST);
if(isset($update))
{
$img=$_FILES['f']['name'];
 

$query="update admin set image='$img' where email='".$_SESSION['admin']."'";
mysqli_query($conn,$query);

move_uploaded_file($_FILES['f']['tmp_name'],"../images/$admin/".$_FILES['f']['name']);

$err="<font color='blue'>Profie Pic updated successfully !!</font>";

}


//select old data
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from admin where email='".$_SESSION['admin']."'");
$res=mysqli_fetch_assoc($sql);

?>
<h2 align="center">Update Image</h2>

		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Choose <picture></td>
					<Td><input class="form-control"  type="file" name="f"/></td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Update Profile Picture" name="update"/>
				
					</td>
				</tr>
			</table>
		</form>
	