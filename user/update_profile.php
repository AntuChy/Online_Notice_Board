<?php 
$user= $_SESSION['user'];
extract($_POST);
if(isset($update))
{


$query="update user set name='$n',mobile='$mob' where email='".$_SESSION['user']."'";


mysqli_query($conn,$query);



$err="<font color='blue'>Profie updated successfully !!</font>";


}


//select old data
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);

?>
<h2 style="color:#1fdecc">Update Profile</h2>

		<form method="post">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Batch</td>
					<Td><input class="form-control" value="<?php echo $res['name'];?>"  type="text" name="n"/></td>
				</tr>
				<tr>
					<td>Enter email </td>
					<Td><input class="form-control" type="email" readonly="true" value="<?php echo $res['email'];?>"  name="e"/></td>
				</tr>
				
				
				<tr>
					<td>Enter Mobile </td>
					<Td><input class="form-control" type="text" value="<?php echo $res['mobile'];?>"  name="mob"/></td>
				
				</tr>
				
				
				
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit"  value="Update Profile" name="update" class="btn btn-success"/>

				
					</td>
				</tr>
			</table>
		</form>
	