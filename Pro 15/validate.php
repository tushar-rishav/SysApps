<?php
session_start();

// define global variables and set to empty values
global $nameErr,$password,$passwordConfirm,$college,$email,$pin,$sex,$dept;
global $name,$passwordErr,$passwordConfirmErr,$collegeErr,$mobErr,$emailErr,$pinErr,$sexErr,$deptErr,$pid,$acco,$accoErr;
global $captcha_error,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9,$s10,$s11;

 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {  $s1=0;$s2=0;$s3=0;$s4=0;$s5=0;$s6=0;$s7=0;$s8=0;$s9=0;$s10=0;$s11=0;
   if (empty($_POST["name"]))
    {
     $nameErr = "Name is required";
     	 $s1=0;
    }
	 else
	 {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name))
	 {  $s1=0;
        $nameErr = "Only letters and white space allowed";
     }
	 else
	 $s1=1;
   }


   if (empty($_POST["email"]))
   {  $s2=0;
     $emailErr = "Please fill up your Email";

   }
	 else
	 $s2=1;

   if (empty($_POST["pin"]))
   {  $s8=0;
     $pinErr = "Address is required";

   }
   else
   $s8=1;

if (empty($_POST["acco"]))
   {  $s11=0;
     $pinErr = "Accomodation detail is required";

   }
   else
   $s11=1;

   if (empty($_POST["sex"]))
   {  $s9=0;
     $sexErr = "Please fill up your Gender";

   }
   else
   $s9=1;

   if (empty($_POST["dept"]))
   {  $s10=0;
     $deptErr = "Please fill up your Department";

   }
   else
   $s10=1;


   if (empty($_POST["password"])) {
     $s3=0;
     $passwordErr = "Password is required";
   }
   else
   $s3=1;

    if (empty($_POST["confirmpwd"]))
	{
	 		$s4=0;
     	$passwordConfirmErr = "Please confirm your Password";
    }
    else
	{
     $passwordConfirm = test_input($_POST["confirmpwd"]);
     // check if password matches
     if ($_POST["password"]!=$_POST["confirmpwd"])
	 		{
       $s4=0;
	   		$passwordConfirmErr = "Oops! Password mismatched.Try again!";
     }
	 else
	 $s4=1;
   }

  $s5=validateCaptcha();





  if (empty($_POST["mob"]))
     {
     $mobErr = "Please fill up your Mobile No.";
     $s7=0;
	 }
   else
   $s7=1;

   if (empty($_POST["college"]))
   {
     $s6=0;
      $collegeErr = "Please fill up your College";
   }
   else {
     $college = test_input($_POST["college"]);
	 	 $s6=1;
   }
 /*#####################  end of validation process #####################################################
###################### taking decisions ###############################################################*/

   if($s1&&$s2&&$s3&&$s4&&$s5&&$s6&&$s7&&$s8&&$s9&&$s10&&$s11)
   {
   	$email=$_POST["email"];
   	$password=$_POST["password1"];

	 $user='root';                          /**** establishing database connection****/
$pwd='';
$db='user';

$con=mysqli_connect("localhost",$user,$pwd,$db);

		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: ".mysqli_connect_error();
		  exit;
		  }

		  else
		{

			$check="SELECT count(*) FROM detail WHERE(email='".$_POST['email']."')";
			$result=mysqli_query($con,$check);
			$fetchdata=mysqli_fetch_array($result,MYSQLI_NUM);
			if($fetchdata[0]>0) // check if email already exists
			{
				echo "Invalid Registration.The email has already been registered.";
				exit;
			}

		 $name=mysql_escape_string($_POST["name"]);
		 $email=mysql_escape_string($_POST["email"]);
		 $password=mysql_escape_string($_POST["password"]);
		 $college=mysql_escape_string($_POST["college"]);
		 $mob=mysql_escape_string($_POST["mob"]);
     $pin=mysql_escape_string($_POST["pin"]);              /****this is actually an address****/
     $dept=mysql_escape_string($_POST["dept"]);
     $sex=mysql_escape_string($_POST["sex"]);

     $acco=mysql_escape_string($_POST["acco"]);


     $countQuery="SELECT COUNT(*) FROM detail WHERE pid IS NOT NULL";


     $countPid=mysqli_query($con,$countQuery);
     $c=mysqli_fetch_array($countPid);
     $pid=5015+$c[0];          /*   screw the pid    */



		$result=mysqli_query($con,"INSERT INTO detail (accomodation,pid,address,sex,dept,name,email,password,college,
		mob,event1,event2,event3,event4,event5,event6,wrk1,wrk2,wrk3)
		VALUES ('$acco','$pid','$pin','$sex','$dept','$name','$email','$password','$college','$mob','','','','','','','','','')");
		$_SESSION["user"]=$name;
    $_SESSION["email"]=$email;

		mysqli_close($con);
		header("Location: successSignUp.php");

		}


   }

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}



 function validateCaptcha()
{
   if($_POST["captcha"]==""||$_POST["captcha"]==null)
   {
     $captcha_error="fill the code";
	 return 0;
   }
	$code=htmlspecialchars(trim($_POST["captcha"]));
	if(strcasecmp($_SESSION["security_code"],$code)!=0)
	{
		global $captcha_error;
		$captcha_error="* The code entered is incorrect";
		return 0;

		}
	return 1;
}
?>
