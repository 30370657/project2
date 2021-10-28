<?php
ob_start();


use FFI\CData;

include("apis/college.php");
$userSql = "Select * from user";

$user = mysqli_query($con,$userSql);






include("models/base.php")
?>
    
 

<?php 
    if(isset($_POST)){
       

        if(isset($_POST['Add'])){
            $username = $_POST['username'];
            $pword =  $_POST['pword1'];
            $pword2 = $_POST['pword2'];
           
           
            if($pword == $pword2){
                $pword = password_hash($pword2, PASSWORD_DEFAULT);

                try {
                
               
                    $sql="INSERT INTO `user`( `username`, `password`) VALUES ('$username', '$pword')";
                    
                    
                    if(mysqli_query($con,$sql)){
                       
                       refresh();
                       
                       
                   }
                    
                } catch (Exception $th) {
                    print"<script>alert('error with passcode')";
                    echo $e->getMessage();
                }

            }
        
            
            
        }elseif(isset($_POST['Update'])){
            $username= $_POST['username'];
            $pword =  $_POST['pword1'];
            $pword2 = $_POST['pword2'];
            $id = $_POST['selected'];
           
            if($pword == $pword2){
                $pword = password_hash($pword2, PASSWORD_DEFAULT);
                $sql="Update `user` set `username` = '$username', `password`= '$pword' where `id` = '$id' ";
                if(mysqli_query($con, $sql)){
                
                refresh();
                

            }else{
                print"<script>alert('Password Not Matching')</script>";
            }
    
            }
                       
                
        }elseif(isset($_POST['Delete'])){
            $ID = $_POST['selected'];
            $sql="Delete FROM user where id = $ID";
            if(mysqli_query($con, $sql)){
               
                
                refresh();
                
                
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
            
            url:'apis/getUser.php',
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
                    foreach($user as $cData){
                    
                        print"<option value=". $cData['id'].">".$cData['username']."</option>";
                    }
                    
                
                ?>
                
            </select>
            <div id="forms">
                <label for="username">Name</label>
                <input type="text" name="username" >
                <label for="Password">Password</label>
                <input type="password" name="pword1" >
                <input type="password" name="pword2" >
                
            </div>

            <input type="submit" id="btn" name="Add" value="Add">
            
                
        
                
            
            

        </form>
        
        
    </div>


    <div class="dataEdit">
        
    </div>
    
</body>
</html>