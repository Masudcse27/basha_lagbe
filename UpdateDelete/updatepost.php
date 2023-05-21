<?php
include('../template/check_login.php');
$p_id=$_POST['post_id'];
$p_type=$_POST['post_type'];
$cat=$_POST['category'];
$loc=$_POST['Location'];
$rant=$_POST['rant'];
$update_quirey;
if($p_type=="parking"){
    $update_quirey="UPDATE parking SET `Location`='$loc',category='$cat',rant='$rant' where post_id='$p_id'";
}
else{
    $datil=$_POST['datiles'];
    $update_quirey="UPDATE house SET `Location`='$loc',category='$cat',rant='$rant',datiles='$datil' where post_id='$p_id'";
}
mysqli_query($con,$update_quirey);
header("location: ../profile.php");
?>