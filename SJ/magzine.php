<!doctype html>
<html> 
<head>
<meta name="viewport" content="width = 1050, user-scalable = no" />
<script type="text/javascript" src="magzine/jquery.min.1.7.js"></script>
<script type="text/javascript" src="magzine/modernizr.2.5.3.min.js"></script>
</head>
<body>

<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">
			<?php 
				
				$total_page=10;
				
				for($i=0;$i<$total_page;$i++)
				echo "<div style='background-image:url(magzine/pages/p".$i.".jpg)'></div>"
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
			
			// Height

			height:600,

			// Elevation

			elevation: 50,
			
			// Enable gradients

			gradients: true,
			
			// Auto center this flipbook

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