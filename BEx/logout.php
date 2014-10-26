<?php
  session_start();
  include('database.php');
  if (isset($_SESSION['username'])) {
  	$db=mysqli_connect($host,$user,$pass,$db);
  	$query="INSERT INTO bookdetails (lastseen) values(now())";
	$result=mysqli_query($db,$query);
	mysqli_close($db);
    $_SESSION = array();

    session_destroy();
  }
echo 'you have succesfully logged out :)' . '<br>';
header('Location:/securimage/mlogin.php');
exit();
?>
