<?php 

function ae($con){

    $sql = "select * from course";
    $result = mysqli_query($con, $sql);
    $i = 0;
    foreach ($result as $key) {
        $res[$i] =  $key;
        $i++;
    }
    return json_encode($res);

    



    
}

?>