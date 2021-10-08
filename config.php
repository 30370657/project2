<?php 
    $host="fdb32.awardspace.net";
    $username ="3909177_project";
    $pwd = "CareerGro@1324";
    $db = "3909177_project";
    try {
        $con = mysqli_connect($host, $username,$pwd,$db);
    } catch (\Throwable $e) {
       return print_r($e);
    }

?>