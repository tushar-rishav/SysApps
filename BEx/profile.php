<?php 
session_start();
include('database.php');
if($_SESSION['username']){
 ?>
<html>
<head>
<script>
</script>
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<style>
.dis
{
	position:fixed;
min-height:100%;
min-width:100%;
text-align:left;

top:0;
left:0;
z-index:10;

background:#000000;
opacity: 0.7;
filter:alpha(opacity=70);
display:none;
}
.abook
{
	position:fixed;
height:75%;
width:45%;
text-align:left;
z-index:12;
left:30%;
top:10%;
background:#0e91a1;
display:none;
}
body
{
	font-family: 'Ubuntu', sans-serif;
}
.wrapper
{
	position:absolute;
min-height:100%;
min-width:100%;
text-align:left;
margin-left:-1%;
margin-right:-1%;
margin-top:-1%;
top:0;
left:0;
}
.mbar
{
	z-index:2;
position:fixed;
background: #0e91a1;
border-bottom: 1px solid #fff;
color: #fff;
width:100%;
height:13%;
top:0;
left:0;
}
.nside
{
	position:fixed;
	float:left;
	width:18%;
	height:102%;
	z-index:1;
	background:#c9c9c9;
}
.bbtn
{
	z-index:3;
	position: relative;
	
	line-height: 300%;
cursor:pointer;

width:10%;
height:60%;
color:#fff;
background: #146c78;
border-radius: 5%;
}
.clbtn
{
	position: absolute;
	background:#000;
	width:11%;
	height:5%;
	
	
	z-index:4;
}
.abtn
{
	position: absolute;
	background:#ff7519;
	width:55%;
	height:7%;
	left:25%;
	border-radius: 5%;
	color:#fff;
	text-align:center;
	cursor:pointer;
	line-height: 260%;
	top:60%
}
.abtn:hover
{
	background:#e66916;
	
	
	
}
.tag
{
position:absolute;
z-index:20;
width:50%;
height:30%;
left:30%;
top:76%;
overflow:scroll;
overflow-x:hidden;
background:#fff;
}

</style>
<script>
function setSelectionRange(input, selectionStart, selectionEnd) {
  if (input.setSelectionRange) {
    input.focus();
    input.setSelectionRange(selectionStart, selectionEnd);
  }
  else if (input.createTextRange) {
    var range = input.createTextRange();
    range.collapse(true);
    range.moveEnd('character', selectionEnd);
    range.moveStart('character', selectionStart);
    range.select();
  }
}

function setCaretToPos (input, pos) {
  setSelectionRange(input, pos, pos);
}
var flag=0;
var k=0;
var j=0;
var dtag='';
var tgs=new Array();
function tdisplay()
{
	document.getElementById('tags').innerHTML='';
	for(j=0;j<=k;j++)
	document.getElementById('tags').innerHTML= document.getElementById('tags').innerHTML + "<div id=\"td"+j+"\" contenteditable='false' style='z-index:35;position:relative;display:inline-block;width:"+(tgs[j].length*6)+"%+5;height:45%;background:#00cccc;'>"+tgs[j]+"<img style='cursor:pointer;' src='cls.png' id='"+j+"' onclick='tgs.splice(Number(this.id),1);k--;document.getElementById(\"td"+j+"\").style.display=\"none\";tdisplay();'></div>  ";
   
}
function atag(ev)
{
	
	var kc=ev.which||ev.keyCode;
	if(kc==32)
	{
		if(dtag!='')
		{
		tgs[k]=dtag;
		tdisplay();
	   k++;	
	   dtag='';
	}
   } 
   else {
   	if((kc>=65 && kc<=90) ||(kc>=97 && kc<=122)||(kc>=48 && kc<=57))
   	dtag+=String.fromCharCode(kc);
   	
   	
   	
   }
	
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
</head>
<body >

<div style="position:absolute;top:20%;left:40%;">
				<table align="center" color="white" border=1 frame="box">
				  <thead>
					<tr>
					</tr>
				  </thead>
				  <tbody>
			<?php
			$dbc=mysqli_connect($host,$user,$pass,$db);
			$query="SELECT * FROM signup WHERE username='".$_SESSION['username']."'";
			$result=mysqli_query($dbc,$query);
				    while($row=mysqli_fetch_array($result))
					{
						
						echo '<tr><th width="150">Name</th><td width="200">' . $row['name'] . '</td>';
						echo '</tr><tr><th width="250">Username</th><td>' . $row['username'] . '</td>';
						echo '</tr><tr><th width="250">Rollnumber</th><td>' . $row['rollnumber'] . '</td>';
						echo '</tr><tr><th width="150">Department</th><td>' . $row['department']. '</td>';
						echo '</tr><tr><th width="250">Email-Id</th><td>' . $row['email'] . '</td>';
						echo '</tr><tr><th width="250">Gender</th><td>' . $row['gender'] . '</td>';
						echo '</tr><tr><th width="250">Address</th><td>' . $row['Address'] . '</td>';
						echo '</tr><tr><th width="250">Phonenumber</th><td>' . $row['mobilenumber'] . '</td>';
						echo '</tr><tr><th width="250" height="80">Password</th><td></td>';
						echo '</tr>';
						
					}
					mysqli_close($dbc);
			?>		
				 
				  </tbody>
				</table>
				
		</div>
<div class="dis" id="dis"  onclick="this.style.display='none';document.getElementById('abook').style.display='none';">
</div>
<div class="wrapper">
<div class="pbar" id="pbar"  style="z-index:9;visibility:hidden;height:20%;width:20%;left:81%;position:absolute;top:12.5%"><ul style="margin-left:-16%;list-style: none;"><li onclick="window.location.href='profile.php'" onmouseover="this.style.background='#e6e6e6';" onmouseout="this.style.background='#ffffff';" style="cursor:pointer;border-style: solid;    border-width: 1px;position:relative;padding-top:7%;left:0;width:100%;height:30%;background:#fff;font-size:90%;"><center>Account Settings</li><li onmouseover="this.style.background='#e6e6e6';" onmouseout="this.style.background='#ffffff';" style="cursor:pointer;border-style: solid;    border-width: 1px;position:relative;padding-top:7%;text-align-center;left:0;width:100%;height:30%;background:#fff;font-size:90%;" onclick="window.location.href='logout.php'"><center>Logout</li></ul></div>
<div class="mbar">
<div class="bbtn" id="hprof" style="position:absolute;top:20%;z-index:10;left:60%;background:#0e91a1;" onclick="window.location.href='home.php'"  onmouseover="this.style.background='#146c78'" onmouseout="this.style.background='#0e91a1'"><center>  Home</div>
<div class="bbtn" id="bprof" style="width:20%;left:80%;height:100%;line-height: 500%;background:#0e91a1;" onclick="if(flag==1){ document.getElementById('pbar').style.visibility='hidden';flag=0;}else{document.getElementById('pbar').style.visibility='visible';flag=1;}"  onmouseover="this.style.background='#146c78'" onmouseout="this.style.background='#0e91a1'"><center><img src="avatar.png" style="position:absolute;top:33%;left:5%;">  Hi, <?php echo $_SESSION['username']?> &#187;</div><div class="bbtn"  style="width:60%;cursor:default;background:#0e91a1;left:5%;top:-75%"><span ><img onclick="window.location.href='pings.php'" id="noticon" src="images/notif.png" style="cursor:pointer;background:#ff7519;background:none;top:12%;position:absolute;left:120%" width="3.5%" height="70%"><div id="ncnt" style="z-index:7;position:absolute;left:123%;top:-15px;color:black;font-size:10px">0</div><div id="notdiv" style="position:absolute;width:2%;height:30%;background:#ff0000;font-size:10px;left:122.3%;"></div><img style="cursor:pointer;width:4.5%;height:80%;" onclick="sshow(0)" onmouseover="this.style.opacity=0.5" onmouseout="this.style.opacity=1" src="images/user_search.png" alt=""><form style="display:inline-block;" method="get" action="sprof.php"><input  placeholder="Profile Search..."  type="text" id="ps" name="roll" style="font-size:120%;position:absolute;top:-10%;left:4.3%;line-height:250%;height:100%;width:60%;display:none;"></form> <img id="bsimg" onclick="sshow(1)" style="position:absolute;cursor:pointer;width:4.5%;height:80%;" onmouseover="this.style.opacity=0.5" onmouseout="this.style.opacity=1" src="images/search.png" alt=""><form method="POST" action="search_handler.php" >  <input name="bs" placeholder="Book Search..." id="bs" type="text" style="font-size:120%;position:absolute;top:-10%;left:10%;line-height:250%;height:100%;width:60%;display:none;"></form></span></div></div>
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
<div class="abtn" style="position:absolute;top:57%;left:353%;" onclick="document.getElementById('dis').style.display='block';document.getElementById('abook').style.display='block';"><center>change password</div>
</div>
<div class="abook" id="abook" style="color:#fff;height:60%;">
<form method="post" action="change.php" >
<center><h2>CHANGE PASSWORD</h2></center>
<hr></hr>
<center>
<table style="position:relative;width:100%;" cellpadding="20%">
<tr>
<td>OLD PASSWORD:</td><td><input type="text" placeholder="old password" name="oldpassword" style="position:absolute;width:50%;height:15%;left:40%;top:10%"/></td>
</tr>
<tr><td>NEW PASSWORD</td><td><input type="text" placeholder="new password" name="newpassword" style="position:absolute;width:50%;height:15%;left:40%;top:43%"/></td>
</tr>
<tr><td>RE-ENTER NEW PASSWORD:</td><td><input type="text" placeholder="re-enter new password" name="newpassword1" style="position:absolute;width:50%;height:15%;left:40%;top:75%"/></td></tr><tr>

</table>
<center><input type="submit"  value="change password" name="changepassword" style='position:absolute;top:90%;cursor:pointer;' />
</form>
</div>
<table style="width:100%;top:60%;left:70%">
</tr>


</table>

<?php
}
else
echo '<script>window.location.href="mlogin.php";</script>';
?>
</div>
</body>
</html>


