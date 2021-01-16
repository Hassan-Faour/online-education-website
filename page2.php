

<html>
<head>
<title>Login </title>
    <link rel="stylesheet" type="text/css" href="css/stylelg.css">
	
	<style>
	.a{text-align:center;
		color:#ff0000;
		}
	.b{text-align:center;
		color:#369ADD;
	}
		
	</style>
	</head>
	
	
<body background="images/pic1.jpg">
    <div class="loginbox">
    <img src="images/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form method ="POST" action="https://lbedugate.000webhostapp.com/phplogin.php">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
			
			
				<?php session_start();  
				
					
					
        
		
		 
if(!isset($_SESSION["ertext"])){
$_SESSION["ertext"]="none";}
			 			
			 $_SESSION["ertext"] ;	
   
			if($_SESSION["ertext"]=="true")
		{
		echo "<p class=\"a\">wrong password or username<br></p>" ; 
		}
		
if(!isset($_SESSION["usercrea"])){
		$_SESSION["usercrea"]="none";}
		
			$_SESSION["usercrea"] ;
			
if ($_SESSION["usercrea"]=="succ"){
	
	echo "<p class=\"b\">your account is now ready thank you for join us !!<br></p>" ;
	$_SESSION["usercrea"]="none" ;
}



				
			?>  
			
			
			
            <a href="">Lost your password?</a><br>
            <a href="page3.php">Don't have an account?</a>
        </form>
        
    </div>

</body>
</head>
</html>