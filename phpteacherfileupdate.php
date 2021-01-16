<?php
session_start();

$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');
  $idfile = mysqli_real_escape_string($db, $_POST['fid']);
	$descfile = mysqli_real_escape_string($db, $_POST['desc']);
	

	$username= $_SESSION["usen"];
$courseclass=mysqli_real_escape_string($db, $_POST['fileclass']);
$name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
    
    // Insert record
  
	 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  
$user_check_query="update  teacherfile  set fname='"."upload/".$name."',ftype='".$imageFileType."',filedesc='".$descfile."',fileclass='".$courseclass."' where idf='".$idfile."'"; 
					   
  $result = mysqli_query($db, $user_check_query);

  
  
  header("Location: https://lbedugate.000webhostapp.com/teacherpage.php");
  
  
  
  
  
  
  

?>