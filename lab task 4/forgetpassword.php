<?php
    session_start();

    if(isset($_POST['submit'])){

        $email = $_POST['confirmEmail'];
       

        if($email == ""){
            echo "Enter your email!";
        }
        elseif ($email==$_SESSION['email']) {
           echo "you will get a message!";
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forget Password</title>
</head>
<body>
    <table border="1" width="100%" cellspacing="0">
        <tr>
            <td align="right">
                <a href="home.php"><img src="logo.png" align="left" height="70px"></a>
                <a href="home.php"> Home </a> |             
                <a href="login.php"> Login </a> |               
                <a href="registration.php"> Registration </a>
            </td>
        </tr>
        <tr height = "400px">
            <td align="center">
                <form method="POST" action="">
                    <fieldset style="width: 20% " >
                        <legend>FORGET PASSWORD</legend>
                        <table >
                            <tr>
                                <td>Enter Email</td>
                                <td>:<input type="email" name="confirmEmail"></td>
                            </tr>
                            
                        </table>
                        <hr>
                        
                        <input type="submit" name="submit" value="Submit">
                        
                    </fieldset>
                </form>
                
            </td>
        </tr>
        <tr height = "30px">
            <td >
                <center> Copyright@2017 </center>
            </td>
        </tr>
    </table>
</body>
</html>