<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
	<style>
	.a{text-align:center;
		color:#ff0000;
		font-size:20px;
		}
		.erroredate{color:#ff0000;
		text-align:center; 
		display:none;}
	
	</style>
</head>
<body onload="disable()">

<?php session_start(); ?>
							

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt=""style="height:1200px;">
                </div>
                <div class="signup-form"style="height:auto;width:auto;">
                    <form method="POST" class="register-form" id="register-form" action="https://lbedugate.000webhostapp.com/phpsignup.php">
                        <h2> registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" id="name" required placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="father_name">Last Name :</label>
                                <input type="text" name="father_name" id="father_name" required placeholder="Enter your last name">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="usname">username :</label>
                            <input type="text" name="usname" id="usname" required placeholder="Enter Username">
                        </div>
						<div class="form-group">
                            <label for="password">password :</label>
                            <input type="text" name="password" id="password" required placeholder="Enter your password" onblur="checkPassword()">
							  <label for="password" class="erroredate" id ="passerrr">password is not strong  1 number 1 uppercase min 6 character no(symbols)</label>
                        </div>
						<div class="form-group">
                            <label for="cpass">confirm password :</label>
                            <input type="text" name="cpass" id="cpass" required placeholder="please confirm your password" onchange="cnpass()">
							<label for="cpass" id="cnerre" class="erroredate">password does not  match :</label>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required placeholder="your address">
                        </div>
						
                        <div class="form-radio">
                            <label for="gender" class="radio-label">who are you?</label>
                            <div class="form-radio-item">
							
                                <input type="radio" name="gender" value="s" id="s" checked>
								 
                                <label for="s">student</label>
								
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender"id="t" value="t">
								
                                <label for="t">teacher</label>
                                <span class="check"></span>
                            </div>
							
                        </div>
						
                        <div class="form-row">
                            <div class="form-group">
                                <label for="domain"> your domain:</label>
                                <div class="form-select">
                                    <select name="domain" id="domain" required onblur="classcheck()">
                                        <option value=""></option>
                                        <option value="academic">academic</option>
                                        <option value="technical">technical</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="class"> your class:</label>
                                <div class="form-select">
                                    <select name="class" id="class" required  onblur="courcheck()">
                                        <option value=""></option>
                                        <option value="BT1" id="bt1">BT1</option>
                                        <option value="BT3"id="bt3">BT3</option>
										<option value="TS2"id="ts2">TS2</option>
										<option value="LT"id="lt">LT</option>
										
										
										<option value="terminal" id="ter">terminal</option>
										<option value="brevet"id="brev">brevet</option>
										
										
										<option value="Y1"id="y1">Y1</option>
										<option value="Y2"id="y2">Y2</option>
										<option value="Y3" id="y3">Y3</option>
										<option value="Y4" id="y4">Y4</option>
										<option value="Y5"id="y5">Y5</option>
										<option value="Y6" id="y6">Y6</option>
										<option value="Y7"id="y7">Y7</option>
										<option value="Y8"id="y8" >Y8</option>
										<option value="Y9"id="y9">Y9</option>
										<option value="Y10" id="y10">Y10</option>
										<option value="Y11"id="y11">Y11</option>
										
										<option value="M1" id="m1" >M1</option>
										<option value="M2" id="m2">M2</option>
										<option value="DC" id="dc">DC</option>
										
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="course">Course :</label>
                            <div class="form-select">
                                <select name="course" id="course" required >
                                    <option value=""></option>
									<option value="normal course"  id="nor">normal course</option>
									<option value="se" id="se">SE</option>
									<option value="sv" id="sv">SV</option>
									<option value="sg" id="sg">SG</option>
									<option value="he" id="he">HE</option>
									
                                    <option value="Computer sience IT" id="it">Computer sience IT</option>
                                    <option value="desiger"   id="des">Designer</option>
                                    <option value="marketing" id="mark">Marketing</option>
									<option value="nursing" id="nurs">nursing</option>
									<option value="hotel managment" id="hot">hotel managment</option>
									<option value="engineer" id="eng">engineer</option>
									
									<option value="languages" id="lang">languages</option>	
									<option value="health" id="health">health</option>
									<option value="economi" id="eco">economi</option>
									<option value="sociaty" id="sos">sociaty</option>
									
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="date" name="birth_date" id="birth_date" required onblur="datevali()" >
							<label for="birth_date" class="erroredate" id="errrmsg">you must be older then 13 years old :</label>
                        </div>
						
						
                        <div class="form-group">
                            <label for="pincode">Phone number :</label>
                            <input type="text" name="pincode" id="pincode"placeholder="+961" minlength="8" maxlength="8">
                        </div>
                       
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email"placeholder="exemple@gmail.com" />
							
							
						
		
                        </div>
						<?php
						if(!isset($_SESSION["userdup"])){
						$_SESSION["userdup"]="none";}
					
							if($_SESSION["userdup"]=="true")
							{echo "<p class=\"a\">this username is already exist<br></p>" ;}?>
                        <div class="form-submit">
						<p style="font-size:20px">Already a member? <a href="https://lbedugate.000webhostapp.com/page2.php" >   login in   </a>
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
							
                        </div>
						
                    </form>
                </div>
            </div>
        </div>

    </div>
	
	

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
	<script>
	function cnpass(){
	
	var a = document.getElementById("password").value;
	var b = document.getElementById("cpass").value;
	
	if(a!=b){
		
	document.getElementById("cpass").focus();
	document.getElementById("cnerre").style.display = "block";
	
	}
	else{
	document.getElementById("cnerre").style.display = "none";
	
	}
	
	}
	</script>
	<script>
		function datevali(){
	


    var Q4A = "Your birthday is: ";
    var Bdate = document.getElementById('birth_date').value;
    var birth_date = +new Date(Bdate);
    
    var theBday = document.getElementById('resultBday');
	
	 var f =(~~((Date.now() - birth_date) / (31557600000)));
     
if(f<13){
				
				document.getElementById("birth_date").focus();
				document.getElementById("errrmsg").style.display = "block";
		
		}
		else{
				document.getElementById("errrmsg").style.display = "none";}
		}
	
	
	</script>
		
	<script>
	function classcheck(){

	if (document.getElementById("domain").value=="academic"){
	
	document.getElementById("bt1").style.display = "none";
	document.getElementById("bt3").style.display = "none";
	document.getElementById("ts2").style.display = "none";
	document.getElementById("lt").style.display = "none";
	
	
	document.getElementById("y1").style.display = "block";
	document.getElementById("y2").style.display = "block";
	document.getElementById("y3").style.display = "block";
	document.getElementById("y4").style.display = "block";
	document.getElementById("y5").style.display = "block";
	document.getElementById("y6").style.display = "block";
	document.getElementById("y7").style.display = "block";
	document.getElementById("y8").style.display = "block";
	document.getElementById("y9").style.display = "block";
	document.getElementById("y10").style.display = "block";
	document.getElementById("y11").style.display = "block";
	document.getElementById("brev").style.display = "block";
	document.getElementById("ter").style.display = "block";
	document.getElementById("m1").style.display = "block";
	document.getElementById("m2").style.display = "block";
	document.getElementById("dc").style.display = "block";
	
	
	}
	else if(document.getElementById("domain").value=="technical"){
	document.getElementById("bt1").style.display = "block";
	document.getElementById("bt3").style.display = "block";
	document.getElementById("ts2").style.display = "block";
	document.getElementById("lt").style.display = "block";
	document.getElementById("y1").style.display = "none";
	document.getElementById("y2").style.display = "none";
	document.getElementById("y3").style.display = "none";
	document.getElementById("y4").style.display = "none";
	document.getElementById("y5").style.display = "none";
	document.getElementById("y6").style.display = "none";
	document.getElementById("y7").style.display = "none";
	document.getElementById("y8").style.display = "none";
	document.getElementById("y9").style.display = "none";
	document.getElementById("y10").style.display = "none";
	document.getElementById("y11").style.display = "none";
	document.getElementById("brev").style.display = "none";
	document.getElementById("ter").style.display = "none";
	document.getElementById("m1").style.display = "none";
	document.getElementById("m2").style.display = "none";
	document.getElementById("dc").style.display = "none";
	}
	else{
	document.getElementById("bt1").style.display = "none";
	document.getElementById("bt3").style.display = "none";
	document.getElementById("ts2").style.display = "none";
	document.getElementById("lt").style.display = "none";
	document.getElementById("y1").style.display = "none";
	document.getElementById("y2").style.display = "none";
	document.getElementById("y3").style.display = "none";
	document.getElementById("y4").style.display = "none";
	document.getElementById("y5").style.display = "none";
	document.getElementById("y6").style.display = "none";
	document.getElementById("y7").style.display = "none";
	document.getElementById("y8").style.display = "none";
	document.getElementById("y9").style.display = "none";
	document.getElementById("y10").style.display = "none";
	document.getElementById("y11").style.display = "none";
	document.getElementById("brev").style.display = "none";
	document.getElementById("ter").style.display = "none";
	document.getElementById("m1").style.display = "none";
	document.getElementById("m2").style.display = "none";
	document.getElementById("dc").style.display = "none";
		
	}
	}
	</script>
	<script>
	function courcheck(){
	
	 var a=document.getElementById("class").value;
	
	
	
	
	if(document.getElementById("class").value=="brevet"){
		
	document.getElementById("nor").style.display = "block";
	
	document.getElementById("se").style.display = "none";
	document.getElementById("sv").style.display = "none";
	document.getElementById("sg").style.display = "none";
	document.getElementById("he").style.display = "none";
	document.getElementById("it").style.display = "none";
	document.getElementById("des").style.display = "none";
	document.getElementById("mark").style.display = "none";
	document.getElementById("nurs").style.display = "none";
	document.getElementById("hot").style.display = "none";
	document.getElementById("eng").style.display = "none";
	document.getElementById("lang").style.display = "none";
	document.getElementById("health").style.display = "none";
	document.getElementById("eco").style.display = "none";
	document.getElementById("sos").style.display = "none";
	}
	
	else if(document.getElementById("class").value=="terminal"){
	
	document.getElementById("se").style.display ="block";
	document.getElementById("sv").style.display = "block";
	document.getElementById("sg").style.display = "block";
	document.getElementById("he").style.display = "block";
	
	document.getElementById("nor").style.display = "none";
	document.getElementById("it").style.display = "none";
	document.getElementById("des").style.display = "none";
	document.getElementById("mark").style.display = "none";
	document.getElementById("nurs").style.display = "none";
	document.getElementById("hot").style.display = "none";
	document.getElementById("eng").style.display = "none";
	document.getElementById("lang").style.display = "none";
	document.getElementById("health").style.display = "none";
	document.getElementById("eco").style.display = "none";
	document.getElementById("sos").style.display = "none";
	
	}

	else if(document.getElementById("class").value==""){
	
	document.getElementById("nor").style.display = "none";
	document.getElementById("se").style.display ="none";
	document.getElementById("sv").style.display = "none";
	document.getElementById("sg").style.display = "none";
	document.getElementById("he").style.display = "none";
	document.getElementById("it").style.display = "none";
	document.getElementById("des").style.display = "none";
	document.getElementById("mark").style.display = "none";
	document.getElementById("nurs").style.display = "none";
	document.getElementById("hot").style.display = "none";
	document.getElementById("eng").style.display = "none";
	document.getElementById("lang").style.display = "none";
	document.getElementById("health").style.display = "none";
	document.getElementById("eco").style.display = "none";
	document.getElementById("sos").style.display = "none";
	}
	
	else if(a=="BT1" || a=="BT3" || a=="TS2" || a=="LT" ){
	
	
	document.getElementById("it").style.display = "block";
	document.getElementById("des").style.display = "block";
	document.getElementById("mark").style.display = "block";
	document.getElementById("nurs").style.display = "block";
	document.getElementById("hot").style.display = "block";
	document.getElementById("eng").style.display = "block";
	
	document.getElementById("lang").style.display = "none";
	document.getElementById("health").style.display = "none";
	document.getElementById("eco").style.display = "none";
	document.getElementById("sos").style.display = "none";
	document.getElementById("nor").style.display = "none";
	document.getElementById("se").style.display ="none";
	document.getElementById("sv").style.display = "none";
	document.getElementById("sg").style.display = "none";
	document.getElementById("he").style.display = "none";
	
	}
	else{
		
	
	document.getElementById("it").style.display = "block";
	document.getElementById("des").style.display = "block";
	document.getElementById("mark").style.display = "block";
	document.getElementById("nurs").style.display = "block";
	document.getElementById("hot").style.display = "block";
	document.getElementById("eng").style.display = "block";
	document.getElementById("lang").style.display = "block";
	document.getElementById("health").style.display = "block";
	document.getElementById("eco").style.display = "block";
	document.getElementById("sos").style.display = "block";

	
	}
	
	}
	</script>
	<script>
	
	
	 function checkPassword()
  {
	 var pass2tr = document.getElementById("password").value;
	 
  var re =  /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
		  
  
	
 if((re.test(pass2tr))==false){
  
	document.getElementById("passerrr").style.display = "block";
	
 }
 else{
		document.getElementById("passerrr").style.display = "none";}
	}
	</script>
</body>
</html>