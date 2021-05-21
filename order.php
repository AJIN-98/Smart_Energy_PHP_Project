<?php
include 'connection.php';
include 'mail/Mail.php';

$lasturl=$_SERVER['HTTP_REFERER'];

$consumerid=$_POST['consumerid'];
$blinkvalue = $_POST['blinkvalue'];
$month = date("F");
$year = date("Y");
$day = date("d");


$amount = $blinkvalue * 5;

$sql = "SELECT * FROM `consumerdetails` WHERE `consumernumber`='$consumerid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$number=  mysqli_num_rows($result);
$email=$row['emailid'];
$name=$row['name'];


$from = '<abc@gmail.com>';
$to = "<$email>";
$subject = 'Hi!';
$body = " Hai $name  \n  Your Monthly billed statement   \n Consumer id :$consumerid \n Month :$month  \n Amount : $amount\n ";
$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'abc@gmail.com',
        'password' => 'abc@123'
    ));

$mail = $smtp->send($to, $headers, $body);
   
if( $number > 0){
    $sql="INSERT INTO `orderid`(`month`, `year`, `consumernumber`, `totalamount`, `blinkingvalue`) VALUES ('$month','$year','$consumerid','$amount','$blinkvalue')";
    $conn->query($sql);
     header('location:'.$lasturl.'?out=1');

}
else{
    header('location:'.$lasturl.'?out=2');


}









?>