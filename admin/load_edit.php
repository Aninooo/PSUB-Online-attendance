<?php
	require_once 'connect.php';
	$q_edit_admin = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
	$f_edit_admin = $q_edit_admin->fetch_array();
?>
<form method = "POST" action = "edit_query.php?admin_id=<?php echo $f_edit_admin['admin_id']?>" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<label>Username:</label>
			<input type = "text" required = "required" value = "<?php echo $f_edit_admin['username']?>" name = "username" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Password:</label>
			<input type = "password" required = "required" maxlength = "12" value = "<?php echo $f_edit_admin['password']?>" name = "password" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Firstname:</label>
			<input type = "text" name = "firstname" value = "<?php echo $f_edit_admin['firstname']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Middlename:</label>
			<input type = "text" name = "middlename" value = "<?php echo $f_edit_admin['middlename']?>" placeholder = "(Optional)" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Lastname:</label>
			<input type = "text" name = "lastname" value = "<?php echo htmlentities($f_edit_admin['lastname'])?>" required = "required" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	