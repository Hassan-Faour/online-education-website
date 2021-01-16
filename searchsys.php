<?php
session_start();
$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');
$con=mysqli_connect("localhost","id12933201_h","12345");         
      


  $coursename = mysqli_real_escape_string($db,$_POST['coursename']);
   $courseclass = mysqli_real_escape_string($db,$_POST['courseclass']);
   $teachername = mysqli_real_escape_string($db,$_POST['teachername']);

   

	$_SESSION["courseclass"] =  $courseclass;
	$_SESSION["coursename"] = $coursename;
	
	
	
	
$con=mysqli_connect("localhost","id12933201_h","12345");         
        mysqli_select_db($con,"id12933201_h");
		$uname= $_SESSION["usen"] ;
		 
	$q="select * from teacher where user='".$teachername."'" ;
	$r = @mysqli_query($con, $q);                     
	$num = mysqli_num_rows($r);

	if($num > 0) {   
	while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$_SESSION["teachernamef"]=$row["stid"] ;}
	
	}
	
	
	

$_SESSION["nbfiledtd"]=0;

	if($teachername==""){
		$_SESSION["srx"]="noteacher";
	}
	else{
	$_SESSION["srx"]="yesteacher";	
	}

	
	
	  header("Location: https://lbedugate.000webhostapp.com/studentpage.php");
?>