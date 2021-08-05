<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/css/style.css">
</head>
<body>

    <header>
        <img src="media/image/logo.jpg" alt="Logo" class="logo">
        <div class="moto">
            <h3>CareerGro Australia</h3> <br>
            <h4> 
                Plan For Better Future <br> 
                Educational Consultants
            </h4>
        </div>
        
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="ae.php">Educational Agents</a>
            <a href="ea.php">Australian Education</a>
            <a href="contact.php">Contact</a>
            <a class="active" href="login.php" style="float:right">Sign In </a>
        </nav>


    </header>


    <form class="login" method="POST">
       <b> 
           <label for="username">Username</label><br>
            <input type="text" name="uname"> <br>
            <label for="password">Password</label><br>
            <input type="password" name="pword"> <br>
            <input class="loginBtn" type="submit" value="Login">
        </b>
    </form>
</body>
</html>
<?php 
session_start();
include("management/config.php");
include("management/function.php");
 
 $username = $password = "";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $username = $_POST['uname'];
        $password = $_POST['pword'];
        $sql = "select * from user where username='$username' ";
        
        $result = mysqli_query($con, $sql);
        $res = mysqli_fetch_array($result);
        if ($res >= 1) {
            $updt = "UPDATE `user` SET `last_login`=CURRENT_TIMESTAMP() where username='$username' and password = '$password'";
            if (password_verify($password ,$res[2])) {
                $_SESSION['id'] = $res['id'];
                header("Location: management/housekeeping.php") ;
            }
           
        }
        else{
            echo "<script> alert('Wrong username or password')</script>";
        }
        
    }

//test
?>
