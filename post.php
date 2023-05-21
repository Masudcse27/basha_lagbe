<?php
include('template/check_login.php');
$cat=$_POST['category'];
$loc=$_POST['Location'];
$rant=$_POST['rant'];
$u_id=$_SESSION['UserId'];
if(isset($_POST['details'])){
    $det=$_POST['details'];
    $ins="INSERT INTO house VALUES(NULL,'$u_id','$cat','$loc','now()','$rant',1,'$det')";
    if(mysqli_query($con,$ins)){
        $get_id_sql="SELECT max(post_id) AS post_id FROM `house` WHERE user_id='$u_id'";
        $pp_id=mysqli_fetch_assoc(mysqli_query($con,$get_id_sql));
        $p_id=$pp_id["post_id"];
        $t_image=count($_FILES['image']['name']);
        $i=0;
        while($i<$t_image){
            $img_name=$_FILES['image']['name'][$i];
            $img_tmp=$_FILES['image']['tmp_name'][$i];
            $img_loc="images/housePic/".$img_name;
            move_uploaded_file($img_tmp,$img_loc);
            $img_ins="INSERT INTO house_pic VALUES('$p_id','$img_loc')";
            mysqli_query($con,$img_ins);
            $i+=1;
        }
        header("location: profile.php");
    }
    else{
        
    }
}
else{
    $pins="INSERT INTO `parking` VALUES (NULL,'$u_id','$cat','$loc',now(),'$rant',1)";
    if(mysqli_query($con,$pins)){
        $get_id_sql="SELECT max(post_id) AS post_id FROM `parking` WHERE user_id='$u_id'";
        $pp_id=mysqli_fetch_assoc(mysqli_query($con,$get_id_sql));
        $p_id=$pp_id["post_id"];
        $t_image=count($_FILES['image']['name']);
        //echo $t_image;
        //echo $p_id;
        $i=0;
        while($i<$t_image){
            $img_name=$_FILES['image']['name'][$i];
            $img_tmp=$_FILES['image']['tmp_name'][$i];
            $img_loc="images/parkingPic/".$img_name;
            move_uploaded_file($img_tmp,$img_loc);
            $img_ins="INSERT INTO parking_picture VALUES('$p_id','$img_loc')";
            mysqli_query($con,$img_ins);
            $i+=1;
        }
         header("location: profile.php");
    }
    else{
        
    }
}

?>