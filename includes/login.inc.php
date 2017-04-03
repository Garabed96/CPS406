<?php
session_start();
include '../dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

if(!$row = mysqli_fetch_assoc($result))
{
	echo "Your username or password is incorrect!";
}else{
	$_SESSION['userid'] = $row['id'];
	//echo $_SESSION['userid'];
}
/*
-- choose one of following destination after logged in. --
header("Location: ../index1.php");
header("Location: ../login.php");
*/
?>




