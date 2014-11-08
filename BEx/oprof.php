<?php session_start();
include('database.php');
if(!isset($_SESSION['username']) || !isset($_GET['name'])){
	echo '<script>window.location.href="mlogin.php";</script>';}
 ?>
<html>

<?php
$dbc=mysqli_connect($host,$user,$pass,$db)
or die('error connecting to mysql server');
$name=mysqli_real_escape_string($dbc,$_GET['name']);
$query="SELECT*FROM bookdetails where username='".$name."'";
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

?>

<head>

<link href='home.css' rel='stylesheet' type='text/css'>
<style>

</style>
<script>
var contents=<?php echo json_encode($all); ?>;

</script>
<script src="script.js"></script>
<script>
var dbdes=[];
function shrink(dbn)

{
	var temp= "";
	var mstr=String(dbn)
	
	if(mstr.length>=100)
	{
		for(var i=0;i<94;i++)
			temp+=mstr[i];
			temp+='<a href=\"javascript:showdes(\''+mstr+'\');\">[';
		for(;i<=98;i++)
			temp+="."
		temp+=']</a>';
		return temp;

	}
	else
	return mstr;
}
function showdes(bdn)
{
	document.getElementById('dbs').style.display='none';
document.getElementById('dis').style.display='block';
document.getElementById('sdes').style.display='block';
document.getElementById('sdes').innerHTML="<center><h2>Description</h2></center>"+bdn;

}
function bkdisp(num)
{
	
	document.getElementById('dbs').style.display='block';
	document.getElementById('dbs').innerHTML=dbdes[Number(num)];
	document.getElementById('dis').style.display='block';
}
function ping(muname)
{
	document.getElementById('dbs').style.display='none';
	
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

function rentry()
{
	var r = confirm("Do you want to remove the selected entry?");
if (r == true) 
{
   
var ajaxrequest;
ajaxRequest = new XMLHttpRequest();

ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      location.reload();
      
   }
 }
 // Now get the value from user and pass it to
 // server script.
 ajaxRequest.open("POST","rbook.php", true);
ajaxRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
ajaxRequest.send("remove=true&bid="+bid);
} 

}

	function fchange(cur) 
{
	
	document.getElementById('lb').value=cur;
	document.getElementById('bkid').value=bid;
document.getElementById('cclass').style.display='block';
document.getElementById('dis').style.display='block';


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

<div class="dis" id="dis"  onclick="document.getElementById('sdes').style.display='none';document.getElementById('dping').style.display='none';document.getElementById('dbs').style.display='none';document.getElementById('changec').style.display='none';document.getElementById('dis').style.display='none';">
</div>
<div class="changec" id="changec">

<center>
<h2>Edit Book Entry</h2><hr></hr>
<input  type="button" value="Remove Entry" onclick="rentry()" /><input onclick="document.getElementById('aebkid').value=bid;document.getElementById('dis').style.display='block';document.getElementById('abook').style.display='block';" type="button" value="Edit Entry"/><hr></hr>
<h3>Change Book Class !</h3></center>
<center>

<div class="lbtn" id="c1" onclick="fchange(1)"></div><div class="sbtn" id="c2" onclick="fchange(2)"></div><div id="c0" class="dbtn" onclick="fchange(0)"></div>

</div>
<div class="wrapper">
<div style="position:absolute;top:17%;left:40%;">
<center><h2>Welcome to <font color="red"><i><a href="javascript:ping('<?php echo $_GET['name']; ?>');"><font color="red"><i><?php echo $name; ?></i></font></a>'s</i></font> Profile</h2>
				<table align="center" color="white" border=1 frame="box">
				  <thead>
					<tr>
					</tr>
				  </thead>
				  <tbody>
			<?php
			$db=mysqli_connect($host,$user,$pass,$db);
			$query="SELECT * FROM signup WHERE username='".$name."'";
			$result=mysqli_query($db,$query);
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
						echo '</tr>';
						
					}
					mysqli_close($db);
			?>		
				 
				  </tbody>
				</table><br><br>
			<center><h2>Hi <?php echo $_SESSION['username']; ?>! These are my books :)</h2>	
		</div>
<div class="pbar" id="pbar"  style="z-index:9;visibility:hidden;height:20%;width:20%;left:81%;position:absolute;top:12.5%"><ul style="margin-left:-16%;list-style: none;"><li onclick="window.location.href='profile.php'" onmouseover="this.style.background='#e6e6e6';" onmouseout="this.style.background='#ffffff';" style="cursor:pointer;border-style: solid;    border-width: 1px;position:relative;padding-top:7%;left:0;width:100%;height:30%;background:#fff;font-size:90%;"><center>Account Settings</li><li onmouseover="this.style.background='#e6e6e6';" onmouseout="this.style.background='#ffffff';" style="cursor:pointer;border-style: solid;    border-width: 1px;position:relative;padding-top:7%;text-align-center;left:0;width:100%;height:30%;background:#fff;font-size:90%;" onclick="window.location.href='logout.php'"><center>Logout</li></ul></div>
<div class="mbar">
<div class="bbtn" id="hprof" style="position:absolute;top:20%;z-index:10;left:60%;background:#0e91a1;" onclick="window.location.href='home.php'"  onmouseover="this.style.background='#146c78'" onmouseout="this.style.background='#0e91a1'"><center>  Home</div>
<div class="bbtn" id="bprof" style="width:20%;left:80%;height:100%;line-height: 500%;background:#0e91a1;" onclick="if(flag==1){ document.getElementById('pbar').style.visibility='hidden';flag=0;}else{document.getElementById('pbar').style.visibility='visible';flag=1;}"  onmouseover="this.style.background='#146c78'" onmouseout="this.style.background='#0e91a1'"><center><img src="avatar.png" style="position:absolute;top:33%;left:5%;">  Hi, <?php echo $_SESSION['username']?> &#187;</div><div class="bbtn"  style="width:60%;cursor:default;background:#0e91a1;left:5%;top:-75%"><span ><img onclick="window.location.href='pings.php'" id="noticon" src="images/notif.png" style="cursor:pointer;background:#ff7519;background:none;top:12%;position:absolute;left:120%" width="3.5%" height="70%"><div id="ncnt" style="z-index:7;position:absolute;left:123%;top:-15px;color:black;font-size:10px">0</div><div id="notdiv" style="position:absolute;width:2%;height:30%;background:#ff0000;font-size:10px;left:122.3%;"></div><img style="cursor:pointer;width:4.5%;height:80%;" onclick="sshow(0)" onmouseover="this.style.opacity=0.5" onmouseout="this.style.opacity=1" src="images/user_search.png" alt=""><form style="display:inline-block;" method="get" action="sprof.php"><input  placeholder="Profile Search..."  type="text" id="ps" name="roll" style="font-size:120%;position:absolute;top:-10%;left:4.3%;line-height:250%;height:100%;width:60%;display:none;"></form> <img id="bsimg" onclick="sshow(1)" style="position:absolute;cursor:pointer;width:4.5%;height:80%;" onmouseover="this.style.opacity=0.5" onmouseout="this.style.opacity=1" src="images/search.png" alt=""><form method="POST" action="search_handler.php" >  <input name="bs" placeholder="Book Search..." id="bs" type="text" style="font-size:120%;position:absolute;top:-10%;left:10%;line-height:250%;height:100%;width:60%;"></form></span></div></div>
<div class="nside">
<br><br><br><br><br>
<?php

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

<div class="abook" id="abook" style="color:#fff;">
<form method="post" action="addbook.php" enctype="multipart/form-data">
<center><h2>Add/Edit A Book !</h2></center>
<hr></hr>
<center>
<table style="position:relative;width:100%;" cellpadding="20%">
<tr>
<td>Name Of the Book:</td><td><input type="text" name="book" placeholder="Book Name" style="position:absolute;width:50%;height:13%;left:30%;top:8%"/></td>
</tr>
<tr><td>Author:</td><td><input type="text" name="author" placeholder="Author" style="position:absolute;width:50%;height:13%;left:30%;top:33%"/></td>
</tr>
<tr><td>Tags:</td><td><div class="tag" contenteditable="true" id="tags" onkeyup="atag(event)" onfocus="setCaretToPos(this,0)">

</div></td></tr>
<tr><td style="position:absolute;top:100%;">Description:</td><td><textarea  name="desc" style="position:absolute;top:100%;left:29.5%"rows="5" cols="30"></textarea></td></tr>
<tr>
<td  style="position:absolute;top:130%;">Pictures:</td><td style="position:absolute;top:130%;left:27%;"><input type="file"  name="file1"><input type="file" name="file2"><input type="file" name="file3"></td>
</tr>

</table>
<input type="hidden" name="btag" id="btag" value=""/>
<input type="hidden" name="aebkid" id="aebkid" value=""/>
<center><input type="submit" value="Add/Edit" onclick="var tempt='';document.getElementById('btag').value='';if(tgs.length>0){for(var z=0;z<tgs.length;z++){tempt+=tgs[z]+',';}document.getElementById('btag').value+=tempt;}else{document.getElementById('btag').value='';}alert(document.getElementById('btag').value+tgs.length);" style='position:absolute;top:90%;cursor:pointer;' />
</form>
</div>





<table style="width:100%;top:60%;left:70%;"><script>

var colour='';
var j=20;
var l=1;
var divid = [
<?php
  $tag_strings = array();
  for($i=0;$i<count($divid);$i++)
        $tag_strings[] = '"'.$divid[$i].'"';
  
  echo implode(",", $tag_strings);
  ?>
];
for(var i=0;i< <?php echo $count;?> ;i++)
{
	if(i%4==0 && i==0)
	document.write("<tr>");
	else if(i%4==0 && i!=0){
		document.write("</tr>");
		document.write("<tr>");
		j+=50;
		l=1;
		
	}
	var colour='';
	var rating='';
	for(var t=0;t<contents[i]['status'];t++)
		rating+='*';
	var res=contents[i].photos.split(",");
	if(contents[i]['cond']==0)
		colour='#d63333';
	if(contents[i]['cond']==1)
		colour='#ff8533';
	if(contents[i]['cond']==2)
		colour='#33ad33';
	if(res[0]=='')
	{
		res[0]='images/dbc.jpg'
	}
	if(contents[i]['cond']==0)
	colour='#d63333';
	else 
	if(contents[i]['cond']==1)
	colour='#ff8533';
	else 
	if(contents[i]['cond']==2)
	colour='#33ad33';
	
	var img=[];
	img=contents[i]['photos'].split(",");
    
dbdes[i]="<div class='mark' style='border-top: 20px solid "+colour+";'></div><center><h4>"+contents[i]['bookname']+"</h4></center><span style='position:absolute;top:5%;left:22%;'>Author:"+contents[i]['author']+"</span><span style='position:absolute;top:5%;left:60%;'>Owner:<a href='javascript:window.location.href=\"oprof.php?name="+contents[i]['username']+"\"'>"+contents[i]['username']+"</a>(<a href='javascript:ping(\""+contents[i]['username']+"\");'>Ping</a>) </span><br><span style='float:right;'></span><br><table style='width:70%;'><tr><td width='20%'><img src='"+res[0]+"' style='position:absolute;top:0%;left:0%;width:17%;height:100%;'></td><td width='80%'><span style='position:absolute;word-wrap:break-word;left:23%;top:36%;width:60%'>"+shrink(contents[i]['description'])+"</span></td></tr></table><br><span style='position:absolute;top:75%;left:22%'>Cost : Rs."+contents[i]['cost']+"</span>  <span style='position:absolute;top:75%;left:60%;'>  Book Condition : <font color='#DAA520'>"+rating+"</font>"+"("+contents[i]['status']+"/5)</span>";



	document.write("<td>");
	
	document.write("<div onmouseover='this.style.opacity=0.6' onmouseout='this.style.opacity=1' id='"+contents[i]['book_id']+"' onclick='bid=this.id;bkdisp(\""+i+"\");' style='cursor:pointer;border-style:solid;border-width:2px;display:inline-block;position:absolute;left:"+20*(l)+"%;top:"+Number(j+60)+"%;height:37%;width:11%;background:"+colour+";'><img id='img"+contents[i]['book_id']+"'style='position:absolute;top:0;left:0;width:100%;height:90%;z-index:3;' src='"+img[0]+"'></img><div style='background:#fff;opacity:0.7;z-index:5;position:absolute;top:0;left:0;width:100%;height:90%;overflow:hidden;word-wrap:break-word;'><center><h3>"+contents[i]['bookname']+"</h3>"+contents[i]['description']+"</div></div>");
	
	
	
	/*div[i].style.height="30%";
	div[i].style.width="10%";
	div[i].style.background="#000000";*/
	document.write("</td>");
	
	l++;

}
</script>
</tr>


</table>

<div class="abook" id="dping" style="top:30%;height:40%;color:#fff;border:2px solid #fff">

<br>
	<center><textarea style="resize: none;" name="message"  id="message" rows="10" cols="60" placeholder="Your Message">Hi <?php echo $_GET['name']; ?>! </textarea>
	<br><br><input type="button" value='Ping!' name="ping" id="ping" onclick="sendmsg()">
	<input type="hidden" name="receiver" id="receiver" >
</div>
<div class="abook" id="sdes" style="left:35%;background:#ff8533;padding-left:2%;padding-right:2%;word-wrap:break-word;top:30%;width:30%;height:40%;color:#000;border:2px solid #fff;font-size:15px;">

</div>
<div class="bddes" id="dbs" style='z-index:100;overflow-x:hidden;border:1px solid #000;border-bottom:1px solid #cccccc;top:40%;display:none;'></div>
</div>


</body>
</html>



