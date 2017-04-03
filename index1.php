<?php
	include 'header.php';
	
	if(isset($_SESSION['userid']))
	{
		// add here what you want to show after logged in 
		echo $_SESSION['userid'];	
	}else{
		// add here what you want to show for guest users
		echo "You are not logged in!";				
	}			
?>

</body>
</html>