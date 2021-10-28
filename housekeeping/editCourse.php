<?php

ob_start();
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




include("models/base.php");


?>
  

<?php 
    if(isset($_POST['Add'])){
        try {
            
           $couName= $_POST['couName'];
           $desc =  $_POST['desc'];
            $ID = $_POST['selected'];
           $Cost = $_POST['Cost'];
           $CId = $_POST['CollegeID'];
           
            $sql="INSERT INTO `course`( `Name`, `Desc`, `Cost`, `College ID`) VALUES ('$couName', '$desc',' $Cost', '$CId')";
            
           if(mysqli_query($con,$sql)){
               
               refresh();
               
           }
            
        } catch (Exception $th) {
            print"<script>alert('hi')";
            echo $th->getMessage();
        }
        
    }elseif(isset($_POST['Update'])){
        try{

             $couName= $_POST['couName'];
            $desc =  $_POST['desc'];
                $ID = $_POST['selected'];
            $Cost = $_POST['Cost'];
            $CId = $_POST['CollegeID'];
            $sql="UPDATE `course` SET `Name`= '$couName', `Desc`='$desc', `Cost`='$Cost', `College ID`='$CId' WHERE `ID` = '$ID' ";
            if(mysqli_query($con,$sql)){
               
                refresh();
                
                

            }
        }catch(Exception $th){
            print"<script>alert('". $th->getMessage()."')";

        }
       
    }elseif(isset($_POST['Delete'])){
        try{    
            $ID = $_POST['selected'];
            $sql="Delete FROM course where `ID` = $ID";
            if(mysqli_query($con, $sql)){
            
               
                refresh();
                
            }
        }catch(Exception $th){
            print"<script>alert('". $th->getMessage()."')";
           
        }
    }

    


    function refresh(){
    
        header("Refresh:0");
        ob_end_flush();
    }
?>


<script>
    function checkCollege(ind){
        var p = ind
       

        if (p == 0) {
            $("#btn").val("Add");
            
        }
        
        $.ajax({
            
            url:'apis/getCourse.php',
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
                <label for="CouName">Course Name</label>
                <input type="text" name="couName">
                <label for="Desc">Desc</label>
                <input type="text" name="desc">
                <label for="Cost">Cost</label>
                <input type="text" name="Cost">
                <label for="College ID">College ID</label>
                <select name="CollegeID">
                    <?php 
                        foreach($collegeData as $Data){
                        
                            print"<option value=". $Data['ID'].">".$Data['Name']."</option>";
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