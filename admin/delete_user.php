<?php
	require_once 'db_connection.php';

	$admin_id = $_GET['admin_id'];

	$conn->query("DELETE FROM admin WHERE admin_id = '$admin_id'") or die(mysql_error());
	
	header('location:user.php');
?>