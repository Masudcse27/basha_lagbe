<?php
session_start();
//session_destroy();
if(!isset($_SESSION['logonSuccess'])){
    header("location: index.php");
}
$con=mysqli_connect('localhost','root','','basha_lagbe');
?>