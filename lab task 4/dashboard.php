<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logged In Dashboard</title>
</head>
<body>

	<table border="1" width="100%" cellspacing="0">
        <tr>
            <td align="right" colspan="2">
                <a href="home.php"><img src="logo.png" align="left" height="70px"></a>
                Logged in as <?php echo $_SESSION['username'] ?>|
                <a href="logout.php">Logout</a>
            </td>
        </tr>
        <tr height = "500px">
            				<td align="left" width="500px" >
               
                            		<h3>Account</h3>
                            		<hr size="1">
                            		<ul>
										<li><a href="dashboard.php">Dashboard</a></li>
										<li><a href="viewprofile.php">View Profile</a></li>
										<li><a href="editprofile.php">Edit Profile</a></li>
										<li><a href="changepicture.php">Change Profile Piture</a></li>
										<li><a href="changepassword.php">Change Password</a></li>
										<li><a href="logout.php">Logout</a></li>
									</ul>
                            	
                                                                                                    
           					 </td>
            					<td  align="left">
                            		<h3>Welcome <?php print_r($_SESSION['username']) ?> </h3>
                            	</td>
        </tr>
        <tr height = "30px">
            <td colspan="2">
                <center> Copyright@2017 </center>
            </td>
        </tr>
    </table>

</body>
</html>

<?php
	}else{
		echo "you didnot register";
		header('location: registration.php');
	}
?>