<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
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
            				<td align="left" width="300px" >
               
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
            					<td height="300px" colspan="2" align="center">
                                    <br>
                                    <fieldset style="width: 30%">
                                        <legend> PROFILE </legend>
                                        <table>
                                            <tr>
                                                <td>
                                                    Name:
                                                </td>
                                                <td colspan="2">
                                                    <?php echo $_SESSION['name'] ?>
                                                </td>

                                                <td rowspan="5">
                                                    
                                                    <img src="user.png" width="200" height="200">
                                                    <a href="changepicture.php"> Change </a> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email:
                                                </td>
                                                <td>
                                                    <?php echo $_SESSION['email'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Gender:
                                                </td>
                                                <td>
                                                    <?php echo $_SESSION['gender'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Date of Birth:
                                                </td>
                                                <td>
                                                    <?php 
                                                    echo $_SESSION['date'].'/'. $_SESSION['month'].'/'.$_SESSION['year'] 

                                                    ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            
                                            <tr>
                                                <td colspan="2"> 
                                                    <a href="editProfile.php"> Edit Profile </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                    <br> 
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