<?php 

session_start();

$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');
	$username= $_SESSION["usen"];

$name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
    
    // Insert record
  
	 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

	

			$user_check_query = "select * from student where student.user='".$username."' limit 1 ";
			$result = mysqli_query($db, $user_check_query);
			$user = mysqli_fetch_assoc($result);
  

			if ($user['status'] == "student") {
    		$query = "update student  set student.logo ='"."upload/".$name."'where student.user='".$username."'" ;
			mysqli_query($db, $query);
			header("Location: https://lbedugate.000webhostapp.com/studentpage.php");
					
															}
															
			else{
		    $user_check_query = "select * from teacher where teacher.user='".$username."' limit 1 ";
			$result = mysqli_query($db, $user_check_query);
			$user = mysqli_fetch_assoc($result);
  

			if ($user['status'] == "teacher") {
    		$query = "update teacher  set teacher.logo ='"."upload/".$name."' where teacher.user='".$username."'";
			mysqli_query($db, $query);
			header("Location: https://lbedugate.000webhostapp.com/teacherpage.php");
			}
	  
	  	
			
  //}
}
}
?>			
  