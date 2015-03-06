
var checkField=[true,true,true,true];
//var err=[];
var foo=document.forms.registration;


function check(op)                                  //TO CHECK FOR VARIOUS FIELDS
{

 	switch(op)
 	{
				case 1:
		           			   if(foo.password!=""&&foo.password!=null)

		           				 	{
		           				 		var pwdlen=foo.password.value.length;
		           				 document.getElementById("inn5").style.borderColor="green";
						 	     			document.getElementById("s5").innerHTML="";
						 	     			document.getElementById("s5").style.color="black";
								 				document.getElementById("inn6").disabled=false;
						 	     			checkField[op]=true;
						 	     			}
						 	     		else
								 	     {
											  	document.getElementById("s5").innerHTML="password required";
											  	checkField[op]=false;
											  	document.getElementById("inn6").disabled=true;
												}
						 	     break;


		 case 2:   if(foo.password.value!=""&&foo.password.value!=null)
		            {
		            	if(foo.confirmpwd.value==""||foo.confirmpwd.value==null)
		           	   {
		           				document.getElementById("inn5").style.borderColor="orange";
		           				document.getElementById("s5").innerHTML="fill password first";

												checkField[op]=false;

                  	}

                        else if(foo.password.value!=foo.confirmpwd.value)
                         {
													document.getElementById("inn6").style.borderColor="orange";
				           				document.getElementById("s6").innerHTML="password mismatch";
				           			  checkField[op]=false;
													}

		           				 else
		           				{
								 				document.getElementById("inn6").style.borderColor="green";
						 	     			document.getElementById("s6").innerHTML="";
						 	     			checkField[op]=true;
						 	     		}

								}

				  else
						 	 {
						 	 	 document.getElementById("inn6").style.borderColor="red";
						 	   document.getElementById("s6").innerHTML="fill password first";

						 	     checkField[op]=false;

							   }

						 	    break;
	}
}


function checkContents()

{

   if(foo.captcha==""||foo.captcha==null)
      { applyMarkup(3);document.getElementById("s7").innerHTML="you must fill the code";	}
   else
       reset(3);



	for(var i=1;i<4;i++)
	 {
		 if(!checkField[i])
				return false;
		 else
				return true;

   }
}
function reset(n)
{
      checkField[n]=true;
	   document.getElementById("s7").innerHTML="";
        document.getElementById("s7").style.color="black";
}

function applyMarkup(m)
{
 checkField[m]=false;
  document.getElementById("s7").style.color="red";
}
