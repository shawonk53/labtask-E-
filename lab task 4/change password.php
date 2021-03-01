<?php
    
    session_start();
    
    if(isset($_POST['submit']))
    {

        $currPass = $_POST['Cpassword'];
        $newPass=   $_POST['Npassword'];    
            
        $RePass=    $_POST['Rpassword'];

        if($currPass!=$_SESSION['password'] || $currPass==$newPass || $newPass!=$RePass)  {
            echo "Retype, password is incorect!";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
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
            					<td height="300px"  align="center">
                                    <br>
                                    <fieldset style="width: 40%" >
                                        <legend> CHANGE PASSWORD </legend>
                                        <table>
                                            <tr>
                                                <td>Current Password</td>
                                                <td>:<input type="password" name="Cpassword" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>New Password</td>
                                                <td>:<input type="password" name="Npassword" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Retype Password</td>
                                                <td>:<input type="password" name="Rpassword" value=""></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"> 
                                                    <input type="submit" name="submit" value="Submit">
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