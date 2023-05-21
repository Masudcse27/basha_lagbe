<?php
include('../template/check_login.php');
$p_id=$_GET['id'];
$p_type=$_GET['post-type'];
$delete_quirey;
if($p_type=="parking"){
    $delete_quirey="UPDATE parking SET active_status=false where post_id='$p_id'";
}
else{
    $delete_quirey="UPDATE house SET active_status=false where post_id='$p_id'";
}
mysqli_query($con,$delete_quirey);
header("location: ../profile.php");
?>