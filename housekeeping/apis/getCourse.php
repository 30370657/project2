<?php 
    include("../../management/config.php");

    $k = $_GET['key'];
    $sql = "Select * from course where ID = $k limit 1";
    $res = mysqli_fetch_assoc(mysqli_query($con,$sql));

    $collegeSql = "Select * from college";
    $collegeData =mysqli_query($con,$collegeSql);
    
    

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
<select name="CollegeID" >
    
    <?php 
        foreach($collegeData as $data){ var_dump($data)?>
            <option value='<?php echo $data['ID']?>' <?php if($data['ID']==$res['College ID']){echo "selected";}?>><?php echo $data['Name']; if($data['ID']==$res['College ID']){echo "(Current College)";}?> </option> 
        <?php } ?>

    
    
</select>
<input type="submit" name="Delete" value="Delete">
<br><br>


