<?php 
    include("../management/config.php");
    $k = $_GET['key'];
    $sql = "Select * from course where ID = $k limit 1";
    $res = mysqli_fetch_assoc(mysqli_query($con,$sql));
    

    if( $res == 0){
        $res['ID']="0";
        $res['Name'] = " ";
        $res['Desc'] = " ";
        $res['Cost'] = " ";
        $res['College ID'] = " ";
        
    }
?>

<label for="CollegeName">Course Name</label>
<input type="text" name="couName" value='<?php echo $res['Name']?>'>
<label for="Desc">Desc</label>
 <input type="text" name="desc" value='<?php echo $res['Desc']?>'>
<label for="Cost">Cost</label>
<input type="text" name="Cost" value='<?php echo $res['Cost']?>'>
<label for="College ID">College ID</label>
<input type="text" name="College ID" value='<?php echo $res['College ID']?>'>
<br><br>


