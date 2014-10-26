<!DOCTYPE html>
<html>
<head>
<?php
session_start();
include('database.php');
class btag
{
public $count=0;
public $bookid='';
 function _construct($count) {
    $this->count = $count;
  }

}



$j=0;
$books=array();
$count="count";
$bookid="bookid";
function countSort( $a, $b ) 
{
    return $a->count == $b->count ? 0 : ( $a->count > $b->count ) ? 1 : -1;
}
      
		$con=mysqli_connect($host,$user,$pass,$db);
		$query=mysqli_real_escape_string($con,$_POST["bs"]);
		
		$tag=explode(' ',$query);
		
		$datt=mysqli_query($con,"select * from bookdetails");
     while($roww=mysqli_fetch_array($datt) )
     {
     	 $books[$j]=new btag;
     	 
     	 $books[$j]->$bookid=$roww['book_id'];
     	  $j++;  
     	  
     	  
     }
     $j=0;
		$dat=mysqli_query($con,"select * from hash");
     while($row=mysqli_fetch_array($dat) )
     {
  			for($i=0;$i<count($tag);$i++)
		{ 
		    if(md5(strtoupper($tag[$i]))==$row['md5'])
		    {
		    	for($j=0;$j<count($books);$j++)
		    	{
		    	 if($books[$j]->$bookid==$row['book_id'])
		    	 {
		    	 	$books[$j]->$count++;
		    	 }
		    	}
		    }
		}			   	
     }
		usort( $books, 'countSort' );
rsort( $books);

echo "<table style='border-style:solid;border-size:1px;'>";
$u=0;$r=array();
for($j=0;$j<count($books);$j++)
		    	{
		    	 if($books[$j]->$count>0)
		    	 {
		    	 	$dat=mysqli_query($con,"select * from bookdetails where book_id='".$books[$j]->$bookid."'");
					while($row=mysqli_fetch_array($dat) )
{
 $r[$u]=$row;
$u=$u+1;
//echo "<tr><td style='border-style:solid;border-size:1px;' >".$row['username']."</td><td style='border-style:solid;border-size:1px;'>".$row['bookname']."</td><td style='border-style:solid;border-size:1px;'>".$row['author']."</td><td style='border-style:solid;border-size:1px;'>".$row['lastupdated']."</td></tr>";
}
		    	 }
				 $i=0;
		    	}
				$m=json_encode($r);
			 
echo "</table>";
?>

<link href='home.css' rel='stylesheet' type='text/css'>
<style>

</style>
<script type="text/javascript">

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

</script>
<script>

var contents=<?php echo json_encode($all); ?>;

</script>
<script src="script.js"></script>

</head>
<body >
<div class="dis" id="dis"  onclick="document.getElementById('changec').style.display='none';document.getElementById('tags').innerHTML='';tgs=[];k=0;j=0;document.getElementById('dis').style.display='none';document.getElementById('abook').style.display='none';">
</div>
<div class="changec" id="changec">

<center><h2>Change Book Class !</h2></center>
<center>
<div class="lbtn" id="c1" onclick="fchange(1)"></div><div class="sbtn" id="c2" onclick="fchange(2)"></div><div id="c0" class="dbtn" onclick="fchange(0)"></div>

</div>
<div class="wrapper">
<div class="pbar" id="pbar"  style="z-index:9;visibility:hidden;height:20%;width:20%;left:81%;position:absolute;top:12.5%"><ul style="margin-left:-16%;list-style: none;"><li onmouseover="this.style.background='#e6e6e6';" onmouseout="this.style.background='#ffffff';" style="cursor:pointer;border-style: solid;    border-width: 1px;position:relative;padding-top:7%;left:0;width:100%;height:30%;background:#fff;font-size:90%;"><center>Account Settings</li><li onmouseover="this.style.background='#e6e6e6';" onmouseout="this.style.background='#ffffff';" style="cursor:pointer;border-style: solid;    border-width: 1px;position:relative;padding-top:7%;text-align-center;left:0;width:100%;height:30%;background:#fff;font-size:90%;"><center>Logout</li></ul></div>
<div class="mbar">
<div class="bbtn" id="bprof" style="width:20%;left:80%;height:100%;line-height: 500%;background:#0e91a1;" onclick="if(flag==1){ document.getElementById('pbar').style.visibility='hidden';flag=0;}else{document.getElementById('pbar').style.visibility='visible';flag=1;}"  onmouseover="this.style.background='#146c78'" onmouseout="this.style.background='#0e91a1'"><center><img src="avatar.png" style="position:absolute;top:33%;left:5%;">  Hi, <?php echo $_SESSION['username']?> &#187;</div><div class="bbtn"  style="width:60%;cursor:default;background:#0e91a1;left:5%;top:-75%"><span ><img style="cursor:pointer;width:4.5%;height:80%;" onclick="sshow(0)" onmouseover="this.style.opacity=0.5" onmouseout="this.style.opacity=1" src="images/user_search.png" alt=""><input  placeholder="Profile Search..."  type="text" id="ps" style="font-size:120%;position:absolute;top:-10%;left:4.3%;line-height:250%;height:100%;width:60%;display:none;"><img id="bsimg" onclick="sshow(1)" style="position:absolute;cursor:pointer;width:4.5%;height:80%;" onmouseover="this.style.opacity=0.5" onmouseout="this.style.opacity=1" src="images/search.png" alt=""><form method="POST" action="search_handler.php" >  <input name="bs" placeholder="Book Search..." id="bs" type="text" style="font-size:120%;position:absolute;top:-10%;left:10%;line-height:250%;height:100%;width:60%;display:none;"></form></span></div></div>
<div class="nside">
<br><br><br><br><br>
<center><h3 style="color:#000;">Quick Tip</h3></center>
<table cellpadding="15%" cellspacing ="20%" style="width:100%;">
<tr><td><div class="clbtn" style="background:#d63333;"></div> </td><td style="padding-top:-20%;">Book Not Open</td></tr>
<tr><td><div class="clbtn" style="background:#ff8533;"></div></td><td>Available for Borrowing</td></tr>
<tr><td><div class="clbtn" style="background:#33ad33;"></div></td><td>  Available for Buying</td></tr>
</table>
<div class="abtn" onclick="document.getElementById('dis').style.display='block';document.getElementById('abook').style.display='block';"><center>+ Add Book</div>
</div>
<div class="abook" id="abook" style="color:#fff;">
<form method="post" action="addbook.php" enctype="multipart/form-data">
<center><h2>Add A Book !</h2></center>
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

<center><input type="submit" value="Add" onclick="var tempt='';document.getElementById('btag').value='';if(tgs.length>0){for(var z=0;z<tgs.length;z++){tempt+=tgs[z]+',';}document.getElementById('btag').value+=tempt;}else{document.getElementById('btag').value='';}alert(document.getElementById('btag').value+tgs.length);" style='position:absolute;top:90%;cursor:pointer;' />
</form>
</div>

<script>

var obj = JSON.parse('<?php echo $m; ?>');
for(i=0;i< <?php echo $u?> ; i++)
{
	var res=obj[i].photos.split(",");
	dbdes="<div class='bddes' style='overflow:scroll;overflow-x:hidden;border:2px solid #000;top:"+String(Number(20+Number(38*i)))+"%'><div class='mark'></div><center><h4>"+obj[i].bookname+"</h4></center>Author:"+obj[i].author+"<span style='float:right;'>Owner:"+obj[i].username+"(<a href=''>Ping</a>) </span><br><span style='float:right;'></span><br><table style='width:70%;'><tr><td width='20%'><img src='"+res[0]+"' style='width:45%;height:15%;'></td><td width='80%'><span style='float:left'>"+obj[i].description+"</span></td></tr></table><br><center>Cost : Rs."+obj[i].cost+"    Condition : "+obj[i].status+"</div>";
//document.write('<tr style="width:100%;position:absolute;top:'+(4.5+i)*6+'%;left:31.5%;"><td style="position:absolute;left:0.5%;">'+obj[i].book_id+'</td><td style="position:absolute;left:5%;top:'+2+i+'%;"><a href="javascript:bddesf('+2+i+',\''+obj[i].bookname+'\',\''+obj[i].author+'\',\''+obj[i].username+'\',\''+obj[i].description+'\',\''+obj[i].cost+'\',\''+obj[i].condition+'\',\''+obj[i].status+'\',\''+obj[i].photos+'\')">'+shrink(obj[i].bookname)+' -By:'+obj[i].author+'</a></td><td style="position:absolute;left:30%;top:2%;"><a href="oprof.php?name='+obj[i].username+'" target="blank">'+obj[i].username+'</a></td></tr>');
document.write(dbdes);
}
</script>

</div>
</div>

</html> 
