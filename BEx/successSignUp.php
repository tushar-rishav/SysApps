<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Sign up Successful</title>
<meta charset="UTF-8" />
<style>
   #login,#signup{
   	margin-top:10px;
	margin-bottom: 20px;
	color:white;
	background:orange;
	border-radius: 7px;
	box-shadow:3px 3px 3px orange offset;
	padding: 5px;
	height: 35px;
	width:20%;
	border-style: solid;
	border-color: orange;
  }
  #login:hover,#signup:hover{
  	color:white;
    cursor: pointer;
	box-shadow:3px 3px 5px #55aa77 inset;
	border-style: none;
	background-color: green;
  }
  body{
  	background:url('images/hill.jpg'); 
  	color:black;
  	background-size:100% 200%; 
  }
 p{
 	color:orange;
 	font-family:monaco;
 	font-weight: bold;
 }
</style>
</head>

<body>

<center>
<h1>Hello&nbsp;<?php echo $_SESSION["user"] ?> </h1><br><h2>You have successfully signed up</h2><?php echo PHP_EOL ; ?>
<h2>Welcome to&nbsp;<i>The Facepick</i></h2><br>
<p>Please proceed to continue</p>
<a href="home.html" ><button id="login">Login</button></a><br>
<a href="signup.php" ><button id="signup">Sign Up</button></a>
</center>

<?php session_destroy(); session_unset(); ?>

</body>
