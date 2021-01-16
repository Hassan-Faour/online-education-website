<?php 

session_start();

$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');
	
  $uname= $_SESSION["usen"] ;
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

 $filedes= mysqli_real_escape_string($db, $_POST['desc']);
 $fileclass= mysqli_real_escape_string($db, $_POST['fileclass']);
 
 
	$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');

	 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
   
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   
		$con=mysqli_connect("localhost","id12933201_h","12345");         
        mysqli_select_db($con,"id12933201_h");
		$uname= $_SESSION["usen"] ;
		 
$q = "select * from teacher where teacher.user='".$uname."' limit 1";

$r = @mysqli_query($con, $q);                     

$num = mysqli_num_rows($r);

if($num > 0) {   


while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	

$fk= $row['stid'] ;
	
}
 
mysqli_free_result ($r);                             
}  


$fname=$target_dir.$name;

		

		
$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');


$query = "INSERT INTO teacherfile (fname,ftype,idt,filedesc,fileclass,tusname ) 
  			  VALUES('$fname', '$imageFileType', '$fk','$filedes','$fileclass','$uname')";
				mysqli_query($db, $query);
  






		
  header("Location: https://lbedugate.000webhostapp.com/teacherpage.php");
?>			
  