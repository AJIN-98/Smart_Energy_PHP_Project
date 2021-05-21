<?php
include 'connection.php';
session_start();
$lasturl=$_SERVER['HTTP_REFERER'];

if( isset($_SESSION['admin'])){

    $name =$_POST['name'];
    $address =$_POST['address'];
    $contact = $_POST['contact'];
    $email =$_POST['email'];
    $consumercode =$_POST['consumerid'];
    $passcode =$_POST['password'];


    $sql="INSERT INTO `consumerdetails`(`name`, `address`, `emailid`, `consumernumber`, `phone`) VALUES ('$name','$address','$email','$consumercode','$contact')";
    $sql2="INSERT INTO `user`(`username`, `passcode`, `consumerid`, `type`) VALUES ('$email','$passcode','$consumercode',1)";
    $conn->query($sql);
    $conn->query($sql2);



    
    header('location:'.$lasturl.'?out=1');






}
else{
    header('location:'.$lasturl.'?out=2');
}



?>