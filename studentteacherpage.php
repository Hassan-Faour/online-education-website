<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.11.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/eeee.ico" type="image/x-icon">
  <meta name="description" content="Web Creator Description">
  
  <title>Page 1</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/web/assets/gdpr-plugin/gdpr-styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  <style>
  .a21{color:#0000ff;
  text-align:center;}
  
  .addfile{ 
			width:70%;
			height:70%;
			border: 3px solid #f1f1f1;
			z-index: 9;
			background-color: #369ADD;
			
			text-align:center;
			font-size:10px;
			border-radius:50%;}
    
     .logo1{max-height: 100px;
			max-width: 100px;
			@extend display-flex;
			
			}
  
  
  .a{@extend display-flex;
		float:right;}
		
	.infodiv{color:#ffffff;
		font-size:17px;
		float:left;}
		
	
		
	.e{position:absolute;
			top:200px;
			right:670px;}
		
	
	.f{width:70%;
			 min-height:900px;
			border-width:3px;
			text-align:center;
			align:center;
			 margin:auto;
	        font-size:10px;
	}
			
		.imgx{width:60px;
			height:60px;}		
			
	.tdx{width:10%;
				height:2%;
				border-width:1px;}
	.trx{
				height:12%;
				border-width:1px;}
				
				
	.j{	padding:0;
			border-width:3px;
			margin:auto;
			@extend display-flex;
			background-color:black;
			border-width:0px;
			}
			 
		

	.like{color:#ffffff;
			padding:0px;
			background-color:#333333;
			border-width:0px;
			}
	

	table{@extend display-flex;
		border-collapse: separate !important;
		border-radius:7px;
		border-color:#000000;}
		
		
		td{background-color:#EBEDEF;}
			
	.table2{@extend display-flex;
			margin:auto;
			text-align:center;
			border-width:3px;
			text-align:center;
			margin:auto;}
 
  		
	.die{display:block;
			top:5%;
			}
  
  
	.table4{@extend display-flex;
			width:50%;
			height:50%;	
			text-align:center;
			border-width:2px;
			}
			
	.div4{@extend display-flex;
			float:right;
			}

	

	.star{width:20%;
			height:50%;
			float:left;
			display:none;}



  
  .contactbox{width:100%;
			height:100%;
			text-align:center;
			font-size:20px;
			
			}
.sort1{background-color:#ff3366;
			text-align:center;
			padding:0;
			color:#ffffff;
			font-size:10px;}
			
	.sort2{background-color:#149dcc;
			text-align:center;
			font-size:10px;
			padding:0;
			color:#ffffff;}
			
 
 
  </style>
</head>
<body onload="starsys()">

<?php 


session_start();



$db = mysqli_connect('localhost', 'id12933201_h', '12345', 'id12933201_h');



  $firstname = $_SESSION["teachernamesearchx"];



$con=mysqli_connect("localhost","id12933201_h","12345");         
          mysqli_select_db($con,"id12933201_h");


$q = "select * from teacher where user='".$firstname."' limit 1";

$r = @mysqli_query($con, $q);                      // Run the query.

$num = mysqli_num_rows($r);

if($num > 0) {                                                   // if the query returns record(s).




while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	

$fn= $row['firstn'] ;
	
 

 $ln=$row['lastn'] ;

$phn= $row['phonen'] ;

$add=$row['addn'] ;

$emn= $row['emailn'] ;

$dob= $row['dobn'] ;

$image = $row['logo'];  

 

$teacherusername=$row['user']; 

$idt=$row['stid']; 

}
 

mysqli_free_result ($r);                             // Free up the resources.
} 

mysqli_close($con);                                  // Close the database connection.
							if(!isset($fn)){
							 header("Location: https://lbedugate.000webhostapp.com/page2.php");}
						 
						 

						 

$con2=mysqli_connect("localhost","id12933201_h","12345");         
          mysqli_select_db($con2,"id12933201_h");


$q2 = "select * from likesyst where idt='".$idt."'";

$r2 = @mysqli_query($con2, $q2);                      // Run the query.

$num2 = mysqli_num_rows($r2);
				 
		 $likenb=$num2;

		 
		 
		 
 $uname= $_SESSION["usen"] ;
 
 
 
 $con3=mysqli_connect("localhost","id12933201_h","12345"); 
 mysqli_select_db($con3,"id12933201_h");
	$q3 = "select * from student where user='".$uname."' limit 1";

$r3 = @mysqli_query($con3, $q3);                      

$num3 = mysqli_num_rows($r3);

if($num3 > 0) {                                                

while($row3 = mysqli_fetch_array($r3, MYSQLI_ASSOC)) {
	
$stid= $row3['stid'] ;}}	 

				 
				 
				 
				 
		 $con=mysqli_connect("localhost","id12933201_h","12345");
		mysqli_select_db($con,"id12933201_h");
				 
	 $sql="select * from likesyst where idt='".$idt."'and stid ='".$stid."'  ";
	 
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)>=1){ 
		 
		 
		 $prod="true";
		 
	}
	else{ $prod="false";}
	



	 
?>


  <section class="menu cid-rKnyhQJsQ2" once="menu" id="menu1-x">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    
                         <img src="assets/images/eeee.ico" alt="no photo" title="" style="height: 5.6rem;">
                    
                </span>
				
				
                    
             
				     <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="#top">
                        LB edugate</a></span>

						 
            </div>
			
        </div>
		
		
		
		
		
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
		
		<div class="div4">
		
                    	 <table border class="table4">
						 <tr class="like"><td class="like">
						 <span class ="like"><?php  echo $likenb;?> like!</span> </td></tr><tr class="like"><td class="like">   
						<img class="star" src ="images/Capt2ure.PNG" id="star6"> <img class="star" src ="images/Capt2ure.PNG" id="star7"><img class="star" src ="images/Capt2ure.PNG" id="star8">  <img class="star" src ="images/Capt2ure.PNG" id="star9"><img class="star" src ="images/Capt2ure.PNG"id="star10">  
						 <img class="star" src ="images/Capture.PNG" id="star1"> <img class="star" src ="images/Capture.PNG" id="star2"><img class="star" src ="images/Capture.PNG" id="star3">  <img class="star" src ="images/Capture.PNG" id="star4"><img class="star" src ="images/Capture.PNG"id="star5">  
						 </td></tr></table></div>
		
		
		
		
		<div class ="a"><?php  if ($image!=""){ echo '<img class="logo1" img src="'.$image.'"style="border-radius:100px;"/> ';}
			   
			   else{echo '<img class="logo1" img src="images/tt.gif" style="border-radius:100px;"/> ';}?>
			   
					<div class="infodiv" >
						<label class="b" for="lbl1"><?php  echo $fn."  ".$ln; ?> </label><br>
						 
						 <label class="c" for="lbl2"><?php  echo " user : ".$teacherusername; ?> </label><br>
						 
						 <label  class="d" for="lbl3"><?php  echo $add;     ?></label>

						 </div>
	
							</div>
							
							
		
	
		
          
        </div>
    </nav>
</section>


<section>

<br><br><br><br><br>
<br>

<div class="die">

</div>
				
				
				
	
<table border class="j" >
				<tr>
				<td class="sort1" onclick="sortbox1()"><div>all  files</div>  </td> 
				<td class="sort2" onclick="sortbox2()"><div>all videos</div></td>
				<td class="sort2" onclick="sortbox3()"><div>all photos</div></td>
				<td class="sort2" onclick="sortbox4()"><div>all documents</div></td>
				<td class="sort2"><?php echo$phn;  ?> </td> 
				<td class="sort2"><?php echo$emn;  ?> </td>
				</tr>				
				</table><br>
			
			
			

<div id="allfiledata">




 <table border class="f" align="center" cellpadding="10"  >
				<tr class="trx"style="border-bottom:2px solid black" >
				<td class="tdx"style="height:58px" >
<?php   

if(isset($_SESSION["nbfiledtd"])){


echo $_SESSION["nbfiledtd"]." files ";
}

?>

</td>
<td class="tdx">
  <form method="POST" action="phplikeadd.php"   enctype="multipart/form-data">

<input type="submit" class="addfile"   <?php if ($prod == 'true'){ ?> disabled <?php  } ?> value ="Like !" id="likebtn1" >  
<input type="text" value=<?php echo$firstname; ?> name="txt2" style="display:none">
</form>

 </td>
<td class="tdx"></td>
</tr>
 <tr>

<?php

$con=mysqli_connect("localhost","id12933201_h","12345");         
        mysqli_select_db($con,"id12933201_h");
		
		 
	$q = "select * from teacher where teacher.user='".$firstname."' limit 1";
	$r = @mysqli_query($con, $q);                     
	$num = mysqli_num_rows($r);

	if($num > 0) {   
	while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$fk= $row['stid'] ;}
	mysqli_free_result ($r);}                            
			//get the id of the teacher	(file owner)

                            
 
 
	$sql="select * from teacherfile where idt='".$fk."'";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
	$countera=0;


	$sql2="select * from teacherfile where idt='".$fk."' ORDER BY idf DESC LIMIT 1";
	$result2 = $con->query($sql2);
	if ($result2->num_rows > 0)	{
	while($row2 = $result2->fetch_assoc()) {
	$lastf= $row2["fname"];}}
	
	
	while($row = $result->fetch_assoc()) {
   
	if($row["ftype"]=="jpg"or $row["ftype"]=="png"or $row["ftype"]=="tif"or $row["ftype"]=="gif"){
		
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx' id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/qdt.png'class='imgx'>" ."</a>" ."<p>".$row["tusname"]."<p>".$row["filedesc"]."<p>".$row["fileclass"]." </td>";
		$countera=$countera+1;}

	
	else if($row["ftype"]=="webm"or $row["ftype"]=="mp4"or $row["ftype"]=="avi"or $row["ftype"]=="wmv"or $row["ftype"]=="flv"or $row["ftype"]=="avchd"or $row["ftype"]=="m4v" ){
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx' id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/vdt.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}
	
	else if($row["ftype"]=="3gp"or $row["ftype"]=="mp3"or $row["ftype"]=="wav"){
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/mscis.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}
	
	else if($row["ftype"]=="txt"or $row["ftype"]=="docx"or $row["ftype"]=="wpd"){
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/textwoedic.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}
	
	
	else if($row["ftype"]=="pdf"){
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/textpdfic.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}
		
	else{
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/ferr.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}

	if($row2["fname"]==$row["fname"]){
		echo"</tr>";
}	

}

 $_SESSION["nbfiledtd"]=$countera;
} 	
		?>
</table>

</div>


<div id="allvideodata" style="display:none">

 <table border class="f" align="center" cellpadding="10"  >
				<tr class="trx"style="border-bottom:2px solid black">
				<td class="tdx"style="height:58px">
<?php   

if(isset($_SESSION["nbfiledtd2"])){


echo $_SESSION["nbfiledtd2"]." files ";
}

?>

</td>
<td class="tdx">
  <form method="POST" action="phplikeadd.php"   enctype="multipart/form-data">

<input type="submit" class="addfile"   <?php if ($prod == 'true'){ ?> disabled <?php  } ?> value ="Like !" id="likebtn1" >  
<input type="text" value=<?php echo$firstname; ?> name="txt2" style="display:none">
</form></td>
<td class="tdx"></td>

</tr> <tr>

<?php

$con=mysqli_connect("localhost","id12933201_h","12345");         
        mysqli_select_db($con,"id12933201_h");
		
		 
	$q = "select * from teacher where teacher.user='".$firstname."' limit 1";
	$r = @mysqli_query($con, $q);                     
	$num = mysqli_num_rows($r);

	if($num > 0) {   
	while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$fk= $row['stid'] ;}
	mysqli_free_result ($r);}                            
			//get the id of the teacher	(file owner)

                            
 
 
	$sql="select * from teacherfile where idt='".$fk."'";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
	$countera=0;


	$sql2="select * from teacherfile where idt='".$fk."' ORDER BY idf DESC LIMIT 1";
	$result2 = $con->query($sql2);
	if ($result2->num_rows > 0)	{
	while($row2 = $result2->fetch_assoc()) {
	$lastf= $row2["fname"];}}
	
	
	while($row = $result->fetch_assoc()) {
   
	

	
	 if($row["ftype"]=="webm"or $row["ftype"]=="mp4"or $row["ftype"]=="avi"or $row["ftype"]=="wmv"or $row["ftype"]=="flv"or $row["ftype"]=="avchd"or $row["ftype"]=="m4v" ){
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx' id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/vdt.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}
	

	if($row2["fname"]==$row["fname"]){
		echo"</tr>";
}	

}

 $_SESSION["nbfiledtd2"]=$countera;
} 	
		?>
</table>

</div>



<div id="allphotodata" style="display:none">


 <table border class="f" align="center" cellpadding="10"  >
				<tr class="trx"style="border-bottom:2px solid black">
				<td class="tdx"style="height:58px">
<?php   

if(isset($_SESSION["nbfiledtd3"])){


echo $_SESSION["nbfiledtd3"]." files ";
}

?>

</td>
  <td class="tdx">
  <form method="POST" action="phplikeadd.php"   enctype="multipart/form-data">

<input type="submit" class="addfile"   <?php if ($prod == 'true'){ ?> disabled <?php  } ?> value ="Like !" id="likebtn1" >  
<input type="text" value=<?php echo$firstname; ?> name="txt2" style="display:none">
</form>
</td>
<td class="tdx"></td>
</tr> <tr>

<?php

$con=mysqli_connect("localhost","id12933201_h","12345");         
        mysqli_select_db($con,"id12933201_h");
		
		 
	$q = "select * from teacher where teacher.user='".$firstname."' limit 1";
	$r = @mysqli_query($con, $q);                     
	$num = mysqli_num_rows($r);

	if($num > 0) {   
	while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$fk= $row['stid'] ;}
	mysqli_free_result ($r);}                            
			//get the id of the teacher	(file owner)

                            
 
 
	$sql="select * from teacherfile where idt='".$fk."'";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
	$countera=0;


	$sql2="select * from teacherfile where idt='".$fk."' ORDER BY idf DESC LIMIT 1";
	$result2 = $con->query($sql2);
	if ($result2->num_rows > 0)	{
	while($row2 = $result2->fetch_assoc()) {
	$lastf= $row2["fname"];}}
	
	
	while($row = $result->fetch_assoc()) {
   
	if($row["ftype"]=="jpg"or $row["ftype"]=="png"or $row["ftype"]=="tif"or $row["ftype"]=="gif"){
		
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx' id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/qdt.png'class='imgx'>" ."</a>" ."<p>".$row["tusname"]."<p>".$row["filedesc"]."<p>".$row["fileclass"]." </td>";
		$countera=$countera+1;}

	

	if($row2["fname"]==$row["fname"]){
		echo"</tr>";
}	

}

 $_SESSION["nbfiledtd3"]=$countera;
} 	
		?>
</table>

</div>



<div id="alldocumentdata" style="display:none">
 <table border class="f" align="center" cellpadding="10"  >
				<tr class="trx"style="border-bottom:2px solid black">
				<td class="tdx"style="height:58px" >
<?php   

if(isset($_SESSION["nbfiledtd4"])){


echo $_SESSION["nbfiledtd4"]." files ";
}

?>
</td>
<td class="tdx">
  <form method="POST" action="phplikeadd.php"   enctype="multipart/form-data">

<input type="submit" class="addfile"   <?php if ($prod == 'true'){ ?> disabled <?php  } ?> value ="Like !" id="likebtn1" >  
<input type="text" value=<?php echo$firstname; ?> name="txt2" style="display:none">
</form>  </td>
<td class="tdx"></td>

</tr> <tr>

<?php

$con=mysqli_connect("localhost","id12933201_h","12345");         
        mysqli_select_db($con,"id12933201_h");
		
		 
	$q = "select * from teacher where teacher.user='".$firstname."' limit 1";
	$r = @mysqli_query($con, $q);                     
	$num = mysqli_num_rows($r);

	if($num > 0) {   
	while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$fk= $row['stid'] ;}
	mysqli_free_result ($r);}                            
			//get the id of the teacher	(file owner)

                            
 
 
	$sql="select * from teacherfile where idt='".$fk."'";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
	$countera=0;


	$sql2="select * from teacherfile where idt='".$fk."' ORDER BY idf DESC LIMIT 1";
	$result2 = $con->query($sql2);
	if ($result2->num_rows > 0)	{
	while($row2 = $result2->fetch_assoc()) {
	$lastf= $row2["fname"];}}
	
	
	while($row = $result->fetch_assoc()) {
   
	 if($row["ftype"]=="txt"or $row["ftype"]=="docx"or $row["ftype"]=="wpd"){
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/textwoedic.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}
	
	
	else if($row["ftype"]=="pdf"){
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/textpdfic.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}
		
	

	if($row2["fname"]==$row["fname"]){
		echo"</tr>";
}	

}

 $_SESSION["nbfiledtd4"]=$countera;
} 	
		?>
</table>
</div>
<br>
				
				<table border class="table2" >
	  <form method="POST" action="https://lbedugate.000webhostapp.com/reportsection.php" class="form-container" enctype="multipart/form-data">
				<tr>
				<td>report category<br>
				
										<select name="domain"  required>
                                       
										<option value="wronginfo">wrong information</option>
                                        <option value="spam">spam</option>
                                        <option value="relgion post">relgion post</option>
										<option value="sexual">sexual</option>
										<option value="violent">violent</option>
										<option value="others">others</option>
										</select>
										
				</td></tr>
				<tr><td>
				<input type="text" name="ids" style="display:none;"  value=<?php echo$stid;?> >
				<input type="text" name="idt"  style="display:none;" value=<?php echo$idt;?> >
				
				<textarea name="desc" rows="4" cols="30" maxlength="200" required placeholder="please write your report here,dont forget course and class description !"></textarea>
				</td></tr>
				
				<tr><td> <button type="submit" class="btn btn-primary tm-btn-search">upload</button> 
				<br> <?php    if(!isset($_SESSION["reportsucss"])){
								$_SESSION["reportsucss"]="none";}
								
								$_SESSION["reportsucss"] ;	
								if($_SESSION["reportsucss"]=="succ")
		{
		echo "<p class=\"a21\"> report submited succsufuly</p>" ; 
		}?>
				
				</td></tr>
				</table><br>
	
  </form><br>




		
<br>
<br>	
</section>





<section class="engine">site creation software</section><section class="header1 cid-rRwJrJ4NgK mbr-parallax-background" id="header1-11">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(193, 193, 193);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">search for your course</h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">its easy thing to do&nbsp;</h3>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                    just choose your course name your class then if u want more perfect search add your teacher name &nbsp;you will not miss anything ! evrything is here in one click .<br><br>if you have any problems or &nbsp;you need help! please contact us !.<br>&nbsp; 
                </p>
                
            </div>
        </div>
    </div>

</section>

<section class="cid-rRwIAiZdK5" id="footer1-y">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                   
                        <img src="assets/images/eeee.ico" alt="Mobirise" title="">
                   
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Address
                </h5>
                <p class="mbr-text">lebanon/beirut/bir hassan/LT<br><br></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email: faourhmh7@gmail.com &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>Phone 1 : +96181678436 <br>Phone 2 : +96170726564 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br><br></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links
                </h5>
                <p class="mbr-text"><a href="https://www.mehe.gov.lb/ar" class="text-secondary">The Ministry of Education</a><br><br><a href="https://vtelb.com/" class="text-secondary">General Directorate for Vocational and Technical Education</a>&nbsp;<br><br><a href="https://www.ul.edu.lb/" class="text-secondary">Lebanese University</a><br></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2020 LB edugate - All Rights Reserved  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;this site is made by Hassan al faour&nbsp;</p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            
                                <span class="mbr-iconfont mbr-iconfont-social socicon-whatsapp socicon"></span>
                           
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/hassan.faour.9028" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                         
                                <span class="mbr-iconfont mbr-iconfont-social socicon-mail socicon"></span>
                          
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
	
</section>



  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  <script>
  function sortbox1(){
 
  document.getElementById("allfiledata").style.display = "block";
  document.getElementById("allvideodata").style.display = "none";
  document.getElementById("allphotodata").style.display = "none";
  document.getElementById("alldocumentdata").style.display = "none";
  }
   function sortbox2(){

  document.getElementById("allvideodata").style.display = "block";
  document.getElementById("allphotodata").style.display = "none";
  document.getElementById("alldocumentdata").style.display = "none";
  document.getElementById("allfiledata").style.display = "none";
  }
   function sortbox3(){

  document.getElementById("allphotodata").style.display = "block";
  document.getElementById("alldocumentdata").style.display = "none";
  document.getElementById("allfiledata").style.display = "none";
  document.getElementById("allvideodata").style.display = "none";
  }
   function sortbox4(){
	   
  document.getElementById("alldocumentdata").style.display = "block";
  document.getElementById("allfiledata").style.display = "none";
  document.getElementById("allvideodata").style.display = "none";
  document.getElementById("allphotodata").style.display = "none";
  }
  
  
  
  </script>
<script>
function starsys() {
		document.getElementById("star1").style.display = "block";
		document.getElementById("star2").style.display = "block";
		document.getElementById("star3").style.display = "block";
		document.getElementById("star4").style.display = "block";
		document.getElementById("star5").style.display = "block";
		
		document.getElementById("star6").style.display = "none";
		document.getElementById("star7").style.display = "none";
		document.getElementById("star8").style.display = "none";
		document.getElementById("star9").style.display = "none";
		document.getElementById("star10").style.display = "none";
		
	
	if(<?php echo $likenb;?>==0){


		document.getElementById("star1").style.display = "block";
		document.getElementById("star2").style.display = "block";
		document.getElementById("star3").style.display = "block";
		document.getElementById("star4").style.display = "block";
		document.getElementById("star5").style.display = "block";
	}
	else if(<?php echo $likenb;?> <=50){
		
	
		
		document.getElementById("star6").style.display = "block";
		
		document.getElementById("star1").style.display = "none";
		document.getElementById("star2").style.display = "block";
		document.getElementById("star3").style.display = "block";
		document.getElementById("star4").style.display = "block";
		document.getElementById("star5").style.display = "block";
	
		
	}
	else if(<?php echo $likenb;?> >50 & <?php echo $likenb;?> <=150 ){
		
		document.getElementById("star6").style.display = "block";
		document.getElementById("star7").style.display = "block";
		
		document.getElementById("star1").style.display = "none";
		document.getElementById("star2").style.display = "none";
		document.getElementById("star3").style.display = "block";
		document.getElementById("star4").style.display = "block";
		document.getElementById("star5").style.display = "block";
		
		
	}
	else if(<?php echo $likenb;?> >150 & <?php echo $likenb;?> <=400){
		
		
		 document.getElementById("star6").style.display = "block";
		document.getElementById("star7").style.display = "block";
		document.getElementById("star8").style.display = "block";
		
		document.getElementById("star1").style.display = "none";
		document.getElementById("star2").style.display = "none";
		document.getElementById("star3").style.display = "none";
		document.getElementById("star4").style.display = "block";
		document.getElementById("star5").style.display = "block";
		
		
		
	}
	else if(<?php echo $likenb;?> >400 &  <?php echo $likenb;?> <1000){
		
		

		 document.getElementById("star6").style.display = "block";
		document.getElementById("star7").style.display = "block";
		document.getElementById("star8").style.display = "block";
		document.getElementById("star9").style.display = "block";
		
		document.getElementById("star1").style.display = "none";
		document.getElementById("star2").style.display = "none";
		document.getElementById("star3").style.display = "none";
		document.getElementById("star4").style.display = "none";
		document.getElementById("star5").style.display = "block";
		
		
	}
	else if(<?php echo  $likenb;?> >=1000){
		
		
		
		
		 document.getElementById("star6").style.display = "block";
		document.getElementById("star7").style.display = "block";
		document.getElementById("star8").style.display = "block";
		document.getElementById("star9").style.display = "block";
		document.getElementById("star10").style.display = "block";
		
		
		document.getElementById("star1").style.display = "none";
		document.getElementById("star2").style.display = "none";
		document.getElementById("star3").style.display = "none";
		document.getElementById("star4").style.display = "none";
		document.getElementById("star5").style.display = "none";
		
		
	}
		
	
}

</script>

  </body>
</html>