<?php
	require_once 'connect.php';
	$student_no = $_POST['student_no'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$course = $_POST['course'];
	$section = $_POST['section'];
		$conn->query("UPDATE `student` SET `student_no` = '$student_no', `firstname` = '$firstname', `middlename` = '$middlename', `lastname` = '$lastname', `course` = '$course', `section` = '$section' WHERE `student_id` = '$_REQUEST[student_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "student.php";
			</script>
		';	