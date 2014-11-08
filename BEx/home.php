<?php session_start();
include('database.php');
if(!isset($_SESSION['username'])){
	echo '<script>window.location.href="mlogin.php";</script>';}
 ?>
<html>
<?php
$dbc = mysqli_connect($host,$user,$pass,$db)
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

?>

<head>

<link href='home.css' rel='stylesheet' type='text/css'>
<style>

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
var i=1;
function showNoti(){

	if(i%2){
window.location.href='pings.php';i++;}
		else
		{window.location.href='home.php';i++;}
//console.log("from Home noti");
}

var curp;
var contents=<?php echo json_encode($all); ?>;

</script>
<script src="script.js"></script>
<script>

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
//var tagar=new Array();
//var tagd=contents[curp]['hashtags'];
//	 tagar=tagd.split(",");
//var etl=tagar.length-1;
function settag()
{
	document.getElementById('bname').value=contents[curp]['bookname'];
	document.getElementById('aname').value=contents[curp]['author'];
	document.getElementById('desc').value=contents[curp]['description'];
	document.getElementById('tags').innerHTML='';
	
	//for(var j=0;j<etl;j++)
	//document.getElementById('tags').innerHTML= document.getElementById('tags').innerHTML + "<div id=\"td"+j+"\" contenteditable='false' style='z-index:35;position:relative;display:inline-block;width:"+(tagar[j].length*6)+"%+5;height:45%;background:#00cccc;'>"+tagar[j]+"<img style='cursor:pointer;' src='cls.png' id='"+j+"' onclick='tagar.splice(Number(this.id),1);etl--;document.getElementById(\"td"+j+"\").style.display=\"none\";settag();'></div>  ";
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
<div class="dis" id="dis"  onclick="document.getElementById('cclass').style.display='none';document.getElementById('changec').style.display='none';document.getElementById('tags').innerHTML='';tgs=[];k=0;j=0;document.getElementById('dis').style.display='none';document.getElementById('abook').style.display='none';">
</div>
<div class="changec" id="changec">

<center>
<h2>Edit Book Entry</h2><hr></hr>

<input  type="button" value="Remove Entry" onclick="rentry()" /><input onclick="settag();document.getElementById('aebkid').value=bid;document.getElementById('dis').style.display='block';document.getElementById('abook').style.display='block';" type="button" value="Edit Entry"/><hr></hr>
<h3>Change Book Class !</h3></center>
<center>

<div class="lbtn" id="c1" onclick="fchange(1)"></div><div class="sbtn" id="c2" onclick="fchange(2)"></div><div id="c0" class="dbtn" onclick="fchange(0)"></div>

</div>
<div class="wrapper">
<div class="pbar" id="pbar"  style="z-index:9;display:none;height:20%;width:20%;left:81%;position:absolute;top:12.5%"><ul style="margin-left:-16%;list-style: none;"><li onclick="window.location.href='profile.php'" onmouseover="this.style.background='#e6e6e6';" onmouseout="this.style.background='#ffffff';" style="cursor:pointer;border-style: solid;    border-width: 1px;position:relative;padding-top:7%;left:0;width:100%;height:30%;background:#fff;font-size:90%;"><center>Account Settings</li><li onmouseover="this.style.background='#e6e6e6';" onmouseout="this.style.background='#ffffff';" style="cursor:pointer;border-style: solid;    border-width: 1px;position:relative;padding-top:7%;text-align-center;left:0;width:100%;height:30%;background:#fff;font-size:90%;" onclick="window.location.href='logout.php'"><center>Logout</li></ul></div>
<div class="mbar">
<div class="bbtn" id="hprof" style="position:absolute;top:20%;z-index:10;left:60%;background:#0e91a1;" onclick="window.location.href='home.php'"  onmouseover="this.style.background='#146c78'" onmouseout="this.style.background='#0e91a1'"><center>  Home</div>
<div class="bbtn" id="bprof" style="width:20%;left:80%;height:100%;line-height: 500%;background:#0e91a1;"  onmouseover="this.style.background='#146c78'" onmouseout="this.style.background='#0e91a1'"><center><img src="avatar.png" style="position:absolute;top:33%;left:5%;">  Hi, <?php echo $_SESSION['username']?> &#187;</div><div class="bbtn"  style="width:60%;cursor:default;background:#0e91a1;left:5%;top:-75%"><span ><img onclick="showNoti()" id="noticon" src="images/notif.png" style="cursor:pointer;background:#ff7519;background:none;top:12%;position:absolute;left:120%" width="3.5%" height="70%">
<div id="ncnt" style="z-index:7;position:absolute;left:123%;top:-15px;color:black;font-size:10px">0</div>

<div id="notdiv" style="position:absolute;width:2%;height:30%;background:#ff0000;font-size:10px;left:122.3%;"></div>
<img style="cursor:pointer;width:4.5%;height:80%;" onclick="sshow(0)" onmouseover="this.style.opacity=0.5" onmouseout="this.style.opacity=1" src="images/user_search.png" alt=""><form style="display:inline-block;" method="get" action="sprof.php"><input  placeholder="Profile Search..."  type="text" id="ps" name="roll" style="font-size:120%;position:absolute;top:-10%;left:4.3%;line-height:250%;height:100%;width:60%;display:none;"></form> <img id="bsimg" onclick="sshow(1)" style="position:absolute;cursor:pointer;width:4.5%;height:80%;" onmouseover="this.style.opacity=0.5" onmouseout="this.style.opacity=1" src="images/search.png" alt=""><form method="POST" action="search_handler.php" >  <input name="bs" placeholder="Book Search..." id="bs" type="text" style="font-size:120%;position:absolute;top:-10%;left:10%;line-height:250%;height:100%;width:60%;"></form></span></div></div>
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

<div class="abtn" onclick="document.getElementById('tags').innerHTML='';document.getElementById('bname').value='';document.getElementById('aname').value='';document.getElementById('desc').value='';document.getElementById('aebkid').value='';document.getElementById('dis').style.display='block';document.getElementById('abook').style.display='block';"><center>+ Add Book</div>
</div>
<div class ="abook" id="cclass" style="padding-left:10px;color:#fff;">
<center><h2>Add more Details</h2></center>
<hr></hr>
<form action="cupdate.php" method="post">
<input type="text" name="cost" id="cost" placeholder="Cost of the Book(Optional)..."> <br><br>
<textarea rows="10" cols="7" placeholder="New Description(Optional)" name="ndesc" id="ndesc"></textarea><br><br>
Condition Of the book(required):<select name="cond" id="cond"><option value="1">Worst</option><option value="2">Poor</option><option value="3">Average</option><option value="4">Good</option><option value="5">Excellent</option></select><br><br>
<input type="hidden" name="lb" id="lb" /><input type="hidden" id="bkid" name="bkid"/><br><br>
<input type="submit" value="Update" name="cbupdate" id="cbupdate"/></form>
</div> 


<div class="abook" id="abook" style="color:#fff;">
<form method="post" action="addbook.php" enctype="multipart/form-data">
<center><h2>Add/Edit A Book !</h2></center>
<hr></hr>
<center>
<table style="position:relative;width:100%;" cellpadding="20%">
<tr>
<td>Name Of the Book:</td><td><input type="text" id="bname" name="book" placeholder="Book Name" style="position:absolute;width:50%;height:13%;left:30%;top:8%"/><span style="color:#ff0000;position:absolute;left:30%;top:20%"> <?php echo $bke; ?></span></td>
</tr>
<tr><td>Author:</td><td><input type="text" id="aname" name="author" placeholder="Author" style="position:absolute;width:50%;height:13%;left:30%;top:33%"/><span style="color:#ff0000;position:absolute;left:30%;top:45%"> <?php echo $aute; ?></span></td>
</tr>
<tr><td>Tags:</td><td><div class="tag" contenteditable="true" id="tags" onkeyup="atag(event)" onfocus="setCaretToPos(this,0)">

</div><span style="color:#ff0000;position:absolute;left:30%;top:90%;z-index:200;"> <?php echo $tage; ?></span></td></tr>
<tr><td style="position:absolute;top:100%;">Description:</td><td><textarea  id="desc" name="desc" style="position:absolute;top:100%;left:29.5%"rows="5" cols="30"></textarea><span style="color:#ff0000;position:absolute;left:75%;top:110%"> <?php echo $desce; ?></span></td></tr>
<tr>
<td  style="position:absolute;top:130%;">Pictures:</td><td style="position:absolute;top:130%;left:27%;"><input type="file"  name="file1"><input type="file" name="file2"><input type="file" name="file3"></td>
</tr>

</table>
<input type="hidden" name="btag" id="btag" value=""/>
<input type="hidden" name="aebkid" id="aebkid" value=""/>
<center><input type="submit" value="Add/Edit" onclick="var tempt='';document.getElementById('btag').value='';if(tgs.length>0){for(var z=0;z<tgs.length;z++){tempt+=tgs[z]+',';}document.getElementById('btag').value+=tempt;}else{document.getElementById('btag').value='';}document.getElementById('desc').value = document.getElementById('desc').value.replace(/(\r\n|\n|\r)/gm,'');" style='position:absolute;top:90%;cursor:pointer;' />
</form>


</div>





<table style="width:100%;top:60%;left:70%;">
<script>

	
var colour='';
var j=20;
var l=1;
var divid = [
<?php
  $tag_strings = array();
  for($i=0;$i<count($divid);$i++){
        $tag_strings[] = '"'.$divid[$i].'"';
  }
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

	document.write("<td>");
	document.write("<div onmouseover='this.style.opacity=0.6' onmouseout='this.style.opacity=1' id='"+contents[i]['book_id']+"' onclick='bid=this.id;curp="+i+";ccheck(\"c"+contents[i]['cond']+"\");document.getElementById(\"changec\").style.display=\"block\";document.getElementById(\"dis\").style.display=\"block\"' style='cursor:pointer;border-style:solid;border-width:2px;display:inline-block;position:absolute;left:"+20*(l)+"%;top:"+j+"%;height:37%;width:11%;background:"+colour+";'><img id='img"+contents[i]['book_id']+"'style='position:absolute;top:0;left:0;width:100%;height:90%;z-index:3;' src='"+img[0]+"'></img><div style='background:#fff;opacity:0.7;z-index:5;position:absolute;top:0;left:0;width:100%;height:90%;overflow:hidden;word-wrap:break-word;'><center><h3>"+contents[i]['bookname']+"</h3>"+contents[i]['description']+"</div></div>");
	
	
	
	/*div[i].style.height="30%";
	div[i].style.width="10%";
	div[i].style.background="#000000";*/
	document.write("</td>");
	
	l++;
}

</script>
</tr>


</table>


</div>
</body>
</html>


