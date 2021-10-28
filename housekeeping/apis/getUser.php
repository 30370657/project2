<?php 
    include("../../management/config.php");
    $k = $_GET['key'];
    $sql = "Select * from user where ID = $k limit 1";
    $res = mysqli_fetch_assoc(mysqli_query($con,$sql));
    

    if( $res == 0){
        $res['ID']="";
        $res['username'] = " ";
        $res['password'] = " ";
            }
?>

<label for="Username">Username</label>
<input type="text" name="username" value='<?php echo $res['username']?>'>
<label for="Password">Password</label>
 <input type="password" name="pword1" >
 <input type="password" name="pword2" >
<input type="submit" name="Delete" value="Delete">
<br><br>
