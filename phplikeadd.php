<?php 
session_start();





$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');
 $uname = mysqli_real_escape_string($db, $_POST['txt2']);

$con=mysqli_connect("localhost","id12933201_h","12345");         
          mysqli_select_db($con,"id12933201_h");


$q = "select * from teacher where user='".$uname."' limit 1";

$r = @mysqli_query($con, $q);                      

$num = mysqli_num_rows($r);

if($num > 0) {                                                

while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	
$idt= $row['stid'] ;}}

$student =$_SESSION["usen"];



$con2=mysqli_connect("localhost","id12933201_h","12345");         
          mysqli_select_db($con2,"id12933201_h");


$q2 = "select * from student where user='".$student."' limit 1";

$r2 = @mysqli_query($con2, $q2);                      

$num2 = mysqli_num_rows($r2);

if($num2 > 0) {                                                

while($row2 = mysqli_fetch_array($r2, MYSQLI_ASSOC)) {
	
$stdid= $row2['stid'] ;}}

				
				
				$query = "INSERT INTO likesyst (stid,idt ) VALUES('$stdid', '$idt')";
  			  
				mysqli_query($db, $query);				
					
	
        header("Location:http://lbedugate.000webhostapp.com/studentteacherpage.php");
		   
		

?>