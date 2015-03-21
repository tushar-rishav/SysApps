<?php
  session_start();
  error_reporting(~E_WARNING);
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{


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

  $check="SELECT count(*) FROM prhosp WHERE(username= '".$_POST['username']."' and password='".$_POST['passwd']."')";
  $result=mysqli_query($con,$check);
  $fetchdata=mysqli_fetch_array($result,MYSQLI_BOTH);

  if($fetchdata[0]<=0)
  {

    $_SESSION["authenticated"]=false;
    echo "login failed";
    session_destroy();
    session_unset();
    exit;
  }
  else
  {
    $check2="SELECT username FROM prhosp WHERE(username='".$_POST['username']."' and password='".$_POST['passwd']."')";
    $result2=mysqli_query($con,$check2);
    $read=mysqli_fetch_array($result2,MYSQLI_BOTH);

    $_SESSION["authenticated"]=true;
    $_SESSION["admin"]=$read["username"];
    $host=$_SERVER["HTTP_HOST"];
    $path=rtrim(dirname($_SERVER["PHP_SELF"]),"/\\");
    header("Location: http://$host$path/adminpage.php");
    exit;

  }


  mysqli_free_result($result);
  mysqli_close($con);



}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>PR And Hospitality</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=yes,height=device-height" />
    <meta name="description" content="Production department Symposium" />
    <meta name="keywords" content="Production Engg,NIT Trichy" />
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script src="css/jquery.min.js" ></script>
    <script src="css/bootstrap.min.js" ></script>
    <style>
    .box-wrap{
      width:50%;
      position:absolute;
      top:-25%;
      left:auto;
      margin:25%;
      padding:3%;
      text-align:center;
      width:30%;
      border-style:solid;
      border-width:4px;
      border-radius:3px;
      border-color:#007B80;
      background:#4E3D31;
    }
    </style>

  </head>
  <body style="background:url('css/images/dav.jpg');background-attachment:fixed;background-repeat:no-repeat;background-size:100% 100%;" >
    <div class="container" >
      <header class="page-header" style="text-align:center;font-family:monospace;color:skyblue;" ><h1>PR and Hospitality</h1></header>
      <div class="box-wrap"  >

      <form   action="<?php $_SERVER['PHP_SELF']?>" name="prhosp" method="POST" role="form"  />
        <div class="form-group">
          <input class="form-control" style="color:white;"  name="username" required type="text" placeholder="Username"></input>
        </div>
        <div class="form-group">
          <input class="form-control" style="color:white;" name="passwd" required id="pwd" type="password" placeholder="Password"></input><br />
        </div>
        <input  class="btn btn-primary" style="width:100%;" type="submit" value="Sign In"></input>
      </form>


      </div>
    </div>
  </body>

</html>
