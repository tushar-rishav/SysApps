<?php

session_start();

error_reporting(~E_WARNING);

if(isset($_SESSION["email"]))

{

	header("Location: homepage.php");

}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Prodigy'15</title>
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=yes,height=device-height" />
	<meta name="description" content="Production department Symposium" />
	<meta name="keywords" content="Production Engg,NIT Trichy" />
	<meta charset="UTF-8" />
	<link rel="icon" href="css/images/logo.png" type="image/x-icon"/>
	<link rel="shortcut icon" href="css/images/logo.png" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="css/home.css" />
	<link rel="stylesheet" type="text/css" href="css/smoke.css" />

	<link rel="stylesheet" type="text/css" href="css/hotspot.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<!--guest lectures-->
	<!--        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

	<!--guest lectures-->

	<link rel="stylesheet" type="text/css" href="contacts/css/style_common_c.css" />
	<link rel="stylesheet" type="text/css" href="contacts/css/style9_c.css" />

	<link rel="stylesheet" href="guestlectures/css/style_gl.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="guestlectures/css/style1_gl.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="guestlectures/css/style_common_gl.css" type="text/css" media="screen"/>

	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="css/navigation.css" />
	<link rel="stylesheet" type="text/css" href="css/smoke_h.css" />


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



	<script src="css/jquery.min.js" ></script>
	<script src="css/bootstrap.min.js" ></script>

	<script type="text/javascript" src="css/jquery.fullPage.js"></script>

	<script type="text/javascript">



		$(document).ready(function() {
			$('#fullpage').fullpage({

				anchors: ['home', 'about','gl','event','work', 'contact'],
				menu: '#menu',
				scrollingSpeed: 800
			});
		});


	</script>


	<script src="css/typed.js" type="text/javascript"></script>
	<script>
		$(function(){
			$("#typed").typed({
				strings: ["Login to register for events and workshops", "Participate and win prizes worth &#8377;40000!" , "Prodigy&#39;15&#8212;March 21, 22, 23"],
				typeSpeed: 30,
				backDelay: 500,
				loop: false,
				contentType: 'html', // or text
				loopCount: false,
				showCursor: true,
				cursorChar: "|"
			});

		});
	</script>

	<style>

		.typed-cursor{
			opacity: 1;
			font-weight: 100;
			-webkit-animation: blink 0.7s infinite;
			-moz-animation: blink 0.7s infinite;
			-ms-animation: blink 0.7s infinite;
			-o-animation: blink 0.7s infinite;
			animation: blink 0.7s infinite;
		}
		@-keyframes blink{
			0% { opacity:1; }
			50% { opacity:0; }
			100% { opacity:1; }
		}
		@-webkit-keyframes blink{
			0% { opacity:1; }
			50% { opacity:0; }
			100% { opacity:1; }
		}
		@-moz-keyframes blink{
			0% { opacity:1; }
			50% { opacity:0; }
			100% { opacity:1; }
		}
		@-ms-keyframes blink{
			0% { opacity:1; }
			50% { opacity:0; }
			100% { opacity:1; }
		}
		@-o-keyframes blink{
			0% { opacity:1; }
			50% { opacity:0; }
			100% { opacity:1; }

			.section{
				height:100%;
				width:100%;

			}
			.slide{
				height:30%;
				width:100%;
			}
			.error{
				color:red;
				font-weight: lighter;
				height: auto;
				width: 10px;

			}
			.fa{
				cursor:pointer;
			}


			input{
				width:80%;
				text-align:center;
				color:white;
			}



		</style>

	</head>
	<style>
		p{
			font-family: monospace !important;
			font-style: normal !important;
		}
		li{
			font-family: monospace !important;
			font-style: normal !important;
		}
		h1{
			font-family: monospace !important;
			font-style: normal !important;
		}
		h2{
			font-family: monospace !important;
			font-style: normal !important;
		}
		h3{
			font-family: monospace !important;
			font-style: normal !important;
		}
		h4{
			font-family: monospace !important;
			font-style: normal !important;
		}
		.section{
			background-image: url("css/images/f-bg.png");
			background-repeat: repeat;
		}
	</style>

	<body style="cursor:url('css/images/cursor.png');">

		<!--smoke-->
		<style>
			.wrapper { float: left; clear: left; display: table; table-layout: fixed; }
			.smoke_h { display: table-cell;  max-width: 100%;  margin-top: 0%; padding-top: 0%; margin-left: 4%; padding-left: 0%; z-index:8;}
		</style>
		<!--/smoke-->


		<div id="fullpage">
			<!-- isolate the mess -->

			<div id="backg" class="section" data-anchor="home">

				<!--smoke-->
				<div class="wrapper col-md-18">


					<div class="smoke_h">
						<span class="s0_h"></span>
						<span class="s1_h"></span>
						<span class="s2_h"></span>
						<span class="s3_h"></span>
						<span class="s4_h"></span>
						<span class="s5_h"></span>
						<span class="s6_h"></span>
						<span class="s7_h"></span>
						<span class="s8_h"></span>
						<span class="s9_h"></span>
					</div>
				</div>

				<!--/smoke-->


				<div id="canvasesdiv" style="position:relative; top:1%;left:16%;  width:300px; height:500px; ">

					<canvas id="canvas" style="z-index: 7; position:absolute; left:0px;top:0px"></canvas>
					<canvas id="gear1canvas" style="z-index: 2; position:absolute;left:0px;top:0px;"></canvas>

					<canvas id="gear2canvas" style="z-index: 3; position:absolute;left:0px;top:0px;"></canvas>
					<canvas id="gear3canvas" style="z-index: 4; position:absolute;left:0px;top:0px;"></canvas>
					<canvas id="gear4canvas" style="z-index: 6; position:absolute;left:0px;top:0px;"></canvas>
					<canvas id="gear5canvas" style="z-index: 5; position:absolute;left:0px;top:0px;"></canvas>
					<canvas id="gear6canvas" style="z-index: 1; position:absolute;left:0px;top:0px;"></canvas>
				</div>
				<div class="container" style="z-index: 34;
				position: fixed;
				top: 86%;
				background: none repeat scroll 0% 0% black;
				width: 100%;
				height: 14.2%;">
			</div>

		</div>



		<div class="section" data-anchor="about" style="background-size:100% 100%;" >

			<p style="width:60%;text-align:center;margin:20%;font-size:17px;">
				PRODIGY is the annual symposium of the Production Engineering Department of NIT Trichy. In this ever changing world of Technology, innovation is the key to success.It is required to keep learning to stay in the race.
				At Prodigy, we provide the platform to learn and create a need to innovate, push you to your limits and bring alive the prodigy in you.
				<br><br> Follow us on <a href = "https://www.facebook.com/pages/PRODIGY-NIT-Trichy/1398887780370598"><i class="fa fa-2x fa-facebook" style="color:brown;"></i>acebook</a>
				<br>Mail us at prodigy15.nitt@gmail.com </p>
			</div>


			<div class="section" data-anchor="gl">

				<div class="slide">

					<div class="media">
						<a class="pull-left" href="#">
							<span style="font-weight:800;color:black;font-size:16px;font-family:monospace;position:relative;" >V.Balasubramanian</span><br/>
							<img class="img img-rounded" style="width:30%;height:30%;position:relative"  src="guestlectures/images/gl2.jpg"
							alt="Media Object">

						</a>
						<div class="media-body" style="position:relative;left:-15%;font-family:monospace;text-align:center;">
							<h2 class="media-heading glCustom">Advancements in Industrial Engineering</h2>


							<br/><br/>
							<p style="width:70%;position:relative;left:15%;font-family:monospace;font-size:16px;text-align:center;">
								An IITM alumnus, who has a three decades of experience in steel industry worked as Deputy manager SAIL, Director Operations, ISSAL, Joint managing director ISMT, Director Tridem Port& Power Co. Pvt. Ltd ,
								Presently CEO Kalyani Carpenter Special Steel Ltd
								Co Author and edCo&#8211;Author and editor of Book on &#34;HAND BOOK OF MATERIALS&#34;
								Published by SAIL, Rourkela Steel Plant.
								Director of Indo &#8211; German Club.
							</p>

						</div>
					</div>

				</div>

				<div class="slide">

					<div class="media">
						<a class="pull-left" href="#">
							<span style="font-weight:800;color:black;font-size:16px;font-family:monospace;position:relative;" >T.Chinnadurai</span><br/>
							<img class="img img-rounded" style="width:30%;height:30%;"  src="guestlectures/images/gl1.jpg"
							alt="Media Object">

						</a>
						<div class="media-body" style="position:relative;left:-15%;font-family:monospace;text-align:center;">
							<h2 class="media-heading glCustom">Supply Chain Management</h2>
							<br/><br/>
							<p style="width:70%;position:relative;left:15%;font-family:monospace;font-size:16px;text-align:center;">

								A NITT Alumnus, working as President &#8211; PAN India at St.John&#39;s logistics, Chennai . He was former board of director at TVS logistics, Vice President- Marketing at ISMT, Pune. He was the Head  International business /Marketing and Operation at Murugappa Group.
								Manager- Product  and Customer Service of Royal Enfield Motors Limited - Eicher  Group.
							</p>

						</div>
					</div>

				</div>

				<div class="slide">

					<div class="media">
						<a class="pull-left" href="#">
							<span style="font-weight:800;color:black;font-size:16px;font-family:monospace;position:relative;left:-10%;" >Shanmugham.M</span><br/>
							<img class="img img-rounded" style="width:30%;height:30%;position:relative;left:-10%;"  src="guestlectures/images/gl3.jpg"
							alt="Media Object"><br/>

						</a>
						<div class="media-body" style="position:relative;left:-25%;font-family:monospace;text-align:center;">
							<h2 class="media-heading glCustom">Rich Product Development and Tooling</h2>


							<br/><br/>
							<p style="width:100%;font-family:monospace;font-size:16px;text-align:center;">

								A Madras Institute of Technology Alumnus, he is the Associate Vice President of Product Development at T.I.Cycles of india.
								He was the Sr Engineer, Development at Vibormech Engineers and AGM Design and Development at Sundram Fasteners.;
							</p>

						</div>
					</div>

				</div>



			</div>

			<div class="section" data-anchor="event">

				<div class="slide">
					<p style="position:relative;top:4%;"> <b style="position:relative;left:-14%;font-size:18px;font-family:monospace;">CAD Modeling</b><b style="position:relative;left:-3%;font-size:18px;font-family:monospace;">Paper Presentation</b>
						<b style="position:relative;left:9%;font-size:18px;font-family:monospace;">Tech Quiz</b> </p>
						<div class="event_wrap"  style="background:url('css/images/cad.jpg');background-size:100% 100%;background-repeat:no-repeat;" ></div>
						<div class="event_wrap"  style="background:url('css/images/paper.jpg');background-size:100% 100%;background-repeat:no-repeat;" ></div>
						<div class="event_wrap"  style="background:url('css/images/quiz.jpg');background-size:100% 100%;background-repeat:no-repeat;" ></div><br/>
						<p  style="position:relative;top:4%;" > <b style="position:relative;left:-7%;font-size:18px;font-family:monospace;">Da Vinci</b><b style="position:relative;left:7%;font-size:18px;font-family:monospace;">Industrial problem solving</b>
						</p>
						<div class="event_wrap"  style="background:url('css/images/dav.jpg');background-size:100% 100%;background-repeat:no-repeat;" ></div>
						<div class="event_wrap"  style="background:url('css/images/case.jpg');background-size:100% 100%;background-repeat:no-repeat;" ></div>

					</div>

					<div class="slide" >
						<div class="media" style="line-height:-20px;overflow-y:scroll;height:70%;" >

							<div class="media-body" style="position:relative;left:5%;text-align:center;width:80%;">
								<h1 class="media-heading glCustom" style="font-family:monospace;" >Paper Presentation</h3>
									<div class="content1" >

										<h3 style="float:left;">Event Description</h3><br/><br/>

										<br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;" />
										<p style="font-family:monospace;" >Prodigy invites papers from students on topics from the following streams:</p>
										<ol>
											<li>Design and Product Development</li>
											<li>Precision Engineering and Manufacturing</li>
											<li>Advances in Manufacturing Processes</li>
											<li>New Tools/Techniques for Manufacturing</li>
											<li>Robotics and Manufacturing Automation</li>
											<li>Additive Manufacturing</li>
											<li>Advances in Materials Forming</li>
											<li>Micro-machining and Laser Processing</li>
											<li>Surface Engineering</li>
											<li>Materials Processing Technology</li>
											<li>Engineering Optimization</li>
											<li>Modeling of Manufacturing Processes</li>
											<li>Rapid Prototyping</li>
											<li>High Speed Machining</li>
											<li>Total Productive Maintenance</li>
											<li>Analysis and Simulation of Manufacturing Systems</li>
											<li>Operations Management</li>
											<li>Supply Chain Management & Logistics</li>
											<li>Sustainable Manufacturing</li>
											<li>Smart Manufacturing</li>
											<li>Lean Manufacturing</li>
											<li>Responsive Manufacturing</li>
											<li>Human Factors Engineering</li>
											<li>Advanced Data Analytics</li>
											<li>Multi-Criteria Decision Making</li>
											<li>Operations Research</li>
											<li>Human Factors and ergonomics</li>
											<li>Industrial Robotics</li>
											<li>Flexible Manufacturing Systems</li>
											<li>Quality Engineering and Taguchi Methods</li>
											<li>Evolutionary Algorithms and Heuristics</li>
											<li>Safety Engineering and Management</li>
											<li>Six Sigma and TQM</li>
											<li>Enterprise Resource Planning</li>
										</ol>
										<p>At Prodigy, we are looking for freshness in ideas. Ingenuity, imagination and originality are the factors by which your papers will be judged - not by technicality or jargon. Present your work before renowned professors in the field and walk away with prizes!<br><br>
											Shortlisted participants will be called to give an oral presentation of their paper at NIT Trichy during Prodigy'15
										</p>
										<h3 style="float:left;" >Format:</h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;" />
										<p>
											The event consists of 2 rounds.</p>
											<p>
												<b>Round 1</b>: The paper has to be sent to mail id: <b>prodigy15.nitt@gmail.com</b> before <b>15th March, 2015</b> by </b>5:00 PM </b> in the <b><a href="IEEE_format.doc" target="_blank">IEEE format</a></b>. Those who have been selected will receive a mail and are expected to come to NIT, Trichy for the Round 2.
											</p><br>
											<p>
												<b>Round 2</b>: Paper should be presented in terms of a presentation (ppt) in front of leading professionals in the respective field in our college.
											</p>
										</p>
										<h3 style="float:left;" >Rules: </h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;" />
										<p>
											1.Event manager&#39;s decisions are final<br>
											2.Round 1: Abstracts mailed after the deadline won&#39;t be taken into consideration.<br>
											3.Round 2: The participants have to be in NIT, Trichy in formals.<br/>
											4.Bring three printouts of the paper.<br>
											5.The participants have 10 mins for presenting their paper and the presentation should be in form of points and not in terms of sentences.<br>

										</p>
										<h3 style="float:left;" >Judging Criteria:</h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;" />
										<p>Ingenuity, imagination and originality are the factors by which your papers will be judged - not by technicality or jargon. </p>

										<h3 style="float:left;" >Prize Money: </h3><br><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
										<p> prizes will be given separately under three categories-general,industrial and manufacturing </p>
										<p>

											1st&nbsp;&#8377;3000 <br><br>
											2nd&nbsp;&#8377;1500 <br><br>
										</p>


										<h3 style="float:left;" >Event Manager&#39;s Contact </h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;" />
										<p>
											Nachiappan Velappan &nbsp;<br/>
											<i style="color:lightgreen;" class="fa fa-2x  fa-mobile"></i>&nbsp; 09677000463<br/>
											<i style="color:lightgreen;" class="fa fa-2x  fa-envelope"></i>&nbsp;vnachi93@gmail.com<br/>
										</p>


									</div>

								</div>
							</div>
						</div>

						<div class="slide">
							<div class="media" style="line-height:-20px;overflow-y:scroll;height:70%;" >

								<div class="media-body" style="position:relative;left:5%;text-align:center;width:80%;">
									<h1 class="media-heading glCustom" style="font-family:monospace;" >Da Vinci</h1>
									<div class="content1" >


										<h3 style="float:left;">Event Description</h3><br/><br/>

										<br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;" />
										<p>
											Da Vinci puts your fabrication skills to test. Participate in this fabrication contest and fetch your reward.
											<br><br>
										</p>

										<h3 style="float:left;" >Format:</h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
										<p>
											The event consist of 2 rounds. <br><br>
											<ol class="c">
												<li>Round 1: A written round which will consist of questions testing your basics of manufacturing, manufacturing steps, and your design skills.</li>

												<p>Those who have cleared the Round 1 are eligible for Round 2 </p><br>

												<li>Round 2: You get into workshop and given a design. You have to complete the fabrication within the stipulated time. You will be have access to all available machines and tools( lathe, single point tool, drilling tool, boring bar, milling machine,etc. ) needed.</li>
											</ol>

											<br><br>

										</p>
										<h3 style="float:left;">Rules: </h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
										<p>
											<li>Event manager's decisions are final  </li><br>
											<li>Round 1 would be a 1 hour test</li><br>
											<li>Round 2 would be a 3 hour event </li><br>
											<li>Any late submission will not be evaluated</li><br>


										</p>
										<h3 style="float:left;" >Judging Criteria:</h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
										<p>
											<li>Round 1 is purely marks based </li><br>
											<li>Round 2 has a lot of parameters </li><br>
											<ol class="d">
												<li>Time of completion </li><br><br>
												<li>Dimensional accuracy</li><br><br>
												<li>Surface roughness</li><br><br>
												<li>Nature of the chips, swarf produced </li><br><br>
												<li>Steps used to manufacture </li><br><br>
											</ol>
											<li>Top three places are awarded cash prizes. </li><br>



										</p>
										<h3 style="float:left;">Prize Money: </h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
										<p>

											1st&nbsp;&#8377;4000 <br><br>
											2nd&nbsp;&#8377;2000 <br><br>
											3rd&nbsp;&#8377;1000 <br><br>


										</p>

										<h3 style="float:left;">Event Manager&#39;s Contact </h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;" />
										<p >
											R.Karthikeyan<br/>
											<i style="color:lightgreen;" class="fa fa-2x  fa-mobile"></i>&nbsp; 9445914443<br/>
											<i style="color:lightgreen;" class="fa fa-2x  fa-envelope"></i>&nbsp;karthikyan@outlook.com<br/>
										</p>

									</div>

								</div>
							</div>
						</div>


						<div class="slide">
							<div class="media" style="line-height:-20px;overflow-y:scroll;height:70%;" >

								<div class="media-body" style="position:relative;left:5%;text-align:center;width:80%;">
									<h1 class="media-heading glCustom" style="font-family:monospace;" >Tech Quiz</h3>
										<div class="content1" >

											<h3 style="float:left;">Event Desciption </h3><br/><br>

											<hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
											<p>
												A technical quiz involving concepts of science and engineering. A platform to put to use what you have learnt and walk away with prizes.

											</p><br><br>

											<h3 style="float:left;">Format</h3><br/><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
											<p>
												A preliminary written round from which the participants will be selected for the finals which may involve multiple rounds which will be revealed on the spot

												<br><br>

											</p>
											<h3 style="float:left;">Rules </h3><br/><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
											<p>
												<li>Maximum of 2 people per team.</li><br>
												<li>Decisions of the quiz master are final.</li><br>


											</p>
											<h3 style="float:left;">Registrations</h3><br/><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
											<p>
												On the spot before the start of the event.


											</p>
											<h3 style="float:left;">Prize Money </h3><br/><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
											<p>

												1st&nbsp;&#8377;3000 <br><br>
												2nd&nbsp;&#8377;2000 <br><br>
												3rd&nbsp;&#8377;1000 <br><br>


											</p>

											<h3 style="float:left;">Event Manager&#39;s Contact </h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
											<p>
												Arun Doss&nbsp;<br/>
												<i style="color:lightgreen;" class="fa fa-2x  fa-mobile"></i>&nbsp;09786155123<br/>
												<i style="color:lightgreen;" class="fa fa-2x  fa-envelope"></i>&nbsp;arundoss234@gmail.com<br/>
											</p>


										</div>

									</div>
								</div>
							</div>
							<div class="slide">
								<div class="media" style="line-height:-20px;overflow-y:scroll;height:70%;" >

									<div class="media-body" style="position:relative;left:5%;text-align:center;width:80%;">
										<h1 class="media-heading glCustom" style="font-family:monospace;" >Industrial problem solving</h3>
											<div class="content1" >

												<h3 style="float:left;">Event Desciption </h3><br/><br>

												<hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
												<p>
													This event is specifically designed to combine engineering and management concepts. It is an event which challenges your logical, analytical, managerial abilities and kindles your creativity and innovation. The participants will be tested on their ability to solve a real time industrial case study or problem in the given time.

												</p><br><br>

												<h3 style="float:left;" >Format:</h3><br/><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
												<p>
													All the rounds of this event will be held during Prodigy'15 at NIT-Trichy.
													<li>	Round 1: Written round (will test general aptitude, logic, problem solving and response to situations)</li><br>
													<li>	Round 2: Case study/Problem statement </li><br>
													<li>	Round 3: Presentation and marketing of solution</li><br>

													<br><br>

												</p>
												<h3 style="float:left;" >Rules: </h3><br><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
												<p>
													<li>	A team of maximum 3 participants can participate</li><br>
													<li>	All rounds are eliminative</li><br>
													<li>	Event manager's decision is always final</li><br>



												</p>
												<h3 style="float:left;" >Judging Criteria:</h3><br/><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
												<p>
													The main judging criteria for the case study and presentation rounds are creativity, innovation and the thought process.


												</p>
												<h3 style="float:left;" >Prize Money: </h3><br/><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
												<p>

													1st&nbsp;&#8377;3000 <br><br>
													2nd&nbsp;&#8377;2000 <br><br>
													3rd&nbsp;&#8377;1000 <br><br>



												</p>
												<h3 style="float:left;" >Event Manager&#39;s Contact </h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
												<p>
													Balajee Chandrasekar&nbsp;<br/>
													<i style="color:lightgreen;" class="fa fa-2x  fa-mobile"></i>&nbsp;09176690504<br/>
													<i style="color:lightgreen;" class="fa fa-2x  fa-envelope"></i>&nbsp;balajee.chandrasekar@gmail.com<br/>
												</p>

											</div>

										</div>
									</div>
								</div>
								<div class="slide">
									<div class="media" style="line-height:-20px;overflow-y:scroll;height:70%;" >

										<div class="media-body" style="position:relative;left:5%;text-align:center;width:80%;">
											<h1 class="media-heading glCustom" style="font-family:monospace;" >CAD Modeling</h3>
												<div class="content1" >

													<h3 style="float:left;">Event Desciption </h3><br/><br/>

													<hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
													<p>
														The event tests your knowledge and creativity in the areas of design and modeling.
														<li>The event will consist of 2 stages- a prelims and a final round.</li><br>
														<li>Prelims will be a written round to test your theoretical approach towards designing</li><br>
														<li>Final round will consist of developing the model for a given problem statement using one of the following modeling software only:</li><br>
														<ol class="d">
															<li>Auto CAD</li><br><br>
															<li>Pro/Engineer</li><br><br>
															<li>CATIA</li><br><br>
														</ol>

													</p><br><br>


													<h3 style="float:left;" >Rules: </h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
													<p>
														<li>Two members per team are allowed to participate in the event.</li><br>
														<li>Personal laptops are not allowed. Systems will be allocated to each team. </li><br>
														<li>The problem statement and time limit will be provided at the time of the event.</li><br>
														<li>No extra time will be provided, in any case.</li><br>
														<li>Use of any malpractices such as use of USB, mobile phones etc. will lead to immediate disqualification from the event </li><br>
														<li>Damage in any sense caused to the machines would be dealt with severe action leading to penalty and disqualification. </li><br>


													</p>
													<h3 style="float:left;" >Judging Criteria:</h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
													<p>
														Candidates will be judged based on:
														<li>Adherence to the time limit </li><br>
														<li>	Accuracy </li><br>

														<li>	Creativity </li><br>



													</p>
													<p>
														Participation certificate will be given for all participants of the event.

													</p>
													<h3 style="float:left;" >Prize Money: </h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
													<p>

														1st&nbsp;&#8377;4000 <br><br>
														2nd&nbsp;&#8377;2000 <br><br>
														3rd&nbsp;&#8377;1000 <br><br>


													</p>
													<h3 style="float:left;" >Event Manager&#39;s Contact </h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
													<p>
														S.Parthasarathy&nbsp;<br/>
														<i style="color:lightgreen;" class="fa fa-2x  fa-mobile"></i>&nbsp;9445483394<br/>
														<i style="color:lightgreen;" class="fa fa-2x  fa-envelope"></i>&nbsp;parthasarathy.subburaj@gmail.com<br/>
													</p>

												</div>

											</div>
										</div>
									</div>




								</div>



								<div class="section" data-anchor="work"  style="background:url('css/images/f-bg.png');background-size:100% 100%;background-repeat:no-repeat;" >

									<div class="slide" style="background-image: url("css/images/f-bg.png");
									background-repeat: repeat;">

									<div class="event_wrap"  style="background:url('css/images/fluid.jpg');background-size:100% 100%;background-repeat:no-repeat;" ></div>
									<div class="event_wrap"  style="background:url('css/images/flexsim.jpg');background-size:100% 100%;background-repeat:no-repeat;" ></div>
									<div class="event_wrap"  style="background:url('css/images/sixsigma.png');background-size:100% 100%;background-repeat:no-repeat;" ></div><br/>

								</div>


								<div class="slide">

									<div class="media" style="overflow-y:scroll;height:70%;" >

										<div class="media-body"  style="width:80%;margin-left:10%;">
											<h1 class="media-heading glCustom" style="font-family:monospace;" >Six Sigma</h3>
												<div class="content1" >
													<h3 style="float:left;">Workshop Description </h3><br/><br/>
													<hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
													<p style="width:100%;font-family:monospace;font-size:16px;">
														Lean Six Sigma Yellow Belt is an introductory course in Six Sigma Certification.<br/>
														It is designed to give knowledge of Six Sigma methodology along with concepts, tools & techniques.<br/>
														You will be introduced to DMAIC (Define, Measure, Analyze,
														Improve and Control) & how Six Sigma concepts is applied for the process improvement or solving specific problems.
													</p>
													<h3 style="float:left;">Benefits</h3><br/><br/><hr style=" width: 40%; color: red; background-color: #fc0; height: 2px; border-width: 0; align:center;">
													<p style="width:100%;font-family:monospace;font-size:16px;">
														Exposure to world class practices followed in the industry.
														This certificate will add value to participant&#39;s current career prospects.
														Course is designed by experts in the field who have conducted this workshop at various NITTs ,NITTE and Corporates like HAL, Cognizant etc.

													</p>
													<p style="width:100%;font-family:monospace;font-size:16px;">
														Certificate will be provided by MSME(Ministry of Micro, Small & Medium Enterprises)
													</p>

													<hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
													<p style="width:100%;font-family:monospace;font-size:16px;">
														Registration Fee Rs 400 (On-Spot)
													</p>

												</div>
											</div>
										</div>
									</div>


									<div class="slide">

										<div class="media" style="overflow-y:scroll;height:70%;" >

											<div class="media-body"  style="width:80%;margin-left:10%;">
												<h1 class="media-heading glCustom" style="font-family:monospace;" >FlexSim</h3>
													<div class="content1" >
														<h3 style="float:left;">Workshop Description </h3><br/><br/>
														<hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
														<p style="width:100%;font-family:monospace;font-size:16px;">
															FlexSim simulation software was built from the ground up to take advantage of today&#39;s advanced 3D visualizations. Drag and drop objects into a virtual world. Create spatial relationships in your model to mimic your real life system. Include custom 3D shapes and CAD layouts.You&#39;ll simulate not only the behavior of your real life system, but also the look and feel, allowing you to immediately
															see what&#39;s going on.FlexSim simulation software was conceived to be the most sophisticated 3D discrete event package ever created.
														</p>
														<hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
														<p style="width:100%;font-family:monospace;font-size:16px;"> Registration Fee Rs 200 (On-Spot) </p>

													</div>
												</div>
											</div>
										</div>



										<div class="slide">

											<div class="media" style="overflow-y:scroll;height:70%;" >

												<div class="media-body" style="width:80%;margin-left:10%;">
													<h1 class="media-heading glCustom" style="font-family:monospace;" >FluidSim</h3>
														<div class="content1" >
															<h3 style="float:left;">Workshop Description </h3><br/><br/>
															<hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
															<p style="width:100%;font-family:monospace;font-size:16px;">
																FluidSiM 5 is a comprehensive software for the creation, simulation, instruction and study of electropneumatic, electrohydraulic, digital and electronic circuits.FluidSIM unites an intuitive circuit diagram editor with detailed descriptions of all components, component photos, sectional view animations and video sequences. As a result FluidSIM is perfect not only for use in lessons but also for the preparation thereof and as a self-study programme.A major feature of FluidSIM is its close connection with CAD functionality and simulation. FluidSIM allows DIN-compliant drawing of electro-pneumatic circuit diagrams and can perform realistic simulations of the drawing based on physical models of the components.
																Simply stated, this eliminates the gap between the drawing of a circuit diagram and the simulation of the related pneumatic system.

															</p>
															<hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
															<p style="width:100%;font-family:monospace;font-size:16px;"> Registration Fee Rs 200 (On-Spot) </p>




														</div>
													</div>
												</div>
											</div>


										</div>



										<div class="section" data-anchor="contact" style="background:url('css/images/f-bg.png');background-size:100% 100%;background-repeat:no-repeat;" >


											<!-- contacts goes here -->

											<div class="main_c" style="width:90%; height:auto;margin:15%;position:relative;top:-14%;" >

												<div class="view_c view-ninth_c" style="background:url('contacts/images/chairman.png');background-size:100% 100%;background-repeat:no-repeat;" >

													<div class="mask_c mask-1_c"></div>
													<div class="mask_c mask-2_c"></div>
													<div class="content_c">
														<h2>Chairman</h2>
														<p>Subramaniam<br/>
															<span><i style="color:aqua;" class="fa fa-2x  fa-mobile"></i>&nbsp;9677052097</span>
														</p>
													</div>
												</div>
												<div class="view_c view-ninth_c" style="background:url('contacts/images/Over-all-Co-Ordinator.png');background-size:100% 100%;background-repeat:no-repeat;" >

													<div class="mask_c mask-1_c"></div>
													<div class="mask_c mask-2_c"></div>
													<div class="content_c">
														<h2>Overall-Co Ordinator</h2>
														<p>Sakthi Sanghvi<br/>
															<span><i style="color:aqua;" class="fa fa-2x  fa-mobile"></i>&nbsp;8608277406</span>
														</p>
													</div>
												</div>
												<div class="view_c view-ninth_c" style="background:url('contacts/images/Treasurer.png');background-size:100% 100%;background-repeat:no-repeat;" >

													<div class="mask_c mask-1_c"></div>
													<div class="mask_c mask-2_c"></div>
													<div class="content_c">
														<h2>Treasurer</h2>
														<p>Venkatesh<br/>
															<span><i style="color:aqua;" class="fa  fa-2x fa-mobile"></i>&nbsp;9444707475</span>
														</p>
													</div>
												</div>
												<div class="view_c view-ninth_c" style="background:url('contacts/images/pr&hospi.png');background-size:100% 100%;background-repeat:no-repeat;" >

													<div class="mask_c mask-1_c"></div>
													<div class="mask_c mask-2_c"></div>
													<div class="content_c">
														<h2>Head-PR and Hospitality</h2>
														<p>Parthasarathy<br/>
															<span><i style="color:aqua;" class="fa fa-2x  fa-mobile"></i>&nbsp;9445483394</span>
														</p>
													</div>
												</div>
												<div class="view_c view-ninth_c" style="background:url('contacts/images/events.png');background-size:100% 100%;background-repeat:no-repeat;" >

													<div class="mask_c mask-1_c"></div>
													<div class="mask_c mask-2_c"></div>
													<div class="content_c">
														<h2>Head-Events</h2>
														<p>Adhi<br/>
															<span><i style="color:aqua;" class="fa fa-2x  fa-mobile"></i>&nbsp;9952443448</span>
														</p>
													</div>
												</div>
												<div class="view_c view-ninth_c" style="background:url('contacts/images/workshops.png');background-size:100% 100%;background-repeat:no-repeat;" >

													<div class="mask_c mask-1_c"></div>
													<div class="mask_c mask-2_c"></div>
													<div class="content_c">
														<h2>Head-Workshops</h2>
														<p>Balajee<br/>
															<span><i style="color:aqua;" class="fa fa-2x  fa-mobile"></i>&nbsp;9176690504</span>
														</p>
													</div>
												</div>
											</div>


										</div>
									</div>






									<span id="typed" style="white-space:pre;font-size:20px;position:absolute;top:10px;left:40%; color:black;font-family:myfont2;"></span>

									<img style="position:absolute;top:10px;left:5%;height:20%;width:10%;" class="effect" src='css/images/logo.png' style="width:1005;height:100%;" />



									<header style="position:absolute; top:7.9%;right:10%;">

										<img data-toggle="modal" data-target="#options" id="login" title="Login/Register" src="css/images/worker.png" />
										<span style="color:black;font-family:monospace;">Login/Register</span>
									</header>

									<a href="http://www.uniqtechnologies.co.in/" ><img  title="Sponsored by UNIQ" src="css/images/uniq.jpg" style="position:absolute;top:85px;right:5%;height:10%;width:10%;"/></a>
									<br/><span data-toggle="modal" data-target="#sponsor" id="spon" style="cursor:pointer;;color:black;font-family:monospace;position:absolute;top:25%;right:5%;">More</span>


									<footer class="container" style="z-index: 99;
									position: fixed;
									top: 87%;
									background: #3D2215;
									width: 100%;
									height: 13%;">



									<section class="color-1 " >
										<nav  class="cl-effect-1" style="align:center;">
											<span data-menuanchor="home" ><a href="#home"><span data-hover="Home">Home</span></a></span>
											<span data-menuanchor="about"><a href="#about"><span data-hover="About">About</span></a></span>
											<span data-menuanchor="gl"><a href="#gl"><span data-hover="Guestlectures">Guestlectures</span></a></span>
											<span data-menuanchor="event"><a href="#event"><span data-hover="Events">Events</span></a></span>
											<span data-menuanchor="work" ><a href="#work"><span data-hover="Workshops">Workshops</span></a></span>
											<span data-menuanchor="contact"><a href="#contact"><span data-hover="Contacts">Contacts</span></a></span>
										</nav>
										<footer style="color:grey;">
											<p style="text-align:center;">Developed by PEA Webteam</p>
										</footer>
									</section>

								</footer>

								<div style="background:black; opacity:0.9;" class="modal fade" id="sponsor" tabindex="-1" role="dialog"
								aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog" style="background:black; opacity:1;" >
									<div class="modal-content" style="background:black; opacity:1;">
										<div class="modal-header" style="background:black; opacity:1;">
											<button type="button" class="close"
											data-dismiss="modal" aria-hidden="true">
											&times;
										</button>
										<h3 style="color:white;">Uniq Technologies</h3>

									</div>
									<div class="modal-body" style="background:black; opacity:1;color:black;">
										<article style="text-align:justify;">
											<ol style="color:green;">
												<li><b><a href="http://www.inplanttraining.org"  target="_blank" >IPT</a></b></li>
												<li><b><a href="http://www.internshipinchennai.com/" target="_blank"  >Internship </a></b></li>
												<li><b><a href="http://www.ieeefinalyearprojects.org/"  target="_blank" >IEEE projects </a></b></li>
												<li><b><a href="http://www.androidtraininginchennai.com/"  target="_blank" >Android Training</a> </b></li>
											</ol>
										</article>

									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>

								</div>
							</div>
						</div>

						<div style="background:black; opacity:0.9;" class="modal fade" id="options" tabindex="-1" role="dialog"
						aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" style="background:black; opacity:1;" >
							<div class="modal-content" style="background:black; opacity:1;">
								<div class="modal-header" style="background:black; opacity:1;">
									<button type="button" class="close"
									data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h3 style="color:white;">Login</h3>

							</div>
							<div class="modal-body" style="background:black; opacity:1;color:black;">

								<form   action="login.php" method="post" onsubmit="return validlogin()" role="form" />
								<div class="form-group">
									<input name="email" required id="email" type="email" placeholder="Email"></input>
								</br><span class="error" id="s1" style="display: none;"></span><br>
							</div>

							<div class="form-group">
								<input name="passwd" required id="pwd" type="password" placeholder="Password"></input><br />
								<span class="error" id="s2" style="display: none;"></span><br>
							</div>

							<input id="signupbtn" class="btn btn-success" style="width:50%;" type="submit" value="Sign In"></input>

						</form><br/>
						<a href="register.php"><input type="button" class="btn btn-primary" style="width:50%;" value="Register" ></input></a>


					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>

				</div>
			</div>
		</div>


		<!-- login ends -->
		<script>

			var backg=document.getElementById("backg");
			backg.style.backgroundSize= window.innerWidth+"px"+" "+ window.innerHeight+"px";

			function validlogin()
			{
				if(!(document.getElementById("email").value&&document.getElementById("password").value))
				{
					if(!document.getElementById("email").value)
					{  document.getElementById("s1").style.display="block";
					document.getElementById("s1").innerHTML="Email required";
					document.getElementById("email").style.borderColor="red";
				}

				if(!document.getElementById("password").value)
				{
					document.getElementById("s2").style.display="block";
					document.getElementById("s2").innerHTML="Fill password";
					document.getElementById("password").style.borderColor="red";
				}


				return false;
			}
			else
			{
				document.getElementById("s1").style.display="none";
				document.getElementById("s2").style.display="none";
				document.getElementById("s1").innerHTML="";
				document.getElementById("s2").innerHTML="";
				document.getElementById("password").style.borderColor="hidden";
				document.getElementById("email").style.borderStyle="hidden";
				return true;
			}
		}

	</script>


	<script src="css/home.js" type="text/javascript" ></script>

</body>

</html>
