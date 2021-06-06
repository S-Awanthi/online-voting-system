<!-- PHP code for delete a candidate -->

<?php
	require_once 'db_connection.php';
        
	$candidate_id = $_GET['candidate_id'];
        
    //  SQL query to delete candidate
	$conn->query("DELETE FROM candidate WHERE candidate_id = '$candidate_id'") or die(mysql_error());
        
    //  Redirect to candidate.php
	header('location:candidate.php');
?>