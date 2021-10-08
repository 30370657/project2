<?php 

function check_login($con){
    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        $query = "select * from user where id='$id' limit 1";
        $user_data = mysqli_fetch_array(mysqli_query($con, $query));
        return $user_data;
    }
   

}

function getById($con, $id){
    $query = "select * from user where id ='$id' limit 1";
    $data = mysqli_fetch_array(mysqli_query($con,$query));
    return $data;

}





?>