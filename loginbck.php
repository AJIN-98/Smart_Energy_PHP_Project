<?php
include "connection.php";


$myusername = mysqli_real_escape_string($conn,$_POST['username']);
$mypassword = mysqli_real_escape_string($conn,$_POST['passcode']); 
$lasturl=$_SERVER['HTTP_REFERER'];



$sql = "SELECT * FROM `user` WHERE `username`='$myusername' AND `passcode`='$mypassword'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$number=  mysqli_num_rows($result);

if( $number == 0) {
    header("location:".$lasturl."?out=1");

}
else{
    if($row["type"]==0){
        header("location:admin-dashboard/admin_dash.php");
        session_start();
        $_SESSION["admin"]="admin";





    }
    else{
        header("location:user-dashboard/user_dash.php");
        session_start();
        $_SESSION["consumerid"]=$row["consumerid"];



    }
}








?>