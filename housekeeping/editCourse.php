<?php 
session_start();
include("../management/config.php");
include("../management/function.php");

$user_data = check_login($con);
if(!($_SESSION['id'])){
    header("Location: ../login.php");
}




if(isset($_POST['signout'])){
    session_destroy();
    header("Location: #");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/css/style.css">
    <title>Housekeeping</title>
</head>
<body>
<header>
        <img src="../media/image/logo.jpg" alt="Logo" class="logo">
        <div class="moto">
            <h3>CareerGro Australia</h3> <br>
            <h4> 
                Plan For Better Future <br> 
                Educational Consultants
            </h4>
        </div>

        <nav>
            <a href="../index.php">Home</a>
            <a href="../about.php">About Us</a>
            <a href="../ae.php">Educational Agents</a>
            <a href="../ea.php">Australian Education</a>
            <a href="../contact.php">Contact</a>
            
            <a class="active" href="signout.php" style="float:right">Sign Out </a>
        </nav>


    </header>
    <div class="vnav">
        <div class="nav-item">
            
            <a href="editCourse.php">Course Editor</a><br>
            <a href="teamEdit.php">Team Info </a><br>
            <a href="editUser.php">Settings</a><br>
        </div>
    </div>
    
    <div class="createData">
        <form action="" method="post">
        <label for="CourseName">Course Name</label>
        <input type="text" name="cName">
        <label for="Description">Description</label>
        <input type="text" name="desc">
        <label for="Cost">Cost</label>
        <input type="text" name="cost"><br><br>
        <label for="CollegeName">College Name</label>
        <input type="text" name="colName">
        <label for="ABN">ABN</label>
        <input type="text" name="abn">
        <label for="Address">Address</label>
        <input type="text" name="location">
        <label for="Link">Link</label>
        <input type="text" name="link">
        <label for="CIdentifir">College Identifier</label>
        <input type="text" name="cidentifier"><br><br>
        <input type="submit" name="submit" value="Add Data">

        </form>
        
    </div>


    <div class="dataEdit">
        
    </div>
    
</body>
</html>

<?php 
    if(isset($_POST['submit'])){
        echo $_POST['cName'];
    }

?>