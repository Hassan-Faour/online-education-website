<?php
session_start();

$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');

if (isset($_POST['name'])) {

  $firstname = mysqli_real_escape_string($db, $_POST['name']);
   $lastname = mysqli_real_escape_string($db, $_POST['father_name']);
   $username = mysqli_real_escape_string($db, $_POST['usname']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
	 $dob = mysqli_real_escape_string($db, $_POST['birth_date']);
	  $adress = mysqli_real_escape_string($db, $_POST['address']);
   $phone = mysqli_real_escape_string($db, $_POST['pincode']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $domain = mysqli_real_escape_string($db, $_POST['domain']);
  $class = mysqli_real_escape_string($db, $_POST['class']);
    $course = mysqli_real_escape_string($db, $_POST['course']);
	
	$usertype=$_POST['gender'];
	

  $user_check_query = "select * from student where student.user='".$username."' limit 1 ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
 
      if ($user['user'] === $username) {
		
      $_SESSION["userdup"]="true";
	  
	   header("Location: https://lbedugate.000webhostapp.com/page3.php");}
	  
	 	
    
	else{
		
           $user_check_query = "select * from teacher where teacher.user='".$username."'limit 1 ";
            $result = mysqli_query($db, $user_check_query);
             $user = mysqli_fetch_assoc($result);
  
  
		  if ($user['user'] === $username) {
		
		   $_SESSION["userdup"]="true";
	  
	  	    header("Location: https://lbedugate.000webhostapp.com/page3.php");}
	
		   else{
					
		
		
		if($usertype=="s"){
			
				$query = "INSERT INTO student (	firstn,lastn,user,pass,dobn,addn,emailn,domainn,classn,coursn,phonen ) 
  			  VALUES('$firstname', '$lastname', '$username', '$password', '$dob', '$adress', '$email', ' $domain', ' $class', '$course', '$phone')";
				mysqli_query($db, $query);
  
					$_SESSION["usercrea"]="succ";
					header("Location: https://lbedugate.000webhostapp.com/page2.php");
				 
					
					}
		else {
				$query = "INSERT INTO teacher (	firstn,lastn,user,pass,dobn,addn,emailn,domainn,classn,coursn,phonen ) 
  			  VALUES('$firstname', '$lastname', '$username', '$password', '$dob', '$adress', '$email', ' $domain', ' $class', '$course', '$phone')";
				mysqli_query($db, $query);
  	
				    $_SESSION["usercrea"]="succ";
					header("Location: https://lbedugate.000webhostapp.com/page2.php");
	                                    
                      }
	
	}
		
	}

	}
?>