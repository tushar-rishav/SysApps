var obstacleCanvas=document.getElementById('obstacle');
var obstacleCanvasCtx=obstacleCanvas.getContext('2d');

var surferCanvas=document.getElementById('surfer');
var surferCanvasCtx=surferCanvas.getContext('2d');
surferCanvasCtx.font = "bold 20px Arial";

var bat=[],fly=[0,0],dir=[1,1];
//console.log(fly);

for(k=0;k<2;k++)
bat[k]=document.getElementById("bat"+k).style;


 var browsers = ['ms', 'moz', 'webkit', 'o'];
 for(var x = 0; x < browsers.length && !window.requestAnimationFrame; ++x){

         window.requestAnimationFrame = window[browsers[x]+'RequestAnimationFrame'];
         window.cancelAnimationFrame = window[browsers[x]+'CancelAnimationFrame']|| window[browsers[x]+'CancelRequestAnimationFrame'];
                               }
                               var reqAnimFrame=   window.requestAnimationFrame;  


var gameWidth=surferCanvas.width,gameHeight=surferCanvas.height,foul=false,co,sThrust=5,w=0,mThrust=5,fly,score=0,count=0,obs=0,wid=70;
var obstacle=[],coins=[],gems= new createGems,yMax=300,x1,Y1,x2,Y2,colorValue=[],time=0;


var surfer= new createSurfer();

cloud= new Image();
cloud.src="cloud_two.png";

ship=new Image();
ship.src="image/front.png";

surferImg= new Image();
surferImg.src="image/human.png";

fireImg= new Image();
fireImg.src="exp.png";

bigImg= new Image();
bigImg.src="war.png";

boardImg= new Image();
boardImg.src="image/surfboard.png";

coinImg= new Image();
coinImg.src="image/normal.png";


surferImg.addEventListener("load",init,false);

function init()
{    
    //surfer.nameIs=prompt("Your name buddy ","Joker");
    surfer.draw();
    defineObstacle();
    defineCoins();
    //console.log(coins);
    myLoop();
}




function defineObstacle()
{
      for(i=0;i<30;i+=1)
            {

                //for GEMS

                      x1=Math.floor(Math.random()*800);           
                      x2=Math.floor(Math.random()*800);                
                        
                      while (!((Math.abs(x1-x2)<200)&&(x1>15)&&(x2>15)&&(x1<900)&&(x2<900) ) ) 
                      {
                         x1=Math.floor(Math.random()*900);
                         x2=Math.floor(Math.random()*900);            

                      }
                                 
                         Y1=yMax-Math.floor(Math.random()*600); 
                         Y2=yMax-Math.floor(Math.random()*600);
                         
                         while( !(Math.abs(Y1-Y2)<100) )
                         {
                            Y1= Math.floor(Math.random()*600); 
                            Y2= Math.floor(Math.random()*600);
                         }
                         
                         //for random color

                         for(var clr=0;clr<3;clr++)
                            colorValue[clr]=Math.floor(Math.random()*255); 

                         obstacle[i]= new createObstacle(x1,Y1,colorValue);

                        if(i==29)
                               break;
                        
           }

        

}



function defineCoins()
{
  
 var  cY_MAX=300,coinX=Math.floor(Math.random()*800),coinY=0;//cY_MAX-Math.floor(Math.random()*600)+50 ;

     for(n=0;n<6;n++)
           { 
              coinY+=20;
              coins.push(new createCoin(coinX,coinY));
           }
           // console.log(coins);
}

function createCoin(cX,cY)
{

 this.drawX=cX;
 this.drawY=cY;

 this.srcX=300;
 this.srcY=150;
 this.width=390;
 this.height=500;

 this.drawHeight=10;
 this.drawWidth=40;

}

createCoin.prototype.drawCoin=function(){

  obstacleCanvasCtx.drawImage(coinImg,this.srcX,this.srcY,this.width,this.height,this.drawX,this.drawY,this.drawWidth,this.drawHeight);


}

function createGems(){

    this.drawShipX=200;
    this.drawShipY=-15;
    this.shipWidth=wid;
    this.shipHeight=wid;
    this.shipSrcX=200;
    this.shipSrcY=60;
    this.shipSrcWidth=620;
    this.shipSrcHeight=610;

    this.drawMarineX=450;
    this.drawMarineY=0;
    this.marineWidth=0;
    this.marineHeight=0;
    this.marineSrcX=80;
    this.marineSrcY=80;
    this.marineSrcWidth=490;
    this.marineSrcHeight=320;

    this.drawFishX=Math.random()*500;
    this.drawFishY=30;
    this.fishWidth=0;
    this.fishHeight=0;
    this.fishSrcX=1300;      // riginal 1300,
    this.fishSrcY=260;
    this.fishSrcWidth=300;
    this.fishSrcHeight=380;
    
    
}

createGems.prototype.defineFish=function(){

  this.drawFishX=Math.random()*500;
    this.drawFishY=30;
    this.fishWidth=0;
    this.fishHeight=0;
    this.fishSrcX=1300;      // riginal 1300,
    this.fishSrcY=260;
    this.fishSrcWidth=300;
    this.fishSrcHeight=380;
}

createGems.prototype.drawGems=function()
{
   // obstacleCanvasCtx.clearRect(0,0,gameWidth,gameHeight);
    time+=0.01;
    var velocity=time;
   

    obstacleCanvasCtx.drawImage(ship,this.shipSrcX,this.shipSrcY,this.shipSrcWidth,this.shipSrcHeight,this.drawShipX,this.drawShipY,this.shipWidth,this.shipHeight);

    if(this.drawShipY<400&&this.drawShipY>5)
    {
    //console.log("here");
   
    
    ship.src="image/ship.png";
    this.shipWidth+=0.5;
    this.shipHeight+=0.5;
    this.drawShipY+=velocity+5;            //8.7;
    this.drawShipX-=1.0;
    this.shipSrcHeight=650;
     
     

   // console.log(this.drawShipY);
    }
    else if(this.drawShipY<=10)
    {
      ship.src="image/front.png";
     // console.log("not here"+this.drawShipY);
      this.shipSrcHeight=1000;
      this.shipWidth+=0.2;
      this.shipHeight+=0.4;
      this.drawShipY+=0.4; 
      //this.drawShipX-=2.0;


    
    }

    else
      {
        this.drawShipY=-15;
        this.drawShipX=200;
        this.shipWidth=wid;
        this.shipHeight=wid;

        var pos=checkSurferPos();
        if(pos==1)
          gems.drawShipX=220;

            else if(pos==2)
              gems.drawShipX=320;
              else if(pos==3)
                  gems.drawShipX=520;
                else
                   gems.drawShipX=720;
       
       } 

     
      //avoiding overlapping of ship and fish 

    if((this.drawFishX<this.drawShipX||((this.drawFishX+this.fishWidth)>(this.drawShipX+this.shipWidth))&&this.drawShipY<225 )||(this.drawFishX<this.drawMarineX||((this.drawFishX+this.fishWidth)>(this.drawMarineX+this.marineWidth))&&this.drawMarineY<225 ) )  
      obstacleCanvasCtx.drawImage(bigImg,this.fishSrcX,this.fishSrcY,this.fishSrcWidth,this.fishSrcHeight,this.drawFishX,this.drawFishY,this.fishWidth,this.fishHeight);
   
    this.fishWidth+=0.2;
    this.fishHeight+=0.2;
    this.drawFishY+=0.5;
    this.drawFishX+=0.1;

    if(this.drawFishY>300)
       this.defineFish(); 

}

function checkSurferPos(){
  if(surfer.drawX<gameWidth/4)
    return 1;
  else if((surfer.drawX>(gameWidth/4) )&&(surfer.drawX<(gameWidth/2)) )
    return 2;
  else if((surfer.drawX>(gameWidth/2) )&&(surfer.drawX<(3*gameWidth/4)) )
    return 3;
  else
    return 4;

}

function createObstacle(X,Y,colorCode)
{

    this.drawX=X;
    this.drawY=Y;
    this.drawMinWidth=5;
    this.drawMinHeight=5;
    this.myFillStyle="rgb("+colorCode[0]+","+colorCode[1]+","+colorCode[2]+")";
}

createObstacle.prototype.draw=function()
{
   this.drawY+=3;
   this.drawMinWidth+=0.35;
 
   obstacleCanvasCtx.clearRect(0,0,gameWidth,gameHeight); 
   obstacleCanvasCtx.fillStyle=this.myFillStyle;
   obstacleCanvasCtx.beginPath();
   obstacleCanvasCtx.arc(this.drawX,this.drawY,this.drawMinWidth/2,0,2*Math.PI,false); 
   obstacleCanvasCtx.fill();

}
//###############################3
/* Surfer cnstructr goes here  */
//#################################3

createSurfer.prototype.draw=function()
{
  //console.log("drawing");
    
    surferCanvasCtx.clearRect(0,0,gameWidth,gameHeight);
    checkForKeys();

    surferCanvasCtx.drawImage(boardImg,this.skateSrcX,this.skateSrcY,this.skateSrcW,this.skateSrcH,this.skateDrawX,this.skateDrawY+mThrust,this.skateW,this.skateH);
    
//draw clouds
    surferCanvasCtx.drawImage(cloud,0,0,1477,499,w,0,gameWidth,gameHeight/2);  // change the coord of clouds as and when reqd..no need to create an separate obj for clouds!!
    
   

for(k=0;k<2;k++)
{
    fly[k]+=(dir[k]*(0.2));
    bat[k].left=fly[k];

    if(bat[k].left>3*gameWidth/2||bat[k].left<-gameWidth/3)
      dir[k]*=-1;

   // console.log(dir+" "+fly+" "+bat);
    
}   

    w++;
    if(w>gameWidth)     // cloud movement controls
      w=-gameWidth;

    surferCanvasCtx.drawImage(surferImg,this.srcX,this.srcY,this.width,this.height,this.drawX,this.drawY+mThrust,this.drawWidth,this.drawHeight);
    if(sThrust>2)
      {  sThrust-=0.2;
          mThrust-=0.2;
       } 
    else
       { 
        sThrust=5;
        mThrust=5;
       }

     

      

      surferCanvasCtx.fillStyle = "blue";
      surferCanvasCtx.fillText(surfer.nameIs+"'s Score: "+score, 2*gameWidth/3,30);


}

 document.addEventListener('keydown', checkKeyDown, false);  //game controls
 document.addEventListener('keyup', checkKeyUp, false);


 function checkCollection()
 {

   for(co=0;co<30;co++)
   {
      if( (obstacle[co].drawX>surfer.skateDrawX) && (obstacle[co].drawX<(surfer.skateDrawX+surfer.skateW)) &&(obstacle[co].drawY>(surfer.skateDrawY)) )  
      {  //console.log(obstacle[co].drawY+" "+surfer.skateDrawY);
         
          surferCanvasCtx.strokeStyle="pink";
          surferCanvasCtx.strokeRect(surfer.skateDrawX,surfer.skateDrawY,surfer.skateW,surfer.skateH); //not wrking
          surferCanvasCtx.stroke();

          surfer.skateW+=0.5;
           if(surfer.skateW>140)
              surfer.skateW=140;  //upper limit to skate Board width
      }

        else
         {

          if(surfer.skateW>40)
            {//surfer.skateW-=0.0125;
           }

          else
          { 
            surfer.srcX=0;
            surfer.srcY=0;
            surfer.width=90;
            surfer.height=80;
            surferImg.src="exp.png";              // HERE YOU CAN ADDA FALLING MAN IMAGE
            surfer.draw();
            setTimeout(antimSanskaar,1000);

            document.getElementById("score").innerHTML="Game Over!!"
              foul=true;

           } 

         

         }
   }

   for(co=0;co<6;co++)
      {
          if( (coins[co].drawX>surfer.skateDrawX) && (coins[co].drawX<(surfer.skateDrawX+surfer.skateW)) &&(coins[co].drawY>(surfer.skateDrawY)) )
              alert("collecting");            
      }
 
  } 

  function antimSanskaar(){
    surfer.srcX=0;
    surfer.srcY=0;
    surfer.width=1477;
    surfer.height=499;
    surfer.drawX=0;
    surfer.drawY=0;
    surfer.drawWidth=gameWidth;
    surfer.drawHeight=gameHeight;
    surferImg.src="cloud_one.png";
    surfer.draw();
  } 


   function checkKeyUp(e)
   {
  
  var keyID = e.keyCode || e.which;
 
  if (keyID === 39)
    { //right arrow 
        surfer.isRightKey = false;
        e.preventDefault();
    }
   
    if (keyID === 37 )
    { //left arrow 
        surfer.isLeftKey = false;
        e.preventDefault();
    }

     if (keyID === 32)
         { //spacebar  to increase movement speed 
              surfer.isSpacebar = false;
              e.preventDefault();
          }

       if (keyID === 38)
          {
              surfer.isUpKey = false;
              e.preventDefault(); 
          }

        if (keyID === 40)  
        {
             surfer.isDownKey = false;
              e.preventDefault();
        }  

  
   }
     /**************************************************************/

   function checkKeyDown(e){
      
       var  keyID = e.keyCode || e.which;
        

     
          if (keyID === 39)
          { //right arrow 
              surfer.isRightKey = true;
              e.preventDefault();
          }
         
          if (keyID === 37 )
          { //left arrow 
              surfer.isLeftKey = true;
              e.preventDefault();
          }

           if (keyID === 32)
         { //spacebar  to increase movement speed 
              surfer.isSpacebar = true;
              e.preventDefault();
          }

           if (keyID === 38)
          {
              surfer.isUpKey = true;

              e.preventDefault(); 
          }

        if (keyID === 40)  
        {
             surfer.isDownKey = true;
              e.preventDefault();
        }  
       
    
      
 
   }
     /**************************************************************/
 var fgDir=true;
   function checkForKeys()
   {
        
      if(surfer.isRightKey&&surfer.drawX<800)
      {  
           surfer.drawX+=3;
           surfer.srcX=270;
           surfer.width=270
           surfer.skateDrawX+=3;

            if(!fgDir)
             {
              surfer.drawX+=20;
              fgDir=true;
             }

      }

      if(surfer.isLeftKey&&surfer.drawX>50)
      {
         surfer.drawX-=3;
         surfer.srcX=560;
         surfer.width=240;
         surfer.skateDrawX-=3;

          if(fgDir)
             {
              surfer.drawX-=20;
              fgDir=false;
             }

      }

      
      if(surfer.isSpacebar&&surfer.isLeftKey&&surfer.drawX>0)
         {   
             surfer.drawX-=5;
             surfer.srcX=540;

             if(fgDir)
             {
              surfer.drawX-=20;
              fgDir=false;
             }


             surfer.width=259;
             //surfer.height=;
             surfer.skateDrawX-=5;
         }
       

      if(surfer.isSpacebar&&surfer.isRightKey&&surfer.drawX<900)
         {
           surfer.drawX+=5;
           surfer.srcX=270;
           surfer.width=270
           surfer.skateDrawX+=5;

           if(!fgDir)
             {
              surfer.drawX+=20;
              fgDir=true;
             }


          }

          if(surfer.isUpKey)
          { 
             
             if(!(surfer.drawY<300))
             {
              surfer.drawY-=0.3;
              surfer.drawWidth-=0.5;
              surfer.drawHeight-=0.5;

              surfer.skateW-=0.7;
              surfer.skateH-=0.75;
              surfer.skateDrawY-=0.35;
              console.log(surfer.drawY);
            }
          }

          if(surfer.isDownKey)
          { 
           
             if(!(surfer.drawY>369))
             {
              surfer.drawY+=0.4;
              surfer.drawWidth+=0.5;
              surfer.drawHeight+=0.5;
              surfer.skateW+=0.7;
              surfer.skateH+=0.8;
              surfer.skateDrawY+=0.4;
            }

          }


          if(!(surfer.isLeftKey||surfer.isRightKey||surfer.isSpacebar))
              {
                surfer.srcX=10;
                surfer.width=255;

              }

        // console.info(surfer);
   }


function createSurfer(){
 this.srcX=10;
 this.srcY=50;
 this.width=260;
 this.height=480;
 this.drawX=500;
 this.drawY=330;
 this.drawHeight=100;     //120
 this.drawWidth=80;         //80
 this.isSpacebar=false;
 this.isRightKey=false;
 this.isLeftKey=false;
 this.isDownKey=false;
 this.isUpKey=false;
 
 this.skateSrcX=340;
 this.skateSrcY=520;
 this.skateSrcW=500;
 this.skateSrcH=260;

 this.skateDrawX=this.drawX;
 this.skateDrawY=this.drawY+45;
 this.skateW=140
 this.skateH=100;
 this.nameIs="Tushar";
  
}

    function myLoop()
    {
      
      if(foul)
          window.cancelAnimationFrame(animationControl);
     
     
      else
      {
        //checkCollection();
        surfer.draw();
    

      for(obs=0;obs<30;obs++)
        {
          
           if(obstacle[obs].drawY>0)
               obstacle[obs].draw();          //drawing gems from start of sea..i.e obstacle canvas
              

           else
              obstacle[obs].drawY+=1.4;

        }

        for(inc=0;inc<6;inc++)
        {
            if(coins[inc].drawY>0)
                coins[inc].drawCoin();

               if(coins[inc].drawY<310)
                 {
                    coins[inc].drawY+=3.4;
                    coins[inc].drawX-=Math.pow(-1,inc)*4;   
                 }  
        } 

        if(coins[0].drawY>300)           //regenerate the coins
        { 
          cY=0,cX=Math.floor(Math.random()*800);
          for(ag=0;ag<6;ag++)
          {
            cY+=Math.floor(20+Math.random()*35);
            coins[ag].drawY=cY;
            coins[ag].drawX=cX;
          }
         
        }


        
        if(obstacle[29].drawY>300)
          {
           // redifiningDefineObstacle

           for(var j=0;j<30;j++)
           {
                      x1=Math.floor(Math.random()*800);           
                      x2=Math.floor(Math.random()*800);                
                        
                      while (!((Math.abs(x1-x2)<200)&&(x1>15)&&(x2>15)&&(x1<900)&&(x2<900) ) ) 
                      {
                         x1=Math.floor(Math.random()*900);
                         x2=Math.floor(Math.random()*900);            

                      }
                                 
                         Y1=yMax-Math.floor(Math.random()*600); 
                         Y2=yMax-Math.floor(Math.random()*600);
                         
                         while( !(Math.abs(Y1-Y2)<100) )
                         {
                            Y1= Math.floor(Math.random()*600); 
                            Y2= Math.floor(Math.random()*600);
                         }
                         
                         //for random color

                         for(var clr=0;clr<3;clr++)
                            colorValue[clr]=Math.floor(Math.random()*255); 

                            obstacle[j].drawX=x1;
                            obstacle[j].drawY=Y1;
                            obstacle[j].drawMinWidth=5;
                            obstacle[j].drawMinHeight=5;
                            obstacle[j].myFillStyle="rgb("+colorValue[0]+","+colorValue[1]+","+colorValue[2]+")";


           }


          }

              gems.drawGems();             //drawing extra features
              score="score goes here";
              animationControl=reqAnimFrame(myLoop);
     }
 }
