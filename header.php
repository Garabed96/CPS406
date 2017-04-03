<?php
	session_start();
?>

<!doctype html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<html>
<head>
<!--<meta charset="UTF-8">-->
<title >Document Title</title>
<link  rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<nav>
		<ul>
			<li><a href="index1.php">HOME</a></li>
				<?php
				if(isset($_SESSION['userid'])){
					echo"	
					<form action='includes/logout.inc.php'>
						<button>SignOut</button>
					</form>";	
				}else{
					echo "	
					<form action='includes/login.inc.php' method='POST'>
						<input type='text' name='uid' placeholder='Username'>
						<input type='password' name='pwd' placeholder='Password'>
						<button type='submit'>Login</button>
					</form>";
					}		
				?>
			<li><a href="register.php">SIGNUP</a></li>			
		</ul>
	</nav>
</header>