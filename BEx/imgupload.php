<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<table>
<tr>
<td >Pictures:</td><td ><input type="file"  name="file"></td>
</tr>
</table>
<input type="submit" value="upload" name="submit"></input>
</form>
</body><?php
session_start();
	$path = '/wamp/www/';
if(isset($_POST['upload']))
	{
	$evaluator=0;
		if ($_FILES["file"]["size"] == 0)
		{
			echo '<br>No image uploaded.';
			$evaluator++;
		}
		
		
		if(!(($_FILES["file"]["type"] == "image/gif")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpg")
			|| ($_FILES["file"]["type"] == "image/png"))&&
			($evaluator==0))
		{
			echo '<br>File not an image file';
			$evaluator++;
		}
		
		if($evaluator==0)
		{
			
			move_uploaded_file($_FILES["file"]["tmp_name"],
			   $path .$_SESSION['username'])          //user_id is rollnumber
			  or die('Error');

			echo "File uploaded successfully";
		}
		echo '<a href="home.php"> click here to go back to home</a> <br>';
	}
	
	?>