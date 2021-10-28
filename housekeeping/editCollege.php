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





include("models/base.php")

?>

<?php 
    if(isset($_POST)){
       

        if(isset($_POST['Add'])){
            $colName= $_POST['colName'];
            $abn =  $_POST['abn'];
            $id = $_POST['selected'];
            $location = $_POST['location'];
            $link = $_POST['link'];
            $cidentifier = $_POST['cidentifier'];
        
            try {
                
               
                $sql="INSERT INTO `college`( `Name`, `ABN`, `Location`, `link`, `CIdentifier`) VALUES ('$colName', '$abn',' $location', '$link', '$cidentifier')";
                
               if(mysqli_query($con,$sql)){
                   
                   refresh();
                   
               }
                
            } catch (Exception $th) {
                print"<script>alert('hi')";
                echo $e->getMessage();
            }
            
        }elseif(isset($_POST['Update'])){
            $colName= $_POST['colName'];
            $abn =  $_POST['abn'];
            $id = $_POST['selected'];
            $location = $_POST['location'];
            $link = $_POST['link'];
            $cidentifier = $_POST['cidentifier'];
            $sql="Update `college` set `Name` = '$colName', `ABN`= '$abn' , `Location`= ' $location', `link`= '$link', `CIdentifier`='$cidentifier' where `ID` = '$id' ";
            if(mysqli_query($con, $sql)){
                
                refresh();
               

            }
           
                
        }elseif(isset($_POST['Delete'])){
            try{
                
                $ID = $_POST['selected'];
                $sql="Delete FROM college where ID = $ID";
                if(mysqli_query($con, $sql)){
                
                    
                    refresh();
                    
                }
            }catch (Exception $th) {
                print"<script>alert('". $th->getMessage()."')";
            }
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
            
            url:'apis/getCollege.php',
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
        <h2>College Data</h2>
        <form action="" method="post">

            <select name="selected" id="dropDownSelect" onchange="checkCollege(this.value)">
                
                <option value="0">New</option>
                <?php 
                    foreach($collegeData as $cData){
                    
                        print"<option value=". $cData['ID'].">".$cData['Name']."</option>";
                    }
                    
                
                ?>
                
            </select>
            <div id="forms">
                <label for="CollegeName">College Name</label>
                <input type="text" name="colName" >
                <label for="ABN">ABN</label>
                <input type="text" name="abn" >
                <label for="Address">Address</label>
                <input type="text" name="location" >
                <label for="Link">Link</label>
                <input type="text" name="link" >
                <label for="CIdentifir">College Identifier</label>
                <input type="text" name="cidentifier"  ><br><br>

            </div>

            <input type="submit" id="btn" name="Add" value="Add">
            
                
        
                
            
            

        </form>
        
        
    </div>


    <div class="dataEdit">
        
    </div>
    
</body>
</html>