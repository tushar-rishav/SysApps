<!DOCTYPE html>
<html>
<head>
<?php
session_start();
include('database.php');
if(!isset($_GET['roll']))
header('Location:home.php');
$con=mysqli_connect($host,$user,$pass,$db);
$prof=mysqli_real_escape_string($con,$_GET['roll']);

$profs=array();
      
		$j=0;
		
		$datt=mysqli_query($con,"select * from signup where username LIKE '%$prof%' OR name LIKE '%$prof%' OR rollnumber LIKE '%$prof%'");
     while($roww=mysqli_fetch_array($datt) )
     {
     	 $profs[$j++]=$roww;

     }
     

	$m=json_encode($profs);
			 

?>

<link href='home.css' rel='stylesheet' type='text/css'>
<style>

</style>
<script type="text/javascript">
function ping(muname)
{
	document.getElementById('dis').style.display='block';
	document.getElementById('dping').style.display='block';
	document.getElementById('receiver').value=String(muname);
}
function sendmsg()
{
var message=document.getElementById('message').value;
var receiver=document.getElementById('receiver').value;
var ajaxrequest;
ajaxRequest = new XMLHttpRequest();

ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      
      alert(ajaxRequest.responseText);
   }
 }
 // Now get the value from user and pass it to
 // server script.
 ajaxRequest.open("POST","notify.php", true);
ajaxRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
ajaxRequest.send("message="+message+"&receiver="+receiver+"&ping=pinged");
}

	function shrink(dbn)

{
	var temp= "";
	var mstr=String(dbn)
	
	if(mstr.length>=15)
	{
		for(var i=0;i<15;i++)
			temp+=mstr[i];
		for(;i<=18;i++)
			temp+="."
		return temp;

	}
	else
	return mstr;
}
function setnotif()
{
	var ajaxrequest;
ajaxRequest = new XMLHttpRequest();

ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      
      if(Number(ajaxRequest.responseText)>0)
      {
      	document.getElementById('ncnt').innerHTML="";
      	document.getElementById('ncnt').innerHTML=Number(ajaxRequest.responseText);
      	document.getElementById('notdiv').style.background="#00ff00";
      }
      else
      	{
      		document.getElementById('ncnt').innerHTML="";
      	document.getElementById('ncnt').innerHTML="0";
      	document.getElementById('notdiv').style.background="#ff0000";
      }

   }
 }
 // Now get the value from user and pass it to
 // server script.
 ajaxRequest.open("GET","setnot.php", true);

ajaxRequest.send(null);
}
</script>
<script>

var contents=<?php echo json_encode($profs); ?>;

</script>
<script src="script.js"></script>

</head>
<body >
<div class="dis" id="dis"  onclick="document.getElementById('dping').style.display='none';document.getElementById('changec').style.display='none';document.getElementById('dis').style.display='none';">
</div>
<div class="changec" id="changec">

<center><h2>Change Book Class !</h2></center>
<center>
<div class="lbtn" id="c1" onclick="fchange(1)"></div><div class="sbtn" id="c2" onclick="fchange(2)"></div><div id="c0" class="dbtn" onclick="fchange(0)"></div>

</div>
<div class="wrapper">
<div class="pbar" id="pbar"  style="z-index:9;visibility:hidden;height:20%;width:20%;left:81%;position:absolute;top:12.5%"><ul style="margin-left:-16%;list-style: none;"><li onclick="window.location.href='profile.php'" onmouseover="this.style.background='#e6e6e6';" onmouseout="this.style.background='#ffffff';" style="cursor:pointer;border-style: solid;    border-width: 1px;position:relative;padding-top:7%;left:0;width:100%;height:30%;background:#fff;font-size:90%;"><center>Account Settings</li><li onmouseover="this.style.background='#e6e6e6';" onmouseout="this.style.background='#ffffff';" style="cursor:pointer;border-style: solid;    border-width: 1px;position:relative;padding-top:7%;text-align-center;left:0;width:100%;height:30%;background:#fff;font-size:90%;" onclick="window.location.href='logout.php'"><center>Logout</li></ul></div>
<div class="mbar">
<div class="bbtn" id="hprof" style="position:absolute;top:20%;z-index:10;left:60%;background:#0e91a1;" onclick="window.location.href='home.php'"  onmouseover="this.style.background='#146c78'" onmouseout="this.style.background='#0e91a1'"><center>  Home</div>
<div class="bbtn" id="bprof" style="width:20%;left:80%;height:100%;line-height: 500%;background:#0e91a1;" onclick="if(flag==1){ document.getElementById('pbar').style.visibility='hidden';flag=0;}else{document.getElementById('pbar').style.visibility='visible';flag=1;}"  onmouseover="this.style.background='#146c78'" onmouseout="this.style.background='#0e91a1'"><center><img src="avatar.png" style="position:absolute;top:33%;left:5%;">  Hi, <?php echo $_SESSION['username']?> &#187;</div><div class="bbtn"  style="width:60%;cursor:default;background:#0e91a1;left:5%;top:-75%"><span ><img onclick="window.location.href='pings.php'" id="noticon" src="images/notif.png" style="cursor:pointer;background:#ff7519;background:none;top:12%;position:absolute;left:120%" width="3.5%" height="70%"><div id="ncnt" style="z-index:7;position:absolute;left:123%;top:-15px;color:black;font-size:10px">0</div><div id="notdiv" style="position:absolute;width:2%;height:30%;background:#ff0000;font-size:10px;left:122.3%;"></div><img style="cursor:pointer;width:4.5%;height:80%;" onclick="sshow(0)" onmouseover="this.style.opacity=0.5" onmouseout="this.style.opacity=1" src="images/user_search.png" alt=""><form style="display:inline-block;" method="get" action="sprof.php"><input  placeholder="Profile Search..."  type="text" id="ps" name="roll" style="font-size:120%;position:absolute;top:-10%;left:4.3%;line-height:250%;height:100%;width:60%;display:none;"></form> <img id="bsimg" onclick="sshow(1)" style="position:absolute;cursor:pointer;width:4.5%;height:80%;" onmouseover="this.style.opacity=0.5" onmouseout="this.style.opacity=1" src="images/search.png" alt=""><form method="POST" action="search_handler.php" >  <input name="bs" placeholder="Book Search..." id="bs" type="text" style="font-size:120%;position:absolute;top:-10%;left:10%;line-height:250%;height:100%;width:60%;"></form></span></div></div>
<div class="nside">
<br><br><br><br><br>
<?php
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
		echo "<script>document.getElementById('notdiv').style.background='#00ff00';document.getElementById('ncnt').innerHTML='".$ncnt."'</script>";
	}
}
?>
<script type="text/javascript">
	setInterval(function(){setnotif();},30000);
	
</script>
<center><h3 style="color:#000;">Quick Tip</h3></center>
<table cellpadding="20%" cellspacing ="20%" style="width:100%;">
<tr><td><div class="clbtn" style="background:#d63333;"></div> </td></td></tr><span style="position:absolute;top:29%;left:23%">Book Not Open</span>
<tr><td><div class="clbtn" style="background:#ff8533;"></div></td></td></tr><span style="position:absolute;top:36%;left:23%">Available for Borrowing</span>
<tr><td><div class="clbtn" style="background:#33ad33;"></div></td> </td></tr><span style="position:absolute;top:43%;left:23%"> Available for Buying</span>
</table>
</div>

<div class="abook" id="dping" style="top:30%;height:40%;color:#fff;border:2px solid #fff">

<br>
	<center><textarea style="resize: none;" name="message"  id="message" rows="10" cols="60" placeholder="Your Message">Hi There! I am interested in your book</textarea>
	<br><br><input type="button" value='Ping!' name="ping" id="ping" onclick="sendmsg()">
	<input type="hidden" name="receiver" id="receiver" >
</div>


<script>

var obj = JSON.parse('<?php echo $m; ?>');
for(var i=0;i< <?php echo $j;?> ; i++)
{
	
	var dbdes="<div class='bddes' style='overflow:scroll;overflow-x:hidden;	border:2px solid #000;top:"+String(Number(20+Number(38*i)))+"%'><center><h4><a href='javascript:window.location.href=\"oprof.php?name="+obj[i].username+"\"'>"+obj[i].name+"</a></h4></center>Department:"+obj[i].department+"<span style='float:right;'>Rollno:"+obj[i].rollnumber+"(<a href='javascript:ping(\""+obj[i].username+"\");'>Ping</a>) </span><br><span style='float:right;'></span><br><table style='width:70%;'><tr><td width='20%'></td><td width='80%'><span style='float:left'>"+obj[i].Address+"</span></td></tr></table><br><span style='float:right'>Gender : "+obj[i].gender+"</span> </div>";
//document.write('<tr style="width:100%;position:absolute;top:'+(4.5+i)*6+'%;left:31.5%;"><td style="position:absolute;left:0.5%;">'+obj[i].book_id+'</td><td style="position:absolute;left:5%;top:'+2+i+'%;"><a href="javascript:bddesf('+2+i+',\''+obj[i].bookname+'\',\''+obj[i].author+'\',\''+obj[i].username+'\',\''+obj[i].description+'\',\''+obj[i].cost+'\',\''+obj[i].condition+'\',\''+obj[i].status+'\',\''+obj[i].photos+'\')">'+shrink(obj[i].bookname)+' -By:'+obj[i].author+'</a></td><td style="position:absolute;left:30%;top:2%;"><a href="oprof.php?name='+obj[i].username+'" target="blank">'+obj[i].username+'</a></td></tr>');
document.write(dbdes);
}
</script>

</div>
</div>

</html> 
