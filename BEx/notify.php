<?php
include('database.php');
session_start();
if(isset($_POST['ping'])){

$db=mysqli_connect($host,$user,$pass,$db);
$message=htmlspecialchars(stripslashes(trim(mysqli_real_escape_string($db,$_POST['message']))));

$sender=$_SESSION['username'];
$receiver=mysqli_real_escape_string($db,$_POST['receiver']); 
if(!empty($message)){
$query="INSERT INTO notification (receiver,sender,message) values('$receiver','$sender','$message')";
$result=mysqli_query($db,$query);
echo 'Message sent';}
else
echo 'Please enter a Message.Message not sent :(';
}

?>
