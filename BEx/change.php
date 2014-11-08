<?php
session_start();
include('database.php');
if(isset($_POST['changepassword'])){
$db=mysqli_connect($host,$user,$pass,$db);
$oldpassword=mysqli_real_escape_string($db,$_POST['oldpassword']);
$newpassword1=mysqli_real_escape_string($_POST['newpassword']);
$newpassword2=mysqli_real_escape_string($_POST['newpassword1']);
$c=0;
if($newpassword1==$newpassword2){
$query="SELECT password FROM login WHERE username='".$_SESSION['username']."' ";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(sha1($oldpassword)==$row['password']){
$query2="UPDATE login SET password=SHA('$newpassword1') where username='".$_SESSION['username']."'";
$result2=mysqli_query($db,$query2); 
}
else
echo 'entered old password is incorrect';
}	
else
echo 're-entered password does not match';
}
?>

