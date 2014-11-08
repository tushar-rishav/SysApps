<?php
include('database.php');
session_start();
if(isset($_POST['remove'])){
$db=mysqli_connect($host,$user,$pass,$db);
$owner=$_SESSION['username'];
$rbkid=mysqli_real_escape_string($db,$_POST['bid']);
for($i=1;$i<4;$i++)
{
$result = glob ($owner."/".$owner.$rbkid.$i.".*");
if(file_exists($result[0]))
    	unlink($result[0]);
}

$query2="DELETE from bookdetails where book_id= $rbkid";
mysqli_query($db,$query2); 

//header('Location:/securimage/home.php');
}
?>
