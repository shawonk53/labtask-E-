<?php
    session_start();

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "" || $password == ""){
            echo "null submission...";
        }else{
           

            if($username == $_SESSION['username'] && $password == $_SESSION['password']){
                $_SESSION['flag'] = true;
                header('location: dashboard.php');
            }else{
                echo "invalid user";
            }
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
                        <legend>LOGIN</legend>
                        <table >
                            <tr>
                                <td>User Name</td>
                                <td>:<input type="text" name="username"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:<input type="password" name="password"></td>
                            </tr>
                        </table>
                        <hr>
                        <input type="checkbox" name="">Remember Me
                        <br>
                        <input type="submit" name="submit" value="Submit">
                        <a href="forgetPassword.php">Forget Password?</a>
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