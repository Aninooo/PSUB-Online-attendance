<?php
	require_once 'connect.php';
	$q_edit_student = $conn->query("SELECT * FROM `student` WHERE `student_id` = '$_REQUEST[student_id]'") or die(mysqli_error());
	$f_edit_student = $q_edit_student->fetch_array();
?>
<form method = "POST" action = "edit_student_query.php?student_id=<?php echo $f_edit_student['student_id']?>" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<label>Student ID:</label>
			<input type = "text" name = "student_no" value = "<?php echo $f_edit_student['student_no']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Firstname:</label>
			<input type = "text" name = "firstname" value = "<?php echo $f_edit_student['firstname']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Middlename:</label>
			<input type = "text" name = "middlename" value = "<?php echo $f_edit_student['middlename']?>" placeholder = "(Optional)" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Lastname:</label>
			<input type = "text" name = "lastname" value = "<?php echo htmlentities($f_edit_student['lastname'])?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Course</label>
			<input type = "text" value = "<?php echo $f_edit_student['course']?>" name = "course" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Yr&Section</label>
			<input type = "text" name = "section" required = "required" value = "<?php echo $f_edit_student['section']?>" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	