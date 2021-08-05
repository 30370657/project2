<?php 
session_start();
include("config.php");
include("function.php");
session_destroy();
header("Location: ../login.php");



?>