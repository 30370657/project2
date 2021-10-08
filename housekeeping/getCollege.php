<?php 
    include("../management/config.php");
    $k = $_GET['key'];
    $sql = "Select * from college where ID = $k limit 1";
    $res = mysqli_fetch_assoc(mysqli_query($con,$sql));
    

    if( $res == 0){
        $res['ID']="0";
        $res['Name'] = " ";
        $res['ABN'] = " ";
        $res['Location'] = " ";
        $res['link'] = " ";
        $res['CIdentifier'] = " ";
    }
?>

<label for="CollegeName">College Name</label>
<input type="text" name="colName" value='<?php echo $res['Name']?>'>
<label for="ABN">ABN</label>
 <input type="text" name="abn" value='<?php echo $res['ABN']?>'>
<label for="Address">Address</label>
<input type="text" name="location" value='<?php echo $res['Location']?>'>
<label for="Link">Link</label>
<input type="text" name="link" value='<?php echo $res['link']?>'>
<label for="CIdentifir">College Identifier</label>
<input type="text" name="cidentifier" value='<?php echo $res['CIdentifier']?>' >
<input type="submit" name="Delete" value="Delete">
<br><br>


