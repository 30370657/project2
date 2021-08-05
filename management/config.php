<?php 
    $host="localhost";
    $username ="root";
    $pwd = "";
    $db = "test";
    try {
        $con = mysqli_connect($host, $username,$pwd,$db);
    } catch (\Throwable $e) {
       return print_r($e);
    }

?>