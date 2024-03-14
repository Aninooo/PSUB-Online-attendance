<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `student` WHERE `student_id` = '$_REQUEST[student_id]'") or die(mysqli_error());
	header('location:student.php');