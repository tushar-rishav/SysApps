<!DOCTYPE html>
<html>
	<head>
		<title>Sample uploader</title>
	</head>
	
	<body>

 <?php
  $extension=[];
    if(isset($_POST["uploadbutton"])) 
    {	
    	
    	
    	//print_r($_FILES);


    	 $user='root';
		 $pwd='';
		 $db='sampdb';
		 $con=mysqli_connect("localhost",$user,$pwd,$db);
         $temp=[];$extension=[];


		 		$sRoll=114113089;                               //$_SESSION["roll"];  #NOTE: if uniqueness is reqd then roll wl b stored in session 
		 		$dirpath=getcwd()."/"."BookUpload/".$sRoll."/";              //define a directory named => uploads/114113089/
		
		        mkdir($dirpath,0755,true);								// making a directory
         
          $allowedExts = array("gif", "jpeg", "jpg", "png");

          for($i=0;$i<3;$i++)
		  	{
		  		//print_r($_FILES["image".$i]);
		  		
		  		
		  		$temp[$i]=explode(".", $_FILES['image'.$i]['name']);
		    	$extension[$i] = end($temp[$i]);                  //reading the last element of an exploded array
		  		
		  		//$_SESSION["extension"]=$extension;
		 	
		  		  
		 
		
		
		if (($_FILES["image".$i]["type"] == "image/gif")
		|| ($_FILES["image".$i]["type"] == "image/jpeg")												// validating MIME type of image file
		|| ($_FILES["image".$i]["type"] == "image/jpg")
		|| ($_FILES["image".$i]["type"] == "image/pjpeg")
		|| ($_FILES["image".$i]["type"] == "image/x-png")
		|| ($_FILES["image".$i]["type"] == "image/png")
		&& ($_FILES["image".$i]["size"] <2000000)
		&& in_array($extension[$i], $allowedExts)) 

		{
		  if ($_FILES["image".$i]["error"] > 0) 
		  {
		    echo "Return Code: " . $_FILES["image".$i]["error"] . "<br>";
		  }
		   else
		   { 
		   	 $roll="114113089id".$i;                  //$_SESSION["roll"];
		   	  move_uploaded_file($_FILES["image".$i]["tmp_name"],$dirpath.$roll.".".$extension[$i]);           //new location of file=>  uploads/114113089/114113089.extension
			
			 $imgpath[$i]=$dirpath.$roll.".".$extension[$i];


			 $imgpath[$i]=mysqli_real_escape_string($con,$imgpath[$i]);   //image path being tracked to store in our database
	//		 $qry="UPDATE sample SET pic='".$imgpath."' WHERE(roll='".$_SESSION['roll']."')" ; 
		      
		    // $qry="UPDATE sample SET file".$i."='".$imgpath[$i]."'" ; 
		      
		   }
		} 
		   
		   
		 else 
		        {  if($_FILES["image".$i]["size"] <2000000)
				    echo "file size cannot exceed 2MB"; echo PHP_EOL;
		  			echo "<span>Invalid format file</span>";
		        }
		        	
		      }


		      $qry="INSERT INTO sample(file1, file2, file3) VALUES ('$imgpath[0]','$imgpath[1]','$imgpath[2]')";
		      $result=mysqli_query($con,$qry); 
		     if($result)
		     echo "<br><p style='color:yellow;>Uploaded successfully</p>";
		    
		 		else
		     echo "<p style='color:yellow;'>database error&nbsp;".$qry."</p>";


		

    }

 ?>
  

		
		<header>Choose files to upload!</header>
		 <center>
		  <form method="POST" action="sample.php" enctype="multipart/form-data" >
			File 1:	<input type="file" name="image0" id="img0"  ></input><br>
			File 2:	<input type="file" name="image1" id="img1"  ></input><br>
			File 3:	<input type="file" name="image2" id="img2"  ></input><br>
					<input type="submit"  name="uploadbutton" id="uploadbtn" value="Upload!" style="cursor: pointer;"  ></input>
		  </form>
	</body>	
</html>