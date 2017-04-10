<?php
	include '../dbh.php';	
	$passkey = $_GET['passkey'];

	$sql = "UPDATE guest SET salt=NULL WHERE salt='$passkey'";
	$result = $conn->query($sql) or die(mysqli_error($mysqli));
	if($result)
	{ if(db_affected_rows($mysqli)==1)// if insert was successful
	   {
			header( 'location: /index1.php');
			alert("The complaint is lodged!");
		}
	}
?>
