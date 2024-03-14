<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `time` WHERE `time_id` = '$_REQUEST[time_id]'") or die(mysqli_error());
	header('location: record.php');