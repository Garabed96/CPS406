<?php
//session_start();
include '../dbh.php';
echo "--------------------------";
if(isset($_POST['submit']))
{
	//whether the email is blank
    if(empty($_POST['email']))
    {
		$error[] = "E-mail is required.";
     }else{
			//whether the email format is correct
			if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email']))
			{	
				$salt = md5(uniqid(rand(), true));//unique activation code
				$email= $_POST['email'];
				
				$uf = $_POST['uf'];
				$tc = $_POST['tc'];
				$ph = $_POST['ph'];
				$fs = $_POST['fs'];
				$cpv = $_POST['cpv'];
				$msg = $_POST['msg'];
				$es = $_POST['es'];
				$gRBOs = $_POST['gRBOs'];

				
				$to = $email;
				$subject = "Confirmation from Cypress";
				$header = "Cypress: Confirmation from Cypress";
				$message = "Please click the link below to lodge complaint!";
				echo "**********************";
				//$message .= "http://regalauctions.com/confirm.php?passkey=$salt";// get host
				$message .= "localhost:8080/confirm.php?passkey=$salt";

				$sentmail = mail($to,$subject,$message,$header);
				if($sentmail)
				{
					?>
					<script>alert('Please click on the confirmation link sent to your email to lodge complaint!');</script>
					<?php
					$sql = "INSERT INTO guest (email,uf,tc,ph,fs,cpv,msg,es,gRBOs,salt) VALUES ($email,$uf,$tc,$ph,$fs,$cpv,$msg,$es,$gRBOs,$salt)";
					$result = $conn->query($sql);
					if(!result)
					{
					?><script>alert('Query failed!');</script>
					<?php
					}		 
				}else{
						?><script>alert('Could not send email to you! Plese contact city office near your location.!');</script>
						<?php	
					}
			}
			else{
				 ?><script>alert('Your email is not valid');</script>
				 <?php
				}
}
?>
