<html>



<?php
include "database.php";
$roll=$pass=$rolle=$passe="";
session_start();
$name="";
$ip=$_SERVER['REMOTE_ADDR'];
$usra=$_SERVER['HTTP_USER_AGENT'];
$dmn=$_SERVER['HTTP_HOST'];
$click=0;

	
	$con=mysqli_connect($host,$user,$pass,$db)
or die('error connecting to mysql server');
	$checkip = mysqli_query($con,"SELECT * from login WHERE ip = '".$ip."'");

		
if(isset($_SESSION['username']))
	header("Location:/securimage/home.php");
else
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$roll=htmlspecialchars(trim($_POST["roll"]));

	$pass=sha1($_POST["pass"]);

	

	$dat=mysqli_query($con,"select * from login where username='".$roll."'");

	if($row=mysqli_fetch_array($dat))
	{
		if($row['password']!=$pass) { $passe="incorrect password for username: ".$roll; mysqli_close($con);   }

		else if($row['verified']!='yes')
		{
			$rolle="username: ".$roll." is not verified.Please verify your account";
		}
		else
		{
			
			session_start();
			$_SESSION['username']=$roll;
			
			header("Location:/securimage/home.php");
		}
	}

	else { $rolle="username: ".$roll." does not exist";  }

}



?>


<head>
<title>Student Details</title>
<link rel="stylesheet" href="css/style.css">
<script>
function fadeIn(id,val){
// ID of the element to fade, Fade value[min value is 0]
  if(isNaN(val)){ val = 0;}
  document.getElementById(id).style.opacity='0.'+val;
  //For IE
  document.getElementById(id).style.filter='alpha(opacity='+val+'0)';
  if(val<9){
    val++;
    setTimeout('fadeIn("'+id+'",'+val+')',90);
  }else{return;}

}
function start()
{
document.getElementById('body').style.display='none';
document.getElementById('menu').style.visibility='hidden';
fadeIn('hi',0);

setTimeout(function(){

    document.getElementById('menu').style.visibility='visible';
document.getElementById('start').remove();
document.getElementById('body').style.display='block';

    },1500); 
}
</script>
<script>
var l,i=30,j;
var m,n;
</script>
</head>
<body onload="start();" >

<div class="header">
<form id="menu">
<div class ="headbar" style="cursor:default;">
<div class ="headimg" style="background:#7D3200;width:100%;" id="h1">
</div><br>
Home
</div>
<div class ="headbar"  onmouseover='m=setInterval(function(){i=i+10;if(i<=100){document.getElementById("h2").style.width=i+"%";}else{clearInterval(m);}},30);' onmouseout='clearInterval(m);i=30;document.getElementById("h2").style.width="20%";' onclick="window.location.assign('Register.php');">
<div class ="headimg" id="h2">
</div><br>
Register
</div>
<div class ="headbar"  onmouseover='m=setInterval(function(){i=i+10;if(i<=100){document.getElementById("h3").style.width=i+"%";}else{clearInterval(m);}},30);' onmouseout='clearInterval(m);i=30;document.getElementById("h3").style.width="20%";' onclick="alert('Designed and Developed by:\n\nDelta\nNit Trichy\n');">
<div class ="headimg" id="h3">
</div><br>
About
</div>
</div>
</form>
<center>
<form id="start">

<img src="img/logo.png"  id="hi" style="margin-top:100px;"><br>

</form>
<form id="body" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<div class="login">
<div class="avatar"></div>
<br>
<font color="#00297A"><h2>Book-Kart Login</h2></font>
<input type="text" name="roll" placeholder="Username" style="height: 40px;width:200px;" maxlength="9"/><br><span style="color:red"> <?php echo $rolle ?>   </span><br>
<input type="password" name="pass" placeholder="Password" style="height: 40px;width:200px;"/>
<br><span style="color:red"> <?php echo $passe ?>   </span><br>
<input type="submit" style='width:90px;height:30px;background:#ff0000;' value="Login">
</div>

</form>

</center>
</body>
</html>