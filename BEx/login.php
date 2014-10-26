<?php
session_start();
?>
<?php
    include("database.php");
	$db=mysqli_connect($host,$user,$pass,$db);
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	
	$check="SELECT * FROM login WHERE username='".$username."' and password=SHA('".$password."')";
	$result=mysqli_query($db,$check);
	$fetchdata=mysqli_fetch_array($result);
	
	if($fetchdata)
	{
	if($fetchdata['verified']=='yes')
	{$_SESSION["username"]=$fetchdata['username'];
	setcookie('username', $fetchdata['username'], time() + (60 * 60 * 24 * 3)); //three days
	echo 'Logged in';
  
	header('Location:/securimage/home.php');
	}
	else echo 'please verify your account.Login failed :(';	
	}
	else
	{ 
    echo 'username and password invalid :(';
	}
	
	
    mysqli_free_result($result);
	mysqli_close($db);
	
?>
