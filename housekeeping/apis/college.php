<?php 
    session_start();
    include("../management/config.php");
    include("../management/function.php");
    
    $user_data = check_login($con);
    if(!($_SESSION['id'])){
        header("Location: ../login.php");
    }
    
?>