<?php
include('database.php');
session_start();
if(isset($_POST['cbupdate'])){
$db=mysqli_connect($host,$user,$pass,$db);
$cost=mysqli_real_escape_string($db,$_POST['cost']);
$ndesc=mysqli_real_escape_string($db,$_POST['ndesc']);
$ncond=mysqli_real_escape_string($db,$_POST['lb']); 
$nstat=mysqli_real_escape_string($db,$_POST['cond']);
$bkid=mysqli_real_escape_string($db,$_POST['bkid']);

$query2="UPDATE bookdetails SET status='".$nstat."' where book_id='".$bkid."'";
$result2=mysqli_query($db,$query2); 
$query2="UPDATE bookdetails SET cond='".$ncond."' where book_id='".$bkid."'";
$result2=mysqli_query($db,$query2); 
if(!empty($ndesc))
{
$query2="UPDATE bookdetails SET description='".$ndesc."' where book_id='".$bkid."'";
$result2=mysqli_query($db,$query2); 
}
if(!empty($cost))
{
$query2="UPDATE bookdetails SET cost='".$cost."' where book_id='".$bkid."'";
$result2=mysqli_query($db,$query2); 
}
header('Location:home.php');
}
?>
