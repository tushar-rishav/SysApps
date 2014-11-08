<?php 
error_reporting(~E_WARNING);
require_once 'securimage.php';
       
include "database.php";
require_once 'class.phpmailer.php';
session_start();
if(isset($_SESSION['username']))
  header("Location:/securimage/home.php");
?>

<html>
<head>
<title>Student Details</title>
<link  rel="stylesheet" type="text/css" href="css/style.css">
<script>
var l,i=30,j;
var m,n;
</script>
</head>
<body>


<?php
// define variables and set to empty values
$dbpass=$pass;
$nameErr = $rollErr = $genderErr = $tcapt=$captErr=$mob=$mobErr=$maile=$mailErr=$addr=$addrErr=$uname=$unameErr=$passErr = $cpassErr = "";
$name = $roll = $gender = $pass = $cpass = $dept= $checkroll = "";
$err=0;

function generateRandomString($length = 40) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$dept=$_POST["dept"];
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
  $err=1;
   } else {
     $name = test_input($_POST["name"]);
$err=0;
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
$err=1;
     }
   }
   
if(empty($_POST["roll"]))
{
$rollErr="Enter your RollNo";
$err=1;
}else
{
$roll = test_input($_POST["roll"]);
if($err!=1)
$err=0;
if(!ctype_digit($roll) || strlen($roll)!=9)
{
$rollErr="Enter Valid RollNo.";
$err=1;
$roll="";
}
$con=mysqli_connect($host,$user,$dbpass,$db);
$res=mysqli_query($con,"select * from signup ");
while($row=mysqli_fetch_array($res))
{
if($row['rollnumber']==$roll)
  {  $err=1;
  $roll="";
  $rollErr="Rollnumber already exists";
}


}
}

if(empty($_POST["mob"]))
{
$mobErr="Enter your Mobile No.";
$err=1;
}else
{
$mob = test_input($_POST["mob"]);
if($err!=1)
$err=0;
if(!ctype_digit($mob) || strlen($mob)!=10)
{
$mobErr="Enter Valid Mobile No.";
$err=1;
$mob="";
}
}


if(empty($_POST["email"]))
{
$mailErr="Enter your Email";
$err=1;
}else
{
$maile = test_input($_POST["email"]);
if($err!=1)
$err=0;

if (!filter_var($maile, FILTER_VALIDATE_EMAIL)) {
  $mailErr = "Invalid email format"; 
  $err=1;
$maile="";
}

}

if(empty($_POST["uname"]))
{
$unameErr="Enter a Username";
$err=1;
}else
{
$uname = test_input($_POST["uname"]);
if($err!=1)
$err=0;
$con=mysqli_connect($host,$user,$dbpass,$db);
$res=mysqli_query($con,"select * from signup ");
while($row=mysqli_fetch_array($res))
{
if($row['username']==$uname)
  {  $err=1;
  $uname="";
  $unameErr="Username already exists";
}


}


}


if(empty($_POST["add"]))
{
$addrErr="Enter Your Address";
$err=1;
}else
{
$addr = test_input($_POST["add"]);
if($err!=1)
$err=0;


}


if(empty($_POST["pass"]))
{
$passErr="Enter a Password";
$err=1;
}else
{
$pass = test_input($_POST["pass"]);
if($err!=1)
$err=0;
if (!ctype_alnum($pass)) {
       $passErr = "Only letters and  numbers allowed"; 
$pass="";
$err=1;
}
}


if(empty($_POST["tcaptcha"]))
{
$captErr="Enter the Captcha";
$err=1;
}else
{

$tcapt = test_input($_POST["tcaptha"]);
if($err!=1)
$err=0;

$securimage = new Securimage();

if ($securimage->check(@$_POST['tcaptcha']) == false) {
$capt="";
$captErr="Incorrect Captcha";
$err=1;

}

}


if(empty($_POST["cpass"]))
{
$cpassErr="Enter Password Again.";
$err=1;
}else
{
$cpass = test_input($_POST["cpass"]);
if($err!=1)
$err=0;
if($pass!=$cpass)
{
$cpass="";
$err=1;
$cpassErr="Passwords donot match";
}
}


   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
$err=1;
   } else {
     $gender = test_input($_POST["gender"]);

if($err!=1)
$err=0;

   }



if($err==0 )
{
  $cc=generateRandomString();

$query1="INSERT INTO signup(username,name,rollnumber,email,gender,department,mobilenumber,address) values('$uname','$name','$roll','$maile','$gender','$dept','$mob','$addr')";
$result=mysqli_query($con,$query1)
or die('error querying 2');
@$query2="INSERT INTO login(username,password,verified) values('$uname','".sha1($pass)."','$cc')";
$result2=mysqli_query($con,$query2);
//mysqli_close($dbc);


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
// or try these settings (worked on XAMPP and WAMP):
// $mail->Port = 587;
// $mail->SMTPSecure = 'tls';

$mail->Username = "book.kart123@gmail.com";
$mail->Password = "Bookkart123";

$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

$mail->From = "Book.kart123@gmail.com";
$mail->FromName = "Book-kart";

$mail->addAddress("$maile","User 1");


$mail->Subject = "Book-kart verification link";
$link="http://delta.nitt.edu/~ash/securimage/verify.php?r=".$uname."&cc=".$cc."";
$mail->Body = "Hi".$name.",<br /><br />This is from Book-kart.Thank you for registering .To verify your account please <a href=".$link.">Click here to verify your account </a>";

if(!$mail->Send())
	echo "Message was not sent     <br> Error ".$mail->ErrorInfo." <br/> <a target='_blank' href='rmail.php?code=".$cc."&user1=".$uname."&email=".$maile."'>Resend mail</a>";
else
    echo "Verification message has been mailed";
  
}
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


?>





<form id="menu">
<div class="header">
<div class ="headbar" onmouseover='m=setInterval(function(){i=i+10;if(i<=100){document.getElementById("h2").style.width=i+"%";}else{clearInterval(m);}},30);' onmouseout='clearInterval(m);i=30;document.getElementById("h2").style.width="20%";' onclick="window.location.assign('home.php');">
<div class ="headimg" id="h2">
</div><br>
Home
</div>
<div class ="headbar" style="cursor:default;">
<div class ="headimg" style="background:#7D3200;width:100%;" id="h1">
</div><br>
Register
</div>
<div class ="headbar"  onmouseover='m=setInterval(function(){i=i+10;if(i<=100){document.getElementById("h3").style.width=i+"%";}else{clearInterval(m);}},30);' onmouseout='clearInterval(m);i=30;document.getElementById("h3").style.width="20%";' onclick="alert('Designed and Developed by:\n\nDelta\nNit Tirchy\n');">
<div class ="headimg" id="h3">
</div><br>
About
</div>


</div>
</form>

<form id="body" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<div class="Register">
<center><h1> Member Registration Form </h1><hr>

<table cellspacing="15px" cellpadding="6px">
<tr>
<td>
Name:</td><td><input type="text" name="name" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></td></tr>
<tr><td>
Username:</td><td><input type="text" name="uname" value="<?php echo $uname;?>">
<span class="error">* <?php echo $unameErr;?></span></td></tr>
<tr><td>
Roll No:</td><td><input type="text" name="roll" value="<?php echo $roll;?>">
<span class="error">* <?php echo $rollErr;?></span></td></tr>
<tr><td>
Department:</td><td>
<select name="dept">
<option <?php if($dept=="Architecture") echo "selected" ?>>Architecture</option>
<option <?php if($dept=="Chemical") echo "selected" ?>>Chemical</option>
<option <?php if($dept=="Civil") echo "selected" ?>>Civil</option>
<option <?php if($dept=="Computer") echo "selected" ?>>Computer</option>
<option <?php if($dept=="ECE") echo "selected" ?>>ECE</option>
<option <?php if($dept=="EEE") echo "selected" ?>>EEE</option>
<option <?php if($dept=="Instrumentation") echo "selected" ?>>Instrumentation</option>
<option <?php if($dept=="Metallurgy") echo "selected" ?>>Metallurgy</option>
<option <?php if($dept=="Mechanical") echo "selected" ?>>Mechanical</option>
<option <?php if($dept=="Production") echo "selected" ?>>Production</option>
</select>
</td></tr>

<tr><td>
Email:</td><td><input type="text" name="email" value="<?php echo $maile;?>">
<span class="error">* <?php echo $mailErr;?></span></td></tr>

<tr><td>
Address:</td><td><input type="text" name="add" value="<?php echo $addr;?>">
<span class="error">* <?php echo $addrErr;?></span></td></tr>

<tr><td>
Mobile No:<span style="float:right">+91</span></td><td><input type="text" name="mob" value="<?php echo $mob;?>">
<span class="error">* <?php echo $mobErr;?></span></td></tr>

<tr><td>
Sex:</td><td>
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female"> Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male"> Male
<span class="error">* <?php echo $genderErr;?></span>
</td></tr>
<tr><td>
Password:</td><td>
<input type="password" name="pass" value="<?php echo $pass;?>">
<span class="error">* <?php echo $passErr;?></span>
</td></tr>
<tr><td>
Confirm Password:</td><td>
<input type="password" name="cpass" value="<?php echo $cpass;?>">
<span class="error">* <?php echo $cpassErr;?></span></td></tr>
<tr><td>
  <a href="#" onclick="document.getElementById('captcha').src = 'securimage_show.php?' + Math.random(); return false"><font color="blue">[ Show Another Image ]</font></a>
 </td>
 <td>
 <img id="captcha" src="securimage_show.php" alt="CAPTCHA Image" />
 </td>
 </tr>
 <tr>
 <td></td>
 <td>
 <input type="text" name="tcaptcha" size="20" maxlength="6" /><span class="error">* <?php echo $captErr;?></span>
 </td>
 </tr>
</table>
<input type="Submit" value="Register">

</div>

</form>

</center>
</body>
</html>
