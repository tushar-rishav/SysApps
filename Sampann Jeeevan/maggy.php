<!doctype html>
<html> 
<head>
	<meta name="viewport" content="width = 1050, user-scalable = no" />
	<script type="text/javascript" src="magzine/jquery.min.1.7.js"></script>
	<script type="text/javascript" src="magzine/modernizr.2.5.3.min.js"></script>
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="dist/jquery.min.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="index.css" />
</head>
<body>

<a href="index.php"><img src="logo.png" height="100px" width="100px" id="logo" class="maggyLogo" /></a>
				<img src="shadow.png" height="10px" width="100px" id="logoShade" class="maggyShade"  />


  <div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">
			<?php 
				
				$total_page=10;
				
				for($i=1;$i<=$total_page;$i++)
				{
					if($i==1)
				      echo "<div class='hard' style='background-image:url(\"magzine/pg/p".$i.".png\")'></div>";
				      else if($i==$total_page)
				    	echo "<div class='hard' style='background-image:url(\"magzine/pg/p".$i.".png\")'></div>";
				    	else
				    	  echo "<div style='background-image:url(\"magzine/pg/p".$i.".png\")'></div>";

				}	
			?>
		
		</div>
	</div>
</div> 

<script type="text/javascript">

function loadApp() {

	// Create the flipbook

	$('.flipbook').turn({
			// Width

			width:922,
			height:600,
            elevation: 50,
			gradients: true,
			autoCenter: true

	});


}

// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['magzine/turn.js'],
	nope: ['magzine/turn.html4.min.js'],
	both: ['magzine/basic.css'],
	complete: loadApp
});

</script>

</body>
</html>