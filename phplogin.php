<?php 


$con=mysqli_connect("localhost","id12933201_h","12345");
mysqli_select_db($con,"id12933201_h");

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
	
   // $sql="select * from student where user='".$uname."'and Pass='".$password."' limit 1 " ;
   
     $sql="select * from student where student.user='".$uname."'and student.Pass='".$password."' limit 1 "  ;
	 
	 
	 
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
       session_start();
	  $_SESSION["ertext"]="false";
      $_SESSION["usen"] = $uname;
	  $_SESSION["pass"] = $password;
	  
	  
	  header("Location: https://lbedugate.000webhostapp.com/studentpage.php");
	
        exit();
    }
    else{
		
		
   
     $sql="select * from teacher where teacher.user='".$uname."'and teacher.Pass='".$password."' limit 1 "  ;
	 
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
       session_start();
	  $_SESSION["ertext"]="false";
      $_SESSION["usen"] = $uname;
	  $_SESSION["pass"] = $password;
	  
	  
	  header("Location: https://lbedugate.000webhostapp.com/teacherpage.php");
	
        exit();
	}
	else{
		
		
		session_start();
		
		
		$_SESSION["ertext"]="true";
		
        header("Location: https://lbedugate.000webhostapp.com/page2.php");
		
		
        exit();
	}
  
}}
  ?>