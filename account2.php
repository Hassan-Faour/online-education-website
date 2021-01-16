<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>account </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
	<style>
	.a{text-align:center;
		color:#ff0000;
		font-size:20px;
		}
	
	.btndel{background-color:#ff3333;
			
			font-size:18px;
			color:#ffffff;
			border-width:0px;
			position:relative;
			display:block;
			margin:auto;
			height:40px;
			width:30%;
			}	
			.a2{
			    width:auto;
			    display:block;
		    	margin:auto;
			}
			

	
	
	</style>
</head>
<body>

<?php session_start(); 
	if(!isset($_SESSION["usen"])){
							 header("Location: https://lbedugate.000webhostapp.com/page2.php");}

$_SESSION["accountdelusertype"]="teacher";

$con=mysqli_connect("localhost","id12933201_h","12345");         
          mysqli_select_db($con,"id12933201_h");

		  $uname= $_SESSION["usen"] ;
		  // $password= $_SESSION["pass"] ;
	  
	  
$q = "select * from teacher where teacher.user='".$uname."' limit 1";

$r = @mysqli_query($con, $q);                      // Run the query.

$num = mysqli_num_rows($r);

if($num > 0) {                                                   // if the query returns record(s).




while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	

$fn= $row['firstn'] ;
	
 $ln=$row['lastn'] ;
 $pass=$row['pass'] ;
$phn= $row['phonen'] ;

$add=$row['addn'] ;

$emn= $row['emailn'] ;

$dob= $row['dobn'] ;

$course= $row['coursn'] ;
$class= $row['classn'] ;
$domain= $row['domainn'] ;

}
 
mysqli_free_result ($r);                             // Free up the resources.
} 

mysqli_close($con);  
	
	

?>
							

    <div class="main">
        <div class="container">
            <div class="signup-content">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/account.jpg" alt="" style="height:1130px;">
                </div>
                <div class="signup-form"style="heigh:auto;">
                    <form method="POST" class="register-form" id="register-form" action="https://lbedugate.000webhostapp.com/phpupdate.php">
                        <h2> account information</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" id="name" value="<?php  echo $fn; ?>"required placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="father_name">Last Name :</label>
                                <input type="text" name="father_name" id="father_name" value="<?php  echo $ln;  ?>"required placeholder="Enter your last name">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="password">password :</label>
                            <input type="text" name="password" id="password"value="<?php  echo $pass;  ?>" required placeholder="Enter your password">
                        </div>
						<div class="form-group">
                            <label for="cpass">confirm password :</label>
                            <input type="text" name="cpass" id="cpass"value="<?php  echo $pass;  ?>" required placeholder="please confirm your password" onchange="cnpass()">
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address"value="<?php  echo $add;  ?>" required placeholder="your address">
                        </div>
						
						
                        <div class="form-row">
                            <div class="form-group">
                                <label for="domain"> your domain:</label>
                                <div class="form-select">
                                    <select name="domain" id="domain" required>
									
                                        <option value=<?php  echo $domain;?> selected><?php  echo $domain;?>  </option>
                                        <option value="academic">academic</option>
                                        <option value="technical">technical</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="class"> your class:</label>
                                <div class="form-select">
                                    <select name="class" id="class" required>
                                        <option value=<?php  echo $class;?> selected> <?php  echo $class;?></option>
                                        <option value="BT1">BT1</option>
                                        <option value="BT3">BT3</option>
										<option value="TS2">TS2</option>
										<option value="LT">LT</option>
										<option value="Y1">Y1</option>
										<option value="Y2">Y2</option>
										<option value="Y3">Y3</option>
										<option value="Y4">Y4</option>
										<option value="Y5">Y5</option>
										<option value="Y6">Y6</option>
										<option value="Y7">Y7</option>
										<option value="Y8">Y8</option>
										<option value="Y9">Y9</option>
										<option value="Y10">Y10</option>
										<option value="Y11">Y11</option>
										<option value="M1">M1</option>
										<option value="M2">M2</option>
										<option value="DC">DC</option>
										
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="course">Course :</label>
                            <div class="form-select">
                                <select name="course" id="course"  required >
                                    <option value=<?php  echo $course; ?> selected ><?php  echo $course; ?></option>
                                    <option value="Computer Operator & Pragramming Assistant">Computer Operator & Pragramming Assistant</option>
                                    <option value="desiger">Designer</option>
                                    <option value="marketing">Marketing</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="date" name="birth_date" value="<?php  echo $dob;  ?>" id="birth_date" required>
                        </div>
						
						
                        <div class="form-group">
                            <label for="pincode">Phone number :</label>
                            <input type="text" name="pincode" value="<?php  echo $phn;  ?>" id="pincode"placeholder="+961">
                        </div>
                       
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" value="<?php  echo $emn;  ?>" id="email"placeholder="exemple@gmail.com" />
							
							
						
		
                        </div>
						
                        <div class="form-submit">
					
                            <input type="button" value="cancel" class="submit" name="cancel" id="cancel" onclick="goback()" />
                            <input type="submit" value="update" class="submit" name="submit" id="submit" />
							
                        </div>
                        <br>
                        <br>
                        
                         <div class="">
						 <form method="POST" class="register-form" id="register-form" action="https://lbedugate.000webhostapp.com/phpdelaccount.php">
						 	<label for="">befor you delete your account confirm your password first :</label><br>
                            <input type="text" class="a2"name="delacc" value="" id="cnfdel"placeholder="confirm your password  "required>
                            <br>
                            	<button type="submit" class="btndel" style="width:160px;height:60px;" value="del" >Delete Account </button>
                    </form>
                        
                        
                        
                        
						 </form>
						 
					 </div>
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
		document.getElementById("cpass").value = document.getElementById("password").value;
	document.getElementById("cpass").focus();
	
	alert("the password does not match");
	
	}
	}
	function goback(){
		 window.history.back();
	}
	</script>
	
</body>
</html>