<?php

$flexS1=array();
$flexS2=array();
$flexS3=array();
$fluidS1=array();
$fluidS2=array();
$fluidS3=array();
$sixS1=array();
$sixS2=array();
$sixS3=array();
global $dl,$rt;

session_start();
error_reporting(~E_WARNING);
if(!isset($_SESSION["admin"]))
  {
    header("Location:pr.php");
  }

else{

  $user='root';
  $pwd='';
  $db='user';

  $con=mysqli_connect("localhost",$user,$pwd,$db);

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: ".mysqli_connect_error();
    exit;
  }

  $result=mysqli_query($con,"SELECT * FROM session WHERE 1");
  while ($row = mysqli_fetch_array($result))
  {
    if($row["FlexSim"]==1)
    array_push($flexS1,$row["PID"]);
    elseif($row["FlexSim"]==2)
    array_push($flexS2,$row["PID"]);
    elseif($row["FlexSim"]==3)
    array_push($flexS3,$row["PID"]);

    if($row["FluidSim"]==1) array_push($fluidS1,$row["PID"]);
    elseif($row["FluidSim"]==2) array_push($fluidS2,$row["PID"]);
    elseif($row["FluidSim"]==3) array_push($fluidS3,$row["PID"]);

    if($row["SixSigma"]==1) array_push($sixS1,$row["PID"]);
    elseif($row["SixSigma"]==2) array_push($sixS2,$row["PID"]);
    elseif($row["SixSigma"]==3) array_push($sixS3,$row["PID"]);
  }



  mysqli_close($con);
  $user='root';
  $pwd='';
  $db='user';

  $con=mysqli_connect("localhost",$user,$pwd,$db);

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: ".mysqli_connect_error();
    exit;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {

    //CONNECTION HAS BEEN SET


    if(isset($_POST["session"])){
      // Session Allocation Shit  Goes Here
      $check="SELECT count(*) FROM session WHERE(PID='".$_POST['pid']."')";
      $result=mysqli_query($con,$check);


      $fetchdata=mysqli_fetch_array($result,MYSQLI_NUM);
      if($fetchdata[0]>0) // check if pid already exists i.e user has already paid
      {
        echo "User has already paid and session has been allocated!.";
        exit;
      }

      $flex=@mysql_escape_string($_POST["flexsim"]);
      $fluid=@mysql_escape_string($_POST["fluidsim"]);
      $sixs=@mysql_escape_string($_POST["sixsigma"]);
      $pid=@mysql_escape_string($_POST["pid"]);


      $result=mysqli_query($con,"INSERT INTO session (PID,FlexSim,FluidSim,SixSigma)
      VALUES ('$pid','$flex','$fluid','$sixs')");

      $host=$_SERVER["HTTP_HOST"];
      $path=rtrim(dirname($_SERVER["PHP_SELF"]),"/\\");
      header("Location: http://$host$path/adminpage.php");

      mysqli_close($con);
    }




  if(isset($_POST["psearch"])){
    $user='root';
    $pwd='';
    $db='user';

    $con=mysqli_connect("localhost",$user,$pwd,$db);

    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: ".mysqli_connect_error();
      exit;
    }

    global $dl,$rt;
    if(isset($_POST["profile"]))
      $rt=mysqli_query($con,"SELECT * FROM detail WHERE(pid='".$_POST["profile"]."')");
      $dl=mysqli_fetch_assoc($rt);


    //print_r($dl);

    mysqli_close($con);


  }

  if(isset($_POST["esearch"])){
    $user='root';
    $pwd='';
    $db='user';

    $con=mysqli_connect("localhost",$user,$pwd,$db);

    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: ".mysqli_connect_error();
      exit;
    }

    global $dl,$rt;

    if(isset($_POST["emaily"]))
    $rt=mysqli_query($con,"SELECT * FROM detail WHERE(email='".$_POST["emaily"]."')");
    $dl=mysqli_fetch_assoc($rt);
    //print_r($dl);
    mysqli_close($con);


  }

}

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

<!--  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>


  <script src="css/jquery.min.js" ></script>
  <script src="css/bootstrap.min.js" ></script>
  <style>
    body{
      background:#58DAB0;
    }
  </style>

</head>
<body >
  <header>Welcome <?php echo "<span>".$_SESSION["admin"]."</span>" ?><a style="float:right;margin:3%;" href="adminout.php"><input type="button" class="btn btn-primary btn-sm" value="Log out" /></a></header>

  <div class="container" >
    <ul id="myTab" class="nav nav-tabs">
      <li >
        <a href="#ass" data-toggle="tab">
        Sessions
        </a>
      </li>
      <li><a href="#flex" data-toggle="tab">Flex Sim</a></li>
      <li><a href="#fluid" data-toggle="tab">Fluid Sim</a></li>
      <li><a href="#six" data-toggle="tab">Six Sigma</a></li>
      <li class="active" ><a href="#profile" data-toggle="tab">Profile</a></li>

  </ul>
    <div class="tab-content">

      <div class="tab-pane fade " id="ass" >
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" role="form" >
        <table class="table" >
          <caption> PID&nbsp;<input onkeypress="return isNumber(event)" type="text" style="width:30%;color:black;display:inline;" name="pid" placeholder="PID" class="form-control" /></caption>
          <thead><tr><th>Flex SIm</th><th>Fluid Sim</th><th>Six Sigma</th></tr></thead>
          <tbody>
            <tr>
              <td>1&nbsp;<input type="radio" name="flexsim" value="1" /></td>
              <td>1&nbsp;<input type="radio" name="fluidsim" value="1" /></td>
              <td>1&nbsp;<input type="radio" name="sixsigma"  value="1" /></td>
            </tr>
            <tr>
              <td>2&nbsp;<input type="radio" name="flexsim" value="2" /></td>
              <td>2&nbsp;<input type="radio" name="fluidsim" value="2" /></td>
              <td>2&nbsp;<input type="radio" name="sixsigma"  value="2" /></td>
            </tr>
            <tr>
              <td>3&nbsp;<input type="radio" name="flexsim" value="3" /></td>
              <td>3&nbsp;<input type="radio" name="fluidsim" value="3"/></td>
              <td>3&nbsp;<input type="radio" name="sixsigma" value="3"/></td>
              </tr>
              <tr><td><input type="hidden" name="session" value="ss" /></td></tr>
            <tr><td></td><td></td><td><input type="submit" class="btn btn-success btn-sm" value="Submit"></td><td></td><td></td></tr>
          </tbody>
        </table>
      </form>

      </div>


      <div class="tab-pane fade" id="flex">
        <table class="table table-hover" >
          <thead>
            <tr><td>Session 1</td><td>Session 2</td><td>Session 3</td></tr>

          </thead>
          <tbody>

              <?php

                $LoopSize=max(sizeof($flexS1),sizeof($flexS2),sizeof($flexS3));
                for($j=sizeof($flexS1);$j<$LoopSize;$j++ ){
                  array_push($flexS1,"-");
                }
                for($j=sizeof($flexS2);$j<$LoopSize;$j++ ){
                  array_push($flexS2,"-");
                }
                for($j=sizeof($flexS3);$j<$LoopSize;$j++ ){
                  array_push($flexS3,"-");
                }

                for($i=0;$i<$LoopSize;$i++)
                {

                    echo "<tr><td>".$flexS1[$i]."</td><td>".$flexS2[$i]."</td><td>".$flexS3[$i]."</td></tr>";

                }



              ?>

          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="fluid">
        <table class="table table-hover" >
          <thead><tr><td>Session 1</td><td>Session 2</td><td>Session 3</td></tr></thead>
          <tbody>

            <?php

            $LoopSize=max(sizeof($fluidS1),sizeof($fluidS2),sizeof($fluidS3));
            for($j=sizeof($fluidS1);$j<$LoopSize;$j++ ){
              array_push($fluidS1,"-");
            }
            for($j=sizeof($fluidS2);$j<$LoopSize;$j++ ){
              array_push($fluidS2,"-");
            }
            for($j=sizeof($fluidS3);$j<$LoopSize;$j++ ){
              array_push($fluidS3,"-");
            }

            for($i=0;$i<$LoopSize;$i++)
            echo "<tr><td>".$fluidS1[$i]."</td><td>".$fluidS2[$i]."</td><td>".$fluidS3[$i]."</td></tr>";



            ?>
          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="six">
        <table class="table table-hover" >
          <thead><tr><td>Session 1</td><td>Session 2</td><td>Session 3</td></tr></thead>
          <tbody>

            <?php

            $LoopSize=max(sizeof($sixS1),sizeof($sixS2),sizeof($sixS3));
            for($j=sizeof($sixS1);$j<$LoopSize;$j++ ){
              array_push($sixS1,"-");
            }
            for($j=sizeof($sixS2);$j<$LoopSize;$j++ ){
              array_push($sixS2,"-");
            }
            for($j=sizeof($sixS3);$j<$LoopSize;$j++ ){
              array_push($sixS3,"-");
            }

            for($i=0;$i<$LoopSize;$i++)
              echo "<tr><td>".$sixS1[$i]."</td><td>".$sixS2[$i]."</td><td>".$sixS3[$i]."</td></tr>";



            ?>
          </tbody>
        </table>
      </div>

      <div class="tab-pane fade in active" id="profile">

        <form style="display:inline-block;margin:0px;" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" role="form" >
          PID&nbsp;<input   type="text" style="width:25%;color:black;display:inline;" name="profile" placeholder="PID" class="form-control" />
          &nbsp;
          <input type="hidden" value="somevalue" name="psearch" >
          <input type="submit" value="submit" class="btn btn-success btn-sm" />
        </form>

        <form style="display:inline-block;margin:-5%;" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" role="form" >
          OR Email&nbsp;<input  type="text" style="width:60%;color:black;display:inline;" name="emaily" placeholder="Email" class="form-control" />
          &nbsp;
          <input type="hidden" value="somevalue" name="esearch" >
          <input type="submit" value="submit"  class="btn btn-success btn-sm" />
        </form>


        <div id="profCont"  class="container">

          <table style="margin-top:10%;text-align:center;" class="table table-hover">

            <thead>
              <tr>
                <th>Name</th>
                <th>PID</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>FlexSim</th>
                <th>FluidSim</th>
                <th>SixSigma</th>
                <th>College</th>

              </tr>
            </thead>
            <tbody>
              <tr>

                <td><?php global $dl;  echo $dl["name"] ;?></td>
                <td><?php global $dl;  echo $dl["pid"] ;?></td>
                <td><?php global $dl;  echo $dl["email"]; ?></td>
                <td><?php global $dl;  echo $dl["mob"] ;?></td>
                <td><?php global $dl;  echo $dl["wrk2"] ;?></td>
                <td><?php global $dl;  echo $dl["wrk3"] ?></td>
                <td><?php global $dl;  echo $dl["wrk1"]; ?></td>
                <td><?php global $dl; echo $dl["college"]; ?></td>

                          </tr>
                        </tbody>
                      </table>

        </div>
      </div>

    </div>
  </div>







  <script>
  var isNumber= function(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
    }
    return true;
  };
  </script>



</body>


</html>
