<?php
session_start();
error_reporting(~E_WARNING);
if(!isset($_SESSION["email"]))
{
  header("Location: index.php");
}


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

        $result=mysqli_query($con,"SELECT * FROM detail WHERE(email='".$_SESSION["email"]."')");
        $detail=mysqli_fetch_assoc($result);
        mysqli_close($con);
}



?>


<!DOCTYPE html>
<html>
<head>
  <title>Prodigy'15</title>
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

  </head>
  <body style="background:url('css/images/f-bg.png')" >
    <header >
      <a href="homepage.php" ><i class="fa fa-4x fa-home" style="color:green;z-index:99;float:left;position:absolute;top:3%;left:10%;" ></i></a>
    </header>

    <table style="margin-top:10%;text-align:center;" class="table table-hover">
      <caption><?php echo $_SESSION["name"]."'s details" ?></caption>
      <thead>
        <tr>
          <th>Name</th>
          <th>PID</th>
          <th>Email</th>
          <th>Mobile No</th>
          <th>Accomodation</th>
          <th>Address</th>

          <th>Sex</th>
          <th>Dept</th>


          <th>College</th>
          <th>Paper presentation</th>
          <th>Da Vinci</th>
          <th>Tech Quiz</th>
          <th>Industrial problem Solving</th>
          <th>CAD Modeling</th>
          <th>Six Sigma</th>
          <th>FlexSim</th>
          <th>FluidSim</th>
        </tr>
      </thead>
      <tbody>
        <tr>

          <td><?php echo $detail["name"] ;?></td>
<td><?php echo $detail["pid"] ;?></td>
          <td><?php echo $detail["email"]; ?></td>
          <td><?php echo $detail["mob"] ;?></td>
<td><?php echo $detail["accomodation"] ;?></td>
<td><?php echo $detail["address"] ?></td>
          <td><?php echo $detail["sex"]; ?></td>
          <td><?php echo $detail["dept"]; ?></td>


          <td><?php echo $detail["college"]; ?></td>
          <td><?php if($detail["event1"])
          echo "<i class='fa fa-check' style='color:green;' ></i>";
          else
          echo "<i class='fa fa-close' style='color:red;' ></i>"
           ?></td>
          <td><?php if($detail["event2"])
          echo "<i class='fa fa-check' style='color:green;' ></i>";
          else
          echo "<i class='fa fa-close' style='color:red;' ></i>"
          ?></td>
          <td><?php if($detail["event3"])
          echo "<i class='fa fa-check' style='color:green;' ></i>";
          else
          echo "<i class='fa fa-close' style='color:red;' ></i>"
          ?></td>
          <td><?php if($detail["event4"])
          echo "<i class='fa fa-check' style='color:green;' ></i>";
          else
          echo "<i class='fa fa-close' style='color:red;' ></i>"
          ?></td>
          <td><?php if($detail["event5"])
          echo "<i class='fa fa-check' style='color:green;' ></i>";
          else
          echo "<i class='fa fa-close' style='color:red;' ></i>"
          ?></td>
          <td><?php if($detail["wrk1"])
          echo "<i class='fa fa-check' style='color:green;' ></i>";
          else
          echo "<i class='fa fa-close' style='color:red;' ></i>"
          ?></td>
          <td><?php if($detail["wrk2"])
          echo "<i class='fa fa-check' style='color:green;' ></i>";
          else
          echo "<i class='fa fa-close' style='color:red;' ></i>"
          ?></td>
          <td><?php if($detail["wrk3"])
          echo "<i class='fa fa-check' style='color:green;' ></i>";
          else
          echo "<i class='fa fa-close' style='color:red;' ></i>"
          ?></td>

        </tr>
      </tbody>
    </table>


  </body>

</html>
