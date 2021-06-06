<?php
	include("admin/db_connection.php");
	session_start();
	session_destroy();

	
		$conn->query("INSERT INTO vote VALUES('', '$_SESSION[pres_id]', '$_SESSION[voter_id]')") or die(mysqli_error());

        $conn->query("INSERT INTO vote VALUES('', '$_SESSION[vpinternal_id]', '$_SESSION[voter_id]')") or die(mysqli_error());

        $conn->query("INSERT INTO vote VALUES('', '$_SESSION[vpexternal_id]', '$_SESSION[voter_id]')") or die(mysqli_error());

        $conn->query("INSERT INTO vote VALUES('', '$_SESSION[secretary_id]', '$_SESSION[voter_id]')") or die(mysqli_error());

        $conn->query("INSERT INTO vote VALUES('', '$_SESSION[auditor_id]', '$_SESSION[voter_id]')") or die(mysqli_error());

        $conn->query("INSERT INTO vote VALUES('', '$_SESSION[treasurer_id]', '$_SESSION[voter_id]')") or die(mysqli_error());



		
		$conn->query("UPDATE voter SET status = 'Voted' WHERE voter_id = '$_SESSION[voter_id]'") or die(mysqli_error());
		
		
		header("location:index.php?Thank_you_for_voting!");
		
?> 