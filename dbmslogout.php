<?php 

//include 'dbmscore.php';
session_start();
session_destroy();
header('Location: dbmsmain.php');

?>