<?php 
include('database.php');
$dbc = mysqli_connect($host,$user,$pass,$db)
or die('error connecting to mysql server');
$username=mysqli_real_escape_string($dbc,$_GET['r']);

$query4="SELECT*FROM login where username='$username'";
$result4=mysqli_query($dbc,$query4)
or die('error querying 4');
while($row=mysqli_fetch_array($result4)){
if($row['verified']==mysqli_real_escape_string($dbc,$_GET['cc'])){
$query="UPDATE login SET verified='yes'";
$result=mysqli_query($dbc,$query); 
}

}	
header('Location:/securimage/mlogin.php');
?>