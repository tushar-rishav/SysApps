var canvas,ctx;
		var gear1canvas,ctx1;
		var gear2canvas,ctx2;
		var gear3canvas,ctx3;
		var gear4canvas,ctx4;
		var gear5canvas,ctx5;
		var gear6canvas,ctx6;

		var blockendx,blockendy,blockstartx,blockstarty;

		var gear1x, gear1y,gear2x ,gear2y ,gear3x ,gear3y,gear4x ,gear4y,gear5x ,gear5y,gear6x,gear6y ;

		var gear
		var block1, block2;
		var factory,gear,background;
		var angle;

		var block1pos,block2pos,block2startx,block2endx,block2y,block1startx,block1endx,block2startx,block2endx;

		canvas = document.getElementById("canvas");
		ctx= canvas.getContext("2d");

		gear1canvas = document.getElementById("gear1canvas");
		ctx1= gear1canvas.getContext("2d");

		gear2canvas = document.getElementById("gear2canvas");
		ctx2= gear2canvas.getContext("2d");

		gear3canvas = document.getElementById("gear3canvas");
		ctx3= gear3canvas.getContext("2d");

		gear4canvas = document.getElementById("gear4canvas");
		ctx4= gear4canvas.getContext("2d");

		gear5canvas = document.getElementById("gear5canvas");
		ctx5= gear5canvas.getContext("2d");

		gear6canvas = document.getElementById("gear6canvas");
		ctx6= gear6canvas.getContext("2d");


		var requestAnimationFrame =
        window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        function(callback) {
          return setTimeout(callback, 1000);
        };

		var isplaying;

		window.onresize=resize;
		window.onload=function()
		{


			factory= new Image();
			factory.src="css/images/final-bg2.gif";

			gear= new Image();
			gear.src="css/images/g5.png";

			block1= new Image();
			block1.src="css/images/movingblock1.png";

			block2= new Image();
			block2.src="css/images/movingblock2.png";

			
			init();
			resize();
			draw();

		}
		function init()
		{
			angle=1;
			isplaying=0;
			block1pos = 0;
			block2pos = 0;
		}
		function resize()
		{


			size1=3*(window.innerWidth)/4;
			size2=3*(window.innerHeight)/4;

			canvas.width = size1;
			canvas.height = size2;

			gear1canvas.width = size1;
			gear1canvas.height = size2;

			gear2canvas.width = size1;
			gear2canvas.height = size2;

			gear3canvas.width = size1;
			gear3canvas.height = size2;

			gear4canvas.width = size1;
			gear4canvas.height = size2;

			gear5canvas.width = size1;
			gear5canvas.height = size2;

			gear6canvas.width = size1;
			gear6canvas.height = size2;

			if(size1<size2)
			{
			mobile=1;
			size = size1;
			}
			else
			{
			mobile=0;
			size=size2;
			}

			gear1x=size1*7.3/20; gear1y =size2*345/400 ;
			gear2x=size1*10.2/20; gear2y=size2*285/400 ;
			gear3x=size1*11/20; gear3y=size2*270/400 ;
			gear4x=size1*16.05/20; gear4y= size2*351.5/400;
			gear5x=size1*16.70/20;  gear5y=size2*351.5/400;
			gear6x=size1*17.35/20;  gear6y=size2*351.5/400;

			block2y = size2*307/400;
			block2startx = size1*18.05/20;
			block2endx = size1*8.5/20;

			block1startx = size1*7.5/20;
			block1starty = size2*276.55/400;

			isplaying=true;
			//draw();
		}

		function draw()
		{

			ctx.clearRect(0,0,size1,size2);
			ctx1.clearRect(0,0,size1,size2);
			ctx2.clearRect(0,0,size1,size2);
			ctx3.clearRect(0,0,size1,size2);
			ctx4.clearRect(0,0,size1,size2);
			ctx5.clearRect(0,0,size1,size2);
			ctx6.clearRect(0,0,size1,size2);


			var block2x = block2startx-block2pos;
			var block1x = block1startx-block1pos;
			var block1y = block1starty+(block1pos*0.577);

			ctx.drawImage(block2, block2x,block2y ,size2/15, size2/15);
			ctx.drawImage(block1, block1x, block1y,size2/10, size2/12);

			ctx.moveTo(size1*16.05/20,size2*335/400);
			ctx.lineTo(size1*19.05/20,size2*335/400);
			ctx.moveTo(size1*16.05/20,size2*369/400);
			ctx.lineTo(size1*19.05/20,size2*369/400);
			ctx.stroke();


			if(block2x<= block2endx)
			{
				block2pos=0;
				block1pos=0;
			}
			else
			{
				block2pos+=3;
				block1pos+=0.85;
			}

			ctx.drawImage(factory, 0, 0,size1, size2);


			ctx1.translate(gear1x,gear1y);
			ctx1.rotate(-Math.PI/180);
			ctx1.drawImage(gear,-size/20, -size/20,size/10, size/10);
			ctx1.translate(-gear1x,-gear1y);

			ctx2.translate(gear2x,gear2y);
			ctx2.rotate(Math.PI/180);
			ctx2.drawImage(gear,-size2/20, -size2/20,size2/10, size2/10);
			ctx2.translate(-gear2x,-gear2y);

			ctx3.translate(gear3x,gear3y);
			ctx3.rotate(Math.PI/180);
			ctx3.drawImage(gear,-size2/14,-size2/14,size2/7, size2/7);
			ctx3.translate(-gear3x,-gear3y);

			ctx4.translate(gear4x,gear4y);
			ctx4.rotate(-Math.PI/180);
			ctx4.drawImage(gear,-size/20,-size/20,size/10, size/10);
			ctx4.translate(-gear4x,-gear4y);

			ctx5.translate(gear5x,gear5y);
			ctx5.rotate(-Math.PI/180);
			ctx5.drawImage(gear,-size/20,-size/20,size/10, size/10);
			ctx5.translate(-gear5x,-gear5y);

			ctx6.translate(gear6x,gear6y);
			ctx6.rotate(-Math.PI/180);
			ctx6.drawImage(gear,-size/20,-size/20,size/10, size/10);
			ctx6.translate(-gear6x,-gear6y);

			if(isplaying === true)
				requestId = requestAnimationFrame(draw);

			console.log(isplaying);

		}