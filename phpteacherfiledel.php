<?php
session_start();

$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');
  $idfile = mysqli_real_escape_string($db, $_POST['fname']);

  
  	
$con=mysqli_connect("localhost","id12933201_h","12345");         
        mysqli_select_db($con,"id12933201_h");
		
		 
	$q="select * from teacherfile where idf='". $idfile."'" ;
	$r = @mysqli_query($con, $q);                     
	$num = mysqli_num_rows($r);

	if($num > 0) {   
	while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    $filenamedel=$row["fname"] ;}
	
	}
  
 
  
  
 unlink(realpath($filenamedel));
  
  
$user_check_query="delete  from teacherfile where idf='".$idfile."'";
   
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  

  header("Location: https://lbedugate.000webhostapp.com/teacherpage.php");
 

?>