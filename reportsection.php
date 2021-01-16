<?php
session_start();

$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');



  $idt = mysqli_real_escape_string($db, $_POST['idt']);
   $ids = mysqli_real_escape_string($db, $_POST['ids']);
    $desc = mysqli_real_escape_string($db, $_POST['desc']);
   $cat = mysqli_real_escape_string($db, $_POST['domain']);
   
   
   
   
   
   $query = "INSERT INTO report (recat,redes,ids,idt) 
  			  VALUES('$cat', '$desc', '$ids', '$idt')";
				mysqli_query($db, $query);
  
					$_SESSION["reportsucss"]="succ";
					
					header("Location: https://lbedugate.000webhostapp.com/studentteacherpage.php");
  
   ?>