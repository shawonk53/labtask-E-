<?php
	
	
	
	if(isset($_POST['submit']))
	{

		$currPass = $_POST['Cpassword'];
		$newPass=	$_POST['Npassword'];	
			
		$RePass=	$_POST['Rpassword'];

		if($currPass==$newPass||$newPass!=$RePass)	{
			echo "try again";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>CHANGE PASSWORD</legend>
			Current Password   : <input type="password" name="Cpassword" value="">  <br>
			New Password       : <input type="password" name="Npassword" value=""> <br>
			Retype New Password: <input type="password" name="Rpassword" value=""> <br>
			
				<input type="submit" name="submit" value="Submit"> Forget Password?
		</fieldset>
	</form>
</body>
</html>