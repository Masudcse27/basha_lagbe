<?php
session_start();
$fst_n=$_POST['first_name'];
$lst_n=$_POST['last_name'];
$NID_nnumber=$_POST['nid'];
$emil=$_POST['email'];
$pass=$_POST['Password'];
$num=$_POST['contruct'];
$name=$fst_n." ".$lst_n;
$con=mysqli_connect('localhost','root','','basha_lagbe');
$sql= "SELECT * FROM users WHERE user_NID='$NID_nnumber'";
//$sqlq=mysqli_query($con,$sql)
$result=mysqli_num_rows(mysqli_query($con,$sql));
//echo $result;
if($result==1){
    $_SESSION['NID_match']=1;

    header("location: signup.php");
}
$sql= "SELECT * FROM users WHERE Email='$emil'";
$result=mysqli_num_rows(mysqli_query($con,$sql));
if($result==1){
    $_SESSION['Email_match']=1;
    header("location: signup.php");
}
$numbeofpost=0;
$sql_in="INSERT INTO users VALUES(NULL,'$name','$NID_nnumber','$emil','$pass','$num',0)";
if(!mysqli_query($con,$sql_in)){
    $_SESSION['Reg_error']=1;
    header("location: registration.php");
}
else{
    $_SESSION['reg_suc']=1;
    header("location: index.php");
}
