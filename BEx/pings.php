<?php session_start();
include('database.php');
if(!isset($_SESSION['username'])){
	echo '<script>window.location.href="mlogin.php";</script>';}
 ?>
<html>
<?php
$dbc=mysqli_connect($host,$user,$pass,$db)
or die('error connecting to mysql server');
$query="SELECT*FROM bookdetails where username='".$_SESSION['username']."'";
$result=mysqli_query($dbc,$query);
$k=0;
$j=0;
$count=mysqli_num_rows($result);
$divid=array();
$all=array();
$i=0;
while($row = mysqli_fetch_array($result))
{
	$all[$i]=$row;
	$i++;
}
$i=0;
while($row = mysqli_fetch_array($result))
{
	$divid[$i]=$row['book_id'];
	$i++;
}
$i=0;
$query2="UPDATE notification SET status='seen' where receiver='".$_SESSION['username']."'";
mysqli_query($dbc,$query2);
?>

<head>

<link href='home.css' rel='stylesheet' type='text/css'>
<style>
.arrow-right {
	width: 0; 
	height: 0; 
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent; 
	
	border-right:10px solid white; 
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
    $("#bprof").click(function(){
    $("#pbar").animate({
      height:'toggle'
    });
    });
    });
	</script>
<script>
var contents=<?php echo json_encode($all); ?>;

</script>
<script src="script.js"></script>
<script>
var i=1;
function showNoti(){

	if(i%2){
window.location.href='home.php';
i++;}
		else
		{window.location.href='pings.php';i++;}
//console.log("from Pings noti");
}
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
function addmsg()
{
var ajaxrequest;
ajaxRequest = new XMLHttpRequest();
var ajaxDisplay = document.getElementById('show');
ajaxDisplay.innerHTML="";
ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      
      var mres=String(ajaxRequest.responseText).split("<br>");
      var mires;
      var mfres='';
      var temp=0;
      for(var g=0;g<mres.length-1;g++)
      {
      mires=String(mres[g]).split(" ");
      
      for(var k=0;k<mires.length-3;k++)
      {
      	mfres+=String(mires[k])+' ';
      }
     ajaxDisplay.innerHTML += "<div style='width:100%;height:"+Math.ceil(mfres.length/20)*4+"%;position:absolute;top:"+Number(5*(g+1)+Number(temp))+"%;'><div class='arrow-right' style='display:inline-block;'></div><div style='display:inline-block;position:absolute;left:1.2%;word-wrap: break-word;width:20%;height:100%"+";background:#ffffff;'><center>"+mfres+"</div><span style='position:absolute;left:21.5%;display:inline-block;color:#e6e6e6'><i><a target='_blank' href='oprof.php?name="+mires[mires.length-3]+"'><font color='#5C5C8A'>"+mires[mires.length-3]+"</a> <font color='#5C5C8A'>"+mires[mires.length-2]+" "+mires[mires.length-1]+" <a target='_blank' href='javascript:ping(\""+mires[mires.length-3]+"\");'><font color='#0066FF'>Reply</a></span></div>";
     temp+=Math.ceil(mfres.length/20)*4;
     mfres='';
     
  }
       //mires[0]="adssssssssssssssssssssssssssssssss fsd sdf ssssssssssssssss";
      
   }
 }
 // Now get the value from user and pass it to
 // server script.
 ajaxRequest.open("GET","notification.php", true);
 ajaxRequest.send(null);
}

	function fchange(cur) 
{
	alert(cur);
	document.getElementById('lb1').innerHTML=cur;
	if(cur==0)
	{
		
document.getElementById(bid).style.background="#d63333";

}
if(cur==1)
{
	
document.getElementById(bid).style.background="#ff8533";
}
if(cur==2)
{
	
document.getElementById(bid).style.background="#33ad33";
}
document.getElementById('cclass').style.display='block';


}
</script>
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
<div class="pbar" id="pbar"  style="z-index:9;display:none;height:20%;width:20%;left:81%;position:absolute;top:12.5%"><ul style="margin-left:-16%;list-style: none;"><li onclick="window.location.href='profile.php'" onmouseover="this.style.background='#e6e6e6';" onmouseout="this.style.background='#ffffff';" style="cursor:pointer;border-style: solid;    border-width: 1px;position:relative;padding-top:7%;left:0;width:100%;height:30%;background:#fff;font-size:90%;"><center>Account Settings</li><li onmouseover="this.style.background='#e6e6e6';" onmouseout="this.style.background='#ffffff';" style="cursor:pointer;border-style: solid;    border-width: 1px;position:relative;padding-top:7%;text-align-center;left:0;width:100%;height:30%;background:#fff;font-size:90%;" onclick="window.location.href='logout.php'"><center>Logout</li></ul></div>
<div class="mbar">
<div class="bbtn" id="hprof" style="position:absolute;top:20%;z-index:10;left:60%;background:#0e91a1;" onclick="window.location.href='home.php'"  onmouseover="this.style.background='#146c78'" onmouseout="this.style.background='#0e91a1'"><center>  Home</div>
<div class="bbtn" id="bprof" style="width:20%;left:80%;height:100%;line-height: 500%;background:#0e91a1;"  onmouseover="this.style.background='#146c78'" onmouseout="this.style.background='#0e91a1'"><center><img src="avatar.png" style="position:absolute;top:33%;left:5%;">  Hi, <?php echo $_SESSION['username']?> &#187;</div><div class="bbtn"  style="width:60%;cursor:default;background:#0e91a1;left:5%;top:-75%"><span ><img onclick="showNoti()" id="noticon" src="images/notif.png" style="cursor:pointer;background:#ff7519;background:none;top:12%;position:absolute;left:120%" width="3.5%" height="70%"><div id="ncnt" style="z-index:7;position:absolute;left:123%;top:-15px;color:black;font-size:10px">0</div><div id="notdiv" style="position:absolute;width:2%;height:30%;background:#ff0000;font-size:10px;left:122.3%;"></div><img style="cursor:pointer;width:4.5%;height:80%;" onclick="sshow(0)" onmouseover="this.style.opacity=0.5" onmouseout="this.style.opacity=1" src="images/user_search.png" alt=""><form style="display:inline-block;" method="get" action="sprof.php"><input  placeholder="Profile Search..."  type="text" id="ps" name="roll" style="font-size:120%;position:absolute;top:-10%;left:4.3%;line-height:250%;height:100%;width:60%;display:none;"></form> <img id="bsimg" onclick="sshow(1)" style="position:absolute;cursor:pointer;width:4.5%;height:80%;" onmouseover="this.style.opacity=0.5" onmouseout="this.style.opacity=1" src="images/search.png" alt=""><form method="POST" action="search_handler.php" >  <input name="bs" placeholder="Book Search..." id="bs" type="text" style="font-size:120%;position:absolute;top:-10%;left:10%;line-height:250%;height:100%;width:60%;"></form></span></div></div>
<div class="nside">
<br><br><br><br><br>
<center><h3 style="color:#000;">Quick Tip</h3></center>
<table cellpadding="20%" cellspacing ="20%" style="width:100%;">
<tr><td><div class="clbtn" style="background:#d63333;"></div> </td></td></tr><span style="position:absolute;top:29%;left:23%">Book Not Open</span>
<tr><td><div class="clbtn" style="background:#ff8533;"></div></td></td></tr><span style="position:absolute;top:36%;left:23%">Available for Borrowing</span>
<tr><td><div class="clbtn" style="background:#33ad33;"></div></td> </td></tr><span style="position:absolute;top:43%;left:23%"> Available for Buying</span>
</table>
</div>

<div id="show" style="background:#cccccc;position:absolute;width:70%;height:80%;overflow:scroll;border:1px solid #000000;top:20%;left:20%;" ></div>

<div class="abook" id="dping" style="top:30%;height:40%;color:#fff;border:2px solid #fff">

<br>
        <center><textarea style="resize: none;" name="message"  id="message" rows="10" cols="60" placeholder="Your Message">Hi There! I am interested in your book</textarea>
        <br><br><input type="button" value='Ping!' name="ping" id="ping" onclick="sendmsg();">
        <input type="hidden" name="receiver" id="receiver" >
</div>

</div>
<script>
addmsg();
setInterval(function(){addmsg();},40000);
</script>
</body>
</html>



