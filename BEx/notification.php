<?php
session_start();
include('database.php');
$k=0;
class notification
{
public $message='';
public $sender='';
public $time='';
 
 }


$j=0;
$notification=array();
$message='message';
$sender='sender';
$time='time';


function timeSort( $a, $b ) 
{
    return $a->time == $b->time ? 0 : ( $a->time > $b->time ) ? 1 : -1;
}

$db=mysqli_connect($host,$user,"",$db);
$query="SELECT * FROM notification WHERE receiver='".$_SESSION['username']."'";
$result=mysqli_query($db,$query);

    while($row=mysqli_fetch_array($result))
			{
					$notification[$j]=new notification;
					$notification[$j]->$message=$row['message'];
					$notification[$j]->$sender=$row['sender'];
					$notification[$j]->$time=$row['time'];
					$j++;
					
			}
$query2="UPDATE notification SET status='seen' where receiver='".$_SESSION['username']."'";
$result2=mysqli_query($db,$query2); 

			$e=$j;
usort($notification,'timeSort');
//rsort($notification);

$q="";
for($k=$e-1;$k>=0;$k--){	
$q.=$notification[$k]->$message." ".$notification[$k]->$sender." ".$notification[$k]->$time."<br>";
}

echo $q;
?>