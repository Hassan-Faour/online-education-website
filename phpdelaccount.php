<?php
session_start();
$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');
  $uname=$_SESSION["usen"]  ;
 $password=$_SESSION["pass"] ; 
 $usertype=$_SESSION["accountdelusertype"];
 
 $password2 = mysqli_real_escape_string($db, $_POST['delacc']);

if($password!=$password2){
	
	  header("Location: https://lbedugate.000webhostapp.com/page2.php");
	  $_SESSION["ertext"]="true";
}

else{
	
	  header("Location: https://lbedugate.000webhostapp.com/page2.php");


if($usertype=="teacher"){


$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');
  $idfile = mysqli_real_escape_string($db, $_POST['fname']);

  
$user_check_query="delete  from teacher where user='". $uname."'";
   
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  $_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
  
  header("Location: https://lbedugate.000webhostapp.com/page2.php");
  
  
}
else{

  
 
$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');
  $idfile = mysqli_real_escape_string($db, $_POST['fname']);

  
$user_check_query="delete  from student where user='". $uname."'";
   
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  $_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
  header("Location: https://lbedugate.000webhostapp.com/page2.php"); 
  
}
}
?>