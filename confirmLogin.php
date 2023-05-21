<?php 
session_start();
$emil=$_POST['User'];
$pass=$_POST['Password'];
$con=mysqli_connect('localhost','root','','basha_lagbe');
$sql= "SELECT * FROM users WHERE Email='$emil' AND user_password='$pass'";
//$sqlq=mysqli_query($con,$sql)
$result=mysqli_num_rows(mysqli_query($con,$sql));

//echo $result;
if($result==1){
    
     $get_id=mysqli_fetch_assoc(mysqli_query($con,$sql));
     $u_id=$get_id['user_id'];
    // //echo $u_id;

     $_SESSION['UserId']=$u_id;
     $_SESSION['logonSuccess']=1;
    header("location: profile.php");
}
else{
    $_SESSION['loginErorr']=1;
    header("location: index.php");
}
?>