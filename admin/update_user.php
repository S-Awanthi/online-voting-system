<?php

	require_once 'db_connection.php';
	
	if (isset ($_POST ['change'])){
		$admin_id = $_GET['admin_id'];
		$adminname =$_POST['adminname'];
		$password=$_POST['password'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
	
		$conn->query("UPDATE admin SET adminname = '$adminname', password = '$password', firstname = '$firstname', lastname = '$lastname' WHERE admin_id = '$admin_id'")or die(mysql_error());
		
		header("location: user.php");
	}
?>