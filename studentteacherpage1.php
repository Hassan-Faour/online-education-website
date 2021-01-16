<?php
session_start();
$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');
 $firstname = mysqli_real_escape_string($db, $_POST['teachername']);

 
 
 $con=mysqli_connect("localhost","id12933201_h","12345");         
        mysqli_select_db($con,"id12933201_h");
		
		 
	$q = "select * from teacher where teacher.user='".$firstname."' limit 1";
	$r = @mysqli_query($con, $q);                     
	$num = mysqli_num_rows($r);

	if($num > 0) { 
 
 $_SESSION["teachernamesearchx"] = $firstname;
 $_SESSION["teacherseachresultx"] ="true";
	header("Location: https://lbedugate.000webhostapp.com/studentteacherpage.php");}
 
 else{
 
 $_SESSION["teacherseachresultx"] ="none";
 
 
 header("Location: https://lbedugate.000webhostapp.com/studentpage.php");
 }
?>