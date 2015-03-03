<?php
session_start();

session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
 <title>Prodigy'15</title>
 </head>

<body>
<?php
    if(!$_SESSION["name"])
    {
  $host=$_SERVER["HTTP_HOST"];
  $path=rtrim(dirname($_SERVER["PHP_SELF"]),"/\\");
  header("Location: http://$host$path/index.php");
  }

  else
   echo "Error occured";
?>

</body>


</html>
