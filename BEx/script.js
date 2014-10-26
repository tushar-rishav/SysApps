
var current;
function setSelectionRange(input, selectionStart, selectionEnd) {
  if (input.setSelectionRange) {
    input.focus();
    input.setSelectionRange(selectionStart, selectionEnd);
  }
  else if (input.createTextRange) {
    var range = input.createTextRange();
    range.collapse(true);
    range.moveEnd('character', selectionEnd);
    range.moveStart('character', selectionStart);
    range.select();
  }
}

function setCaretToPos (input, pos) {
  setSelectionRange(input, pos, pos);
}
var current;
var flag=0;
var k=0;
var j=0;
var dtag='';
var tgs=new Array();
function tdisplay()
{
	document.getElementById('tags').innerHTML='';
	for(j=0;j<=k;j++)
	document.getElementById('tags').innerHTML= document.getElementById('tags').innerHTML + "<div id=\"td"+j+"\" contenteditable='false' style='z-index:35;position:relative;display:inline-block;width:"+(tgs[j].length*6)+"%+5;height:45%;background:#00cccc;'>"+tgs[j]+"<img style='cursor:pointer;' src='cls.png' id='"+j+"' onclick='tgs.splice(Number(this.id),1);k--;document.getElementById(\"td"+j+"\").style.display=\"none\";tdisplay();'></div>  ";
   
}
function atag(ev)
{
	
	var kc=ev.which||ev.keyCode;
	if(kc==32 || kc==13)
	{
		if(dtag!='')
		{
		tgs[k]=dtag;
		tdisplay();
	   k++;	
	   dtag='';
	}
   } 
   else {
   	if((kc>=65 && kc<=90) ||(kc>=97 && kc<=122)||(kc>=48 && kc<=57))
   	dtag+=String.fromCharCode(kc);
   	
   	
   	
   }
	
}

var bid;
var cld=0;
function ccheck(cur) {

	document.getElementById('c0').style.display='inline-block';
	document.getElementById('c1').style.display='inline-block';
	document.getElementById('c2').style.display='inline-block';
	document.getElementById(cur).style.display='none';
	
}

var st,st1;
function sshow(opt)
{
	if(!opt)
	{
		clearInterval(st);
		if(document.getElementById('ps').style.display=='none' && document.getElementById('bs').style.display=='none')
		{
			document.getElementById('ps').style.display='block';
			document.getElementById('ps').style.width='0%';
			var i=0;
			st=setInterval(function () {
				if(i<=60)
				{
			document.getElementById('ps').style.width= i++ +'%';
			document.getElementById('bsimg').style.left= (i+4) +'%';}
			else {
				clearInterval(st);
				
			}

			
			
		},10);}
		
		if(document.getElementById('ps').style.display=='none' && document.getElementById('bs').style.display!='none')
		{
			document.getElementById('ps').style.display='block';
			document.getElementById('ps').style.width='0%';
			i=0;
			j=60;
			st=setInterval(function () {
				if(i<=60)
				{
			document.getElementById('ps').style.width= i++ +'%';
			document.getElementById('bs').style.display='none';
			document.getElementById('bsimg').style.left= (i+4) +'%';}
			else {
				clearInterval(st);
				
			}
			
	         },10);}
}
	if(opt)
	{
		clearInterval(st);
		if(document.getElementById('ps').style.display=='none' && document.getElementById('bs').style.display=='none')
		{
			document.getElementById('bs').style.display='block';
			document.getElementById('bs').style.width='0%';
			var j=0;
			st=setInterval(function () {
				if(j<=60)
				{
			document.getElementById('bs').style.width= j++ +'%';
			//document.getElementById('bsimg').style.left= (j+4) +'%';
			}
			else {
				clearInterval(st);
				
			}
			
			
			
		},10);}
		
		if(document.getElementById('ps').style.display!='none' && document.getElementById('bs').style.display=='none')
		{
			document.getElementById('bs').style.display='block';
			document.getElementById('bs').style.width='0%';
			document.getElementById('bsimg').style.left='4.4%';
			i=0;
			j=60;
			st=setInterval(function () {
				if(i<=60)
				{
			document.getElementById('bs').style.width= i++ +'%';
			document.getElementById('ps').style.display='none';
			
			//document.getElementById('bsimg').style.left= (i+4) +'%';
			}
			else {
				clearInterval(st);
				
			}
			
	},10);}
	
	}
}
