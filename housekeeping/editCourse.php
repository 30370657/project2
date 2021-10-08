<?php

use FFI\CData;

session_start();
include("../management/config.php");
include("../management/function.php");

$user_data = check_login($con);
if(!($_SESSION['id'])){
    header("Location: ../login.php");
}

$collegeSql = "Select * from college";
$courseSql = "Select * from course";


$collegeData =mysqli_query($con,$collegeSql);
$courseData = mysqli_query($con,$courseSql);




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
    <link rel="stylesheet" href="../style/css/bootstrap.css">
    <link rel="stylesheet" href="../style/css/style.css">
    
    <title>Housekeeping</title>
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
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
            
            <a href="editCollege.php">College Editor</a><br>
            <a href="editCourse.php">Course Info </a><br>
            <a href="editUser.php">Settings</a><br>
        </div>
    </div>
    
    <div class="createData">
        <h2>Course Data</h2>
        <form action="" method="post">

            <select name="selected" id="dropDownSelect" onchange="checkCollege(this.value)">
                <option value="0">New</option>
                <?php 
                    foreach($courseData as $cData){
                    
                        print"<option value=". $cData['ID'].">".$cData['Name']."</option>";
                    }
                    
                
                ?>
                
            </select>
            <div id="forms">
                <label for="CollegeName">Course Name</label>
                <input type="text" name="couName">
                <label for="Desc">Desc</label>
                <input type="text" name="desc">
                <label for="Cost">Cost</label>
                <input type="text" name="Cost">
                <label for="College ID">College ID</label>
                <select name="CollegeID">
                    <?php 
                        foreach($collegeData as $cData){
                        
                            print"<option value=". $cData['ID'].">".$cData['Name']."</option>";
                        }
                        
                    
                    ?>

                    </select>
                
                <br><br>

            </div>

            <input type="submit" id="btn" name="Add" value="Add">
            
                
        
                
            
            

        </form>
        
        
    </div>


    <div class="dataEdit">
        
    </div>
    
</body>
</html>

<?php 
    if(isset($_POST['Add'])){
        try {
            
           $couName= $_POST['couName'];
           $desc =  $_POST['desc'];
         
           $Cost = $_POST['Cost'];
           $CId = $_POST['CollegeID'];
           
            $sql="INSERT INTO `course`( `Name`, `Desc`, `Cost`, `College ID`) VALUES ('$couName', '$desc',' $Cost', '$CId')";
            
           if(mysqli_query($con,$sql)){
               echo "<script>alert('success')</script>";
               header("Refresh:0");
           }
            
        } catch (Exception $th) {
            print"<script>alert('hi')";
            echo $e->getMessage();
        }
        
    }elseif(isset($_POST['Update'])){
        print"<script>alert('Error')</script>";
    }


?>


<script>
    function checkCollege(ind){
        var p = ind

        if (p == 0) {
            $("#btn").val("Add");
            
        }
        
        $.ajax({
            
            url:'getCourse.php',
            method:'POST',
            data:{'key' : p },
            success:function(data){
                $("#forms").html(data);
                if (p != 0){
                    $("#btn").val("Update");
                    $("#btn").attr('name','Update');
                }else{
                    $("#btn").val("Add");
                    $("#btn").attr('name','Add')
                }
                
               

            }
        });
      
    }
</script>