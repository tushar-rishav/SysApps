<?php
session_start();
error_reporting(~E_WARNING);
if(!isset($_SESSION["email"]))
{
  header("Location: ../index.php");
}

$user='u460965022_user';                          /**** establishing database connection****/
$pwd='Rum420';
$db='u460965022_user';

$con=mysqli_connect("mysql.hostinger.in",$user,$pwd,$db);

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  exit;
}

else
{



  if(isset($_POST['work'])){
    $wrk1=0;$wrk2=0;$wrk3=0;
  $wrk=$_POST['work'];
  if(!empty($wrk)){
      switch($wrk){
        case 1:$wrk1=1;
        $result=mysqli_query($con,"UPDATE detail SET wrk1='".$wrk1."' WHERE(email='".$_SESSION["email"]."')");
        mysqli_close($con);
        break;
        case 2:$wrk2=1;
        $result=mysqli_query($con,"UPDATE detail SET wrk2='".$wrk2."',wrk3='".$wrk3."' WHERE(email='".$_SESSION["email"]."')");
        mysqli_close($con);
        break;
        case 3:$wrk3=1;
        $result=mysqli_query($con,"UPDATE detail SET wrk3='".$wrk3."' WHERE(email='".$_SESSION["email"]."')");
        mysqli_close($con);
        break;
      }
  }





  }

  }



?>

<html>
    <head>
        <title>Workshops</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/GreyscaleBasic.font.js" type="text/javascript"></script>


		<link rel="stylesheet" href="css/style_w.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="css/style1_w.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="css/style_common_w.css" type="text/css" media="screen"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <script src="css/jquery.min.js" ></script>
    <script src="css/bootstrap.min.js" ></script>


    </head>
    <body>

    	<header >
    			<a href="../homepage.php" ><i class="fa fa-4x fa-home" style="color:green;z-index:99;float:left;position:absolute;top:3%;left:10%;" ></i></a>
      </header>
		<div id="fp_gallery" class="fp_gallery" style="position:absolute;top:10%; left:-10%;" >
			<div class="container1_w">
            <div class="main_w">
            <ul id="fp_galleryList" class="fp_galleryList">
            <li style="list-style-type: none;">

                <div class="view_w view-first_w" id="first_w">
                    <img src="images/w2.jpg">
                    <div class="mask_w">
                        <h2>Six Sigma</h2>

                        <a href="#" class="info">Read More</a>
                    </div>
                </div>
            </li>
            <li style="list-style-type: none;">
                <div class="view_w view-first_w">
                    <img src="images/w1.jpg" />
                    <div class="mask_w">
                        <h2>FlexSim</h2>

                        <a href="#" class="info">Read More</a>
                    </div>
                </div>
            </li>
            <li style="list-style-type: none;">
                <div class="view_w view-first_w">
                    <img src="images/w3.jpg" />
                    <div class="mask_w">
                        <h2>FluidSim</h2>

                        <a href="#" class="info">Read More</a>
                    </div>
                </div>
            </li>
            </ul>

            </div>
        </div>

			</div>
			<div id="fp_thumbContainer">
				<div id="fp_thumbScroller">
					<div class="container" id="container">
						<div class="content" id="content">
							<div class="content1">
								<h3>Six Sigma<br><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 2px; border-width: 0; align:center;"></h3><br>
								<h1>INTRODUCTION</h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
	                            <p>Lean Six Sigma Yellow Belt is an introductory course in Six Sigma Certification. The course is designed to give knowledge of Six Sigma methodology along with concepts, tools &amp; techniques. The program includes examples &amp; case studies.
	                            </p>
	                            <h1>COURSE OBJECTIVE</h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
	                            	<p>
	                            	To create awareness of various basic requirements of the Six Sigma methodology. DMAIC ( Define, Measure, Analyze, Improve and Control ) &amp; impart knowledge on how Six Sigma concepts is applied for the process improvement or solving specific problems.
	                          	</p>
	                          	<h1>BENEFITS</h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
	                          	<p>
	                             	<li>Exposure to world class practices followed in the industry. </li><br>
	                             	<li>This certificate will add value to participant&#39;s current career prospects. </li><br>
	                             	<li>Course is designed by experts in the field. </li><br>
	                          	</p>
	                          	<h1>COURSE FEATURES</h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
	                            <p>
	                            	The course covers the basic requirements of Six Sigma methodology and the application of the different tools and techniques for a specific problem or process improvement. The course is designed in such a way that any person with one or two years of working experience can easily understand the concept principles of the Six Sigma Methodology.
	                            </p>
	                           	<h1>COURSE CONTENT</h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
	                           	<p>
	                                   <li>Introduction to Six Sigma </li><br>
	                            	     <li>Development &amp; History</li><br>
									                   <li>Basics &amp; Overview of DMAIC</li><br>


                               </p>
                               <form  style="position:absolute;top:10%;left:50%;" method="post"  class="form-horizontal" action="<?php $_SERVER['PHP_SELF']?>" role="form" name="wrkreg" >
                                 Six Sigma&nbsp;<input type="checkbox" name="work" value="1" />&nbsp;
                                 <input type="submit" class="btn btn-success" value="register" ></input>
                               </form>
                        	</div>
						</div>


						</div>
					<div class="container">
						<div class="content">
							<div class="content1">
								<h3>FlexSim<br><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 2px; border-width: 0; align:center;"></h3><br>
								<h1>Build in a 3D world</h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
								<p>
									FlexSim simulation software was built from the ground up to take advantage of today&#39;s advanced 3D visualizations. Drag and drop objects into a virtual world. Create spatial relationships in your model to mimic your real life system. Include custom 3D shapes and CAD layouts.
									You&#39;ll simulate not only the behavior of your real life system, but also the look and feel, allowing you to immediately see what&#39;s going on.
									Many simulation packages are built on older 2D technology &#45; with 3D post-processors tacked on as an afterthought. Not with FlexSim. FlexSim simulation software was conceived to be the most sophisticated 3D discrete event package ever created.

								</p><br><br>

								<p>
									FlexSim 3D Simulation Software can easily model any
									process. The following is a partial list of the processes
									and systems that can be modeled using FlexSim:
								</p><br><br><br>
								<p>

									<li> Manufacturing processes and systems</li><br>
									<li> Material Handing</li><br>
									<li> Packaging lines</li><br>
									<li> Warehousing processes</li><br>
									<li> Supply chain operations</li><br>
									<li> Mining</li><br>
									<li> Foundry operations</li><br>
									<li> High-speed bottling</li><br>
									<li>Nutraceutical production systems</li><br>
									<li> Call centers</li><br>
									<li> Food processing and packaging</li><br>
									<li> Gas and oil production</li><br>
									<li> ASRS systems</li><br>
									<li> Sort centers</li><br>
									<li> Logistics</li><br>
									<li> Semiconductor and wafer manufacturing</li><br>
								</p>
							</div>
              <form  style="position:absolute;top:10%;left:50%;" method="post"  class="form-horizontal" action="<?php $_SERVER['PHP_SELF']?>" role="form" name="wrkreg" >
                FlexSim&nbsp;<input type="checkbox" name="work" value="2" />&nbsp;

                <input type="submit" class="btn btn-success" value="register" ></input>
              </form>
						</div>

					</div>



					<div class="container">
						<div class="content">
							<div class="content1">
								<h3>FluidSim<br><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 2px; border-width: 0; align:center;"></h3><br>
								<p>
									FluidSIM 5 is a comprehensive software for the creation, simulation, instruction and study of electropneumatic, electrohydraulic, digital and electronic circuits.<br><br>
									All of the programme functions interact smoothly, combining different media forms and sources of knowledge in an easily accessible fashion. FluidSIM unites an intuitive circuit diagram editor with detailed descriptions of all components, component photos, sectional view animations and video sequences. As a result FluidSIM is perfect not only for use in lessons but also for the preparation thereof and as a self-study programme.<br><br>
									A major feature of FluidSIM is its close connection with CAD functionality and simulation. FluidSIM allows DIN-compliant drawing of electro-pneumatic circuit diagrams and can perform realistic simulations of the drawing based on physical models of the components. Simply stated, this eliminates the gap between the drawing of a circuit diagram and the simulation of the related pneumatic system.<br><br>
									The CAD functionality of FluidSIM has been specially tailored for fluidics.<br>
								</p>
							</div>
              <form  style="position:absolute;top:10%;left:50%;" method="post"  class="form-horizontal" action="<?php $_SERVER['PHP_SELF']?>" role="form" name="wrkreg" >
                FluidSim&nbsp;<input type="checkbox" name="work" value="3" />
                <input type="submit" class="btn btn-success" value="register" ></input>
              </form>
						</div>

					</div>

				</div>
			</div>



		<!--  JAVASCRIPT -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript">
			$(function() {
				//caching
				//the main container for the thumbs structure
				var $fp_thumbContainer 	= $('#fp_thumbContainer');
				//wrapper of jquery ui slider
				var $fp_scrollWrapper	= $('#fp_scrollWrapper');
				var gallery_idx=-1;
				//scroller wrapper
				var $fp_thumbScroller	= $('#fp_thumbScroller');
				//jquery ui slider
				var $slider				= $('#slider');
				//the links of the galleries (the cities)
				var $fp_galleries		= $('#fp_galleryList > li');


				//User clicks on a city / gallery;
				$fp_galleries.bind('click',function(){
					$fp_galleries.removeClass('current');
					var $gallery 		= $(this);
					$gallery.addClass('current');
					var gallery_index 	= $gallery.index();
					if(gallery_idx == gallery_index) return;
					gallery_idx			= gallery_index;
					//close the gallery and slider if opened
					if($fp_thumbContainer.data('opened')==true){
						$fp_scrollWrapper.fadeOut();
						$fp_thumbContainer.stop()
										  .animate({'height':'0px'},200,function(){
											openGallery($gallery);
										  });
					}
					else
						openGallery($gallery);
				});

				//opens a gallery after cliking on a city / gallery
				function openGallery($gallery){
					//current gets reseted
					current				= 0;
					//wrapper of each content div, where each image is
					var $fp_content_wrapper = $fp_thumbContainer.find('.container:nth-child('+parseInt(gallery_idx+1)+')');
					//hide all the other galleries thumbs wrappers
					$fp_thumbContainer.find('.container').not($fp_content_wrapper).hide();
					//and show this one
					$fp_content_wrapper.show();
					//total number of images
					nmb_images			= $fp_content_wrapper.children('div').length;
					//calculate width,
					//padding left
					//and padding right for content wrapper
					var w_width 	= 0;
					var padding_l	= 0;
					var padding_r	= 0;
					//center of screen
					var center		= $(window).width()/100;
					var one_divs_w  = 0;
					/*
					Note:
					the padding left is the center minus half of the width of the first content div
					the padding right is the center minus half of the width of the last content div
					*/
					$fp_content_wrapper.children('div').each(function(i){
						var $div 		= $(this);
						var div_width	= $div.width();
						w_width			+=div_width;
						//if first one, lets calculate the padding left
						if(i==0)
							padding_l = center - (div_width/3);
						//if last one, lets calculate the padding right
						if(i==(nmb_images-1)){
							padding_r = center - (div_width/3);
							one_divs_w= div_width;
						}
					}).end().css({

					});

					//scroll all left;
					$fp_thumbScroller.scrollLeft(w_width);

					//innitialize the slider
					$slider.slider('destroy').slider({
						orientation	: 'horizontal',
						max			: w_width -one_divs_w,//total width minus one content div width
						min			: 0,
						value		: 0,
						slide		: function(event, ui) {
							$fp_thumbScroller.scrollLeft(ui.value);
						},
						stop: function(event, ui) {
							//when we stop sliding
							//we may want that the closest picture to the center
							//of the window stays centered. Uncomment the following line
							//if you want that behaviour
							checkClosest();
						}
					});
					//open the gallery and show the slider
					$fp_thumbContainer.animate({'height':'440px'},2000,function(){
						$(this).data('opened',true);
						$fp_scrollWrapper.fadeIn();
					});

					//scroll all right;
					$fp_thumbScroller.stop()
									 .animate({'scrollLeft':'50px'},2000,'easeInOutExpo');

					//User clicks on a content div (image)
					$fp_content_wrapper.find('.content')
									 .bind('click',function(e){
						var $current 	= $(this);
						//track the current one
						current			= $current.index();
						//center and show this image
						//the second parameter set to true means we want to
						//display the picture after the image is centered on the screen
						centerImage($current,true,600);
						e.preventDefault();
					});
				}



				//shows next or previous image
				//1 is right;0 is left
				function navigate(way){
					//show loading image
					$fp_loading.show();
					if(way==1){
						++current;
						var $current = $fp_thumbScroller.find('.container:nth-child('+parseInt(gallery_idx+1)+')')
														.find('.content:nth-child('+parseInt(current+1)+')');
						if($current.length == 0){
							--current;
							$fp_loading.hide();
							photo_nav = true;
							return;
						}
					}
					else{
						--current;
						var $current = $fp_thumbScroller.find('.container:nth-child('+parseInt(gallery_idx+1)+')')
														.find('.content:nth-child('+parseInt(current+1)+')');
						if($current.length == 0){
							++current;
							$fp_loading.hide();
							photo_nav = true;
							return;
						}
					}

					//load large image of next/previous content div
					$('<img id="fp_preview" />').load(function(){
						$fp_loading.hide();
						var $large_img 		= $(this);
						var $fp_preview 	= $('#fp_preview');

						//make the current one slide left if clicking next
						//make the current one slide right if clicking previous
						var animate_to 		= -$fp_preview.width();
						var animate_from	= $(window).width();
						if(way==0){
							animate_to 		= $(window).width();
							animate_from	= -$fp_preview.width();
						}

						//now we want that the thumb (of the last image viewed)
						//stays centered on the screen
						centerImage($current,false,1000);

						$fp_preview.stop().animate({'left':animate_to+'px'},500,function(){
							$(this).remove();
							$large_img.addClass('fp_preview');
							getFinalValues($large_img);
							var largeW 	= $large_img.data('width');
							var largeH 	= $large_img.data('height');
							var $window	= $(window);
							var windowW = $window.width();
							var windowH = $window.height();
							var windowS = $window.scrollTop();
							$large_img.css({
								'width'	: largeW+'px',
								'height': largeH+'px',
								'top'	: windowH/2 -largeH/2 + windowS + 'px',
								'left'		: animate_from + 'px',
								'opacity' 	: 1
							}).appendTo($fp_gallery)
							  .stop()
							  .animate({'left':windowW/2 -largeW/2+'px'},500,function(){photo_nav = true;});
						});
					}).attr('src',$current.find('img').attr('alt'));
				}



			});
		</script>
    </body>
</html>
