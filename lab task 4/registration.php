<?php
	
	session_start();

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conpass = $_POST['conpass'];
		$gender=$_POST['gender'];
		$date=$_POST['dd'];
		$month=$_POST['mm'];
		$year=$_POST['yyy'];

		if($name == "" ||$username == "" || $email == "" || $password == "" || $conpass == ""){
			echo "Null submission!";
		}
		elseif (strlen($username)<2) {
			echo "Username must be 2 characters";
		}
		elseif (strlen($password)<5) {
			echo "Password must be 5 characters";
		}
		
		else{

			if($password == $conpass){
				$_SESSION['name']=$name;
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['email'] = $email;
				$_SESSION['gender'] = $gender;
				$_SESSION['date'] = $date;
				$_SESSION['month'] = $month;
				$_SESSION['year'] = $year;
				
				header('location: login.php');
			}else{
				echo "password & confirm password mismatch..";
			}
		}
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right">
				<a href="home.php"> <img src="logo.png" align="left" height="70px"> </a> 
				<a href="home.php"> Home </a> |				
				<a href="login.php"> Login </a> |				
				<a href="registration.php"> Registration </a>
			</td>
		</tr>
		<tr height = "400px">
			<td align="center">
				
				<form method="POST" action="">
				<fieldset style="width: 30%">
							<legend>REGISTRATION</legend>
							<table>
								<tr>
									<td>Name</td>
									<td>:<input type="text" name="name" value="">  </td>
								</tr>
								<tr>
                                    <td colspan="2">
                                       <hr>
                                    </td>
                                </tr>
								<tr>
									<td>Email</td>
									<td>:<input type="email" name="email" value="">  </td>
								</tr>
								<tr>
                                    <td colspan="2">
                                       <hr>
                                    </td>
                                </tr>
								<tr>
									<td>Userame</td> 		 
									<td>:<input type="text" name="username" value="">  </td>
								</tr>
								<tr>
                                    <td colspan="2">
                                       <hr>
                                    </td>
                                </tr>
								<tr>
									<td>Password</td>     
									<td>:<input type="password" name="password" value=""> </td>
								</tr>
								<tr>
                                    <td colspan="2">
                                       <hr>
                                    </td>
                                </tr>
								<tr>
									<td>Confirm Password</td>
									<td>:<input type="password" name="conpass" value=""> </td>
								</tr>
								<tr>
                                    <td colspan="2">
                                       <hr>
                                    </td>
                                </tr>
		            		</table>
						<fieldset >
						<legend>Gender</legend>
									<input type="radio" name="gender"> Male
									<input type="radio" name="gender"> Female
									<input type="radio" name="gender"> Other
									
						
					   </fieldset>

					   <fieldset >
						<legend>Date Of Birth</legend>
								<input type="text" name="dd" min="1" max="31" size="2"> /
								<input type="text" name="mm" min="1" max="12" size="2"> /
								<input type="text" name="yyy" min="1950" max="2050" size="2"> (dd/mm/yyy)
						
						</fieldset>
					<br>
					
							<input type="submit" name="submit" value="Submit">
							<input type="reset" name="reset" value="Reset">
				
					</fieldset>
				</form>
				<br>
			</td>
		</tr>
		<tr height = "50px">
			<td >
				<center> Copyright@2017 </center>
			</td>
		</tr>
	</table>
</body>
</html>