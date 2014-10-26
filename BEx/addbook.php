<?php
session_start();
$img= '';
include('database.php');
$temp='';
$db=mysqli_connect($host,$user,$pass,$db);
$owner=$_SESSION['username'];
$book=htmlspecialchars(stripslashes(trim(mysqli_real_escape_string($db,$_POST['book']))));
$author=htmlspecialchars(stripslashes(trim(mysqli_real_escape_string($db,$_POST['author']))));
$tag=htmlspecialchars(stripslashes(trim(mysqli_real_escape_string($db,$_POST['btag']))));
$desc=htmlspecialchars(stripslashes(trim(mysqli_real_escape_string($db,$_POST['desc']))));
$aebkid=htmlspecialchars(stripslashes(trim(mysqli_real_escape_string($db,$_POST['aebkid']))));


$owne="";

$aute="";
$tage="";
$desce="";
$val=0;

if(empty($book)){
	echo '<font colour="red">*Book name required</font>';
	$val++;
	$bke="*Book name required";
}
if(empty($author)){
	echo '<font colour="red">*Book author required</font>';
	$val++;
	$aute="*Book author required";
}
if(empty($tag)){
	echo '<font colour="red">*tags required</font>';
	$val++;
	$tage="*tags required";
}
if(empty($desc)){
	echo '<font colour="red">*Book description required</font>';
	$val++;
	$desce="*Book description required";
}

if($val==0){
$result2=mysqli_query($db,$query1);

if(empty($aebkid))
{

$query="INSERT INTO bookdetails(username,bookname,author,description,hashtags) VALUES('$owner','$book','$author','$desc','$tag')";
$result=mysqli_query($db,$query);
$query1="SELECT book_id FROM bookdetails WHERE username='".$owner."' and bookname='".$book."'";
$result2=mysqli_query($db,$query1);
while($row=mysqli_fetch_array($result2))
$bookid=$row['book_id'];
$tag=explode(',',$tag);
for($i=0;$i<count($tag)-1;$i++){
$query3="INSERT INTO hash(md5,book_id) VALUES('".md5($tag[$i])."','$bookid')";
$result3=mysqli_query($db,$query3);
}
}
else
{
	$bookid=$aekbid;
	$query="UPDATE  bookdetails set username='".$owner."', bookname='".$book."',author='".$author."',description='".$desc."',hashtags='".$tag."' where book_id=".$aebkid."";
mysqli_query($db,$query);
$queryd="DELETE from hash where  book_id=$aebkid";
mysqli_query($db,$queryd);
$tag=explode(',',$tag);
for($i=0;$i<count($tag)-1;$i++){
$query3="INSERT INTO hash(md5,book_id) VALUES('".md5($tag[$i])."','$aebkid')";
$result3=mysqli_query($db,$query3);
}

}



$allowedExts = array("gif", "jpeg", "jpg", "png");


for($i=1;$i<4;$i++)
{
	
	$temp = explode(".", $_FILES["file".$i]["name"]);
	 $extension = end($temp);
if(!empty($_FILES["file".$i]["name"]))
{
if ((($_FILES["file".$i]["type"] == "image/gif")
|| ($_FILES["file".$i]["type"] == "image/jpeg")
|| ($_FILES["file".$i]["type"] == "image/jpg")
|| ($_FILES["file".$i]["type"] == "image/pjpeg")
|| ($_FILES["file".$i]["type"] == "image/x-png")
|| ($_FILES["file".$i]["type"] == "image/png"))
&& ($_FILES["file".$i]["size"] < 2000000)
&& in_array($extension, $allowedExts)) {
 if ($_FILES["file".$i]["error"] > 0) {
    echo "Return Code: " . $_FILES["file".$i]["error"] . "<br>";
  } else {
if (!file_exists($owner)) {
    mkdir($owner, 0777, true);
}
    if(file_exists($owner."/".$owner.$bookid.$i.".".$extension))
    	unlink($owner."/".$owner.$bookid.$i.".".$extension);
      move_uploaded_file($_FILES["file".$i]["tmp_name"],
      $owner."/".$owner.$bookid.$i.".".$extension);
$img=$img.$owner."/".$owner.$bookid.$i.".".$extension.",";


    
  }

} else {
  echo "<script>alert('Invalid file');</script>";
}
}
}

		$query="UPDATE bookdetails set photos = '".$img."' where book_id='".$bookid."'";
		mysqli_query($db,$query);
	
		}
			header("Location:/securimage/home.php");
		
?>
