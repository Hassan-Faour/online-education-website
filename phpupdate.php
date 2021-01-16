<?php
session_start();

$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');



  $firstname = mysqli_real_escape_string($db, $_POST['name']);
   $lastname = mysqli_real_escape_string($db, $_POST['father_name']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
	 $dob = mysqli_real_escape_string($db, $_POST['birth_date']);
	  $adress = mysqli_real_escape_string($db, $_POST['address']);
   $phone = mysqli_real_escape_string($db, $_POST['pincode']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $domain = mysqli_real_escape_string($db, $_POST['domain']);
  $class = mysqli_real_escape_string($db, $_POST['class']);
    $course = mysqli_real_escape_string($db, $_POST['course']);
	
	$username=$_SESSION["usen"];
	

  $user_check_query = "select * from student where student.user='".$username."' limit 1 ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
 
      if ($user['user'] == $username) {
					$query ="update student  set firstn='".$firstname."', lastn='".$lastname. "',pass='".$password."',dobn='".$dob."',emailn='".$email."',addn='".$adress."',domainn='".$domain."',classn='".$class."',coursn='".$course."',phonen='".$phone."' where student.user='".$username."'"; 
					mysqli_query($db, $query);
					header("Location: https://lbedugate.000webhostapp.com/account.php");
					
	}
	  
	 	
    
							else{
		
					$query ="update teacher  set firstn='".$firstname."', lastn='".$lastname. "',pass='".$password."',dobn='".$dob."',emailn='".$email."',addn='".$adress."',domainn='".$domain."',classn='".$class."',coursn='".$course."',phonen='".$phone."' where teacher.user='".$username."'";
					mysqli_query($db, $query);
					header("Location: https://lbedugate.000webhostapp.com/account2.php");
						
  	            }
	
	
		
	

	
?>