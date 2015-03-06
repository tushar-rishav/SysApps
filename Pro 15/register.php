<?php
include("validate.php");


function autocomplete($name)
{
  if(isset($_POST[$name]))
  return htmlspecialchars(trim($_POST[$name]));

  return "";
}



?>
<!DOCTYPE html>
<html>
<head>
  <title>Prodigy'15 SignUp</title>
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=yes,height=device-height" />
  <meta name="description" content="Production department Symposium" />
  <meta name="keywords" content="Production Engg,NIT Trichy" />
  <meta charset="UTF-8" />
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <script src="css/jquery.min.js" ></script>
  <script src="css/bootstrap.min.js" ></script>
  <style>
  input{
    width:40%;
    text-align:center;
    background:#C5E0E0;
color:black;
  }
textarea{
background:#C5E0E0;
color:black;
}
  .form-group{
    height:40px;
  }
  form{
    margin-top:10%;
  }
  span{
    color:white;
    font-weight:900;
    font-size:15px;
  }
  .help-block{
    color:black;
  }
  </style>
</head>
<body style="background:url('css/images/bg3.jpg');background-attachment:fixed;background-repeat:no-repeat;background-size:100% 100%;" >

  <div class="container" style="text-align:center;">


    <form role="form" method="post" class="form-horizontal" action="<?php $_SERVER['PHP_SELF']?>" name="registration" id="registration" onsubmit="return checkContents()"  />
      <div class="form-group">
        <input type="text" name="name" value='<?php echo autocomplete("name"); ?>'  placeholder="Name"  id="inn1" ></input>
        <span class="help-block" id="s1"><?php echo $nameErr; ?></span><br/>
      </div>
      <div class="form-group">
        <input type="email" name="email" value='<?php echo autocomplete("email"); ?>'  placeholder="Email"  id="inn2"></input><br/ >
        <span class="help-block" id="s2"><?php echo $emailErr; ?></span><br/>
      </div>
      <div class="form-group">
        <input type="text" maxlength="10" value='<?php echo autocomplete("mob"); ?>'  onkeypress="return isNumber(event)" name="mob" placeholder="Mobile number. Don't include STD code"  id="inn3" ></input>
        <span class="help-block" id="s3"><?php echo $mobErr; ?></span><br/>
      </div>
      <div class="form-group">
        <input type="name" name="college" value='<?php echo autocomplete("college"); ?>'  placeholder="College name"  id="inn4"></input><br/ >
        <span class="help-block" id="s4"><?php echo $collegeErr; ?></span><br/>
      </div>
      <div class="form-group">
        <textarea rows="3" cols="30" value='<?php echo autocomplete("pin"); ?>'  name="pin" placeholder="Address of your residence"  id="inn7" ></textarea>
        <span class="help-block" id="s10"><?php echo $pinErr; ?></span><br/>
      </div><br/><br/>
      <div class="form-group">
        <span style="color:white;">Male</span><input style="display:inline;margin:3px;width:4%;" type="radio" name="sex" value="male"/>&nbsp;
        <span style="color:white;">Female</span><input style="display:inline;margin:3px;width:4%;" type="radio" name="sex" value="female"/>
        <span class="help-block" id="s8"><?php echo $sexErr ?></span>
      </div>
      <div class="form-group">
        <span style="color:white;">Accomodation</span>
        
        <select  name="acco" required="true">
         
          <option selected >no</option>
          <option>yes</option>
         
        </select><span><?php echo $accoErr; ?></span>
      </div>

      <div class="form-group">
        <span style="color:white;">Department</span>
        <select id="dept" name="dept" required="true">
          <option selected>Department</option>
          <option>Computer Science</option>
          <option>Electronics and Communication</option>
          <option>Electrical and Electronics</option>
          <option>Civil</option>
          <option selected >Production</option>
          <option>Mechanical</option>
          <option>Chemical</option>
          <option>Instrumentation and Control</option>
          <option>Metallurgical and Materials</option>
          <option>Industrial</option>
          <option>Electrical</option>
          <option>Other</option>
        </select><span id="s9"><?php echo $deptErr; ?></span>
      </div>

      <div class="form-group">
        <input type="password" name="password" value='<?php echo autocomplete("password"); ?>' onblur="check(1)" placeholder="Password"  id="inn5"></input><br/ >
        <span class="help-block" id="s5"><?php echo $passwordErr; ?></span><br/>
      </div>
      <div class="form-group">
        <input type="password" name="confirmpwd"  value='<?php echo autocomplete("confirmpwd"); ?>' onblur="check(2)"  placeholder="Confirm Password" id="inn6"></input><br/ >
        <span class="help-block" id="s6"><?php echo $passwordConfirmErr; ?></span><br/>
      </div>
      <div class="form-group">
        <img id="captcha_image" src="create_image.php"></img>
        <button style="background-color:black;width:10%;" title="new captcha" class="btn" onclick="function(){window.reload()}"  > <i class="fa fa-refresh" style="color:white;" ></i></button>

      </div>
      <div class="form-group">
        <span >Enter the code</span>
        <input type="text" id="captcha" style="width:10%;" name="captcha"/><span id='s7'><?php echo $captcha_error; ?></span>
      </div>
      
      <input type="submit" class="btn btn-success" value="Register"></input>

    </form>
    <header style="position:absolute;top:2%;left:1%;text-align:center;">
      <a href="index.php" ><i class="fa fa-2x fa-home" style="color:orange;">Home</i></a>
    </header>

  </div>

  <script>
  var isNumber= function(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
    }
    return true;
  };
  </script>
  <script src="css/control.js" type="text/javascript" ></script>

</body>

</html>
	