<?php
include('database.php');
session_start();
$dbc = mysqli_connect($host,$user,$pass,$db)
or die('error connecting to mysql server');
$query="SELECT*FROM notification where receiver='".$_SESSION['username']."'";
$result=mysqli_query($dbc,$query);
$ncnt=0;
while($row = mysqli_fetch_array($result))
{
	if($row['status']=="")
	{
		$ncnt++;
		
		//echo "<script>document.getElementById('notdiv').style.background='#00ff00';document.getElementById('ncnt').innerHTML='".$ncnt."'</script>";
	}
}
echo $ncnt;
?>
