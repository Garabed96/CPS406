<?php
	include 'header.php';
?>
<?php
	if(isset($_SESSION['userid']))
	{
		echo "You are already logged in!";	
		// add here what you want to show after registration
	}else{	// add in echo " ...here.." , for any change or outlook 
			echo "
			<form class='text-center' action='includes/register.inc.php' method='POST'>
				<br> <input type='text' name='first' placeholder='Fristname'><br>
				<br> <input type='text' name='last' placeholder='Lastname'><br>
				<br> <input type='text' name='uid' placeholder='Username'><br>
				<br> <input type='password' name='pwd' placeholder='Password'><br>
				<br> <button type='submit'>Register</button>
			</form>";			
		}			
?>		
	<footer class="text-right"><a id="footer"> FAQ </a></footer>
</body>
</html>