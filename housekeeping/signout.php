<?php 
session_start();
include("../management/config.php");
include("../management/function.php");
session_destroy();
header("Location: ../login.php");



?>