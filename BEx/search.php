<?php
session_start();
/*error_reporting(~E_WARNING);

if(!isset($_SESSION["name"]))
{
 header("Location: index.php");
}*/
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Bookart/Search</title>
		<meta charset="UTF-8" />
		<link rel="favicon" href="" />
		<link href="searchStyle.css" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
			$( document ).ready(function(){
			$( "#search_button_image" ).click(function (){searchQuery(); } )  });
    	 
		</script>


	</head>	

	<body>
			<header id="head_bar" ><?php echo  $_SESSION["username"]; ?></header>
			<center>
			  
			   	<form method="POST" action="search_handler.php" >  
				   <input type="text" id="search" style="border-style: solid;    border-width: 1px;"placeholder="looking for.." spellcheck=false; name="q" />
				   <img src="image/search.jpg" id="search_button_image"  />
			     </form>

			     <div id="results" ></div>

			  
			</center>

		<script>

				var xmlhttp;
			function searchQuery()
				{  		//console.log(input);

					if (window.XMLHttpRequest)
					 	xmlhttp=new XMLHttpRequest();
					  
					else
					 	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); //for older IEs



					 xmlhttp.onreadystatechange=function()
						  { //var c=0;
						  if (xmlhttp.readyState==4 && xmlhttp.status==200) //requst finished nd response is ready
						    {
						    	console.log("all ready.. time to show results..");
						    	   //if(!c)
						    	 //  {
						    		    $(document).ready(function(){
						    		    	$("#search_button_image").click(function(){
   		 								$("#results").animate({
      									height:'toggle'
    									});
    	 								});
						    		    });


    	 						//		c=0;
									
								//	}   

									    document.getElementById("results").innerHTML=xmlhttp.responseText;
									    	
							 }
						   else
						   console.log("not ready"); 

						  }

					 	xmlhttp.open("POST","search_handler.php",true);
						xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
						input=document.getElementById("search").value;
						xmlhttp.send("q="+input);
							


				}

			
		</script>

		

	</body>
</html>
