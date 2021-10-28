<?php 
session_start();
include("../management/config.php");
include("../management/function.php");

$user_data = check_login($con);
if(!($_SESSION['id'])){
    header("Location: ../login.php");
}




include("models/base.php")
?>
    <div class="info">
        <h1>Welcome to the housekeeping</h1>
        <h2>You can edit the information about users, courses and team from this place.</h2>
    </div>
    
</body>
</html>