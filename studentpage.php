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
  
  .imgx{width:60px;
			height:60px;}
  .tdx{width:5%;
				height:2%;
				border-width:1px;}
	.trx{
				height:12%;
				border-width:1px;}
				
				
  .logo1{max-height: 100px;
			max-width: 100px;
			@extend display-flex;
			
			}
  
  
  .a{@extend display-flex;
		float:right;}
		
		
		.infodiv{color:#ffffff;
		font-size:17px;
		
		float:left;}
		
		.e{@extend display-flex;
		
		}
		
		
		
		.f{width:70%;
			 min-height:900px;
			
			border-width:3px;
			text-align:center;
			align:center;
			 margin:auto;}
			 
			table{
		border-collapse: separate !important;
		border-radius:7px;
		border-color:#000000;
	}
  
  
  
/* The popup form - hidden by default */
.form-popup {
  display: none;
	@extend display-flex;
  z-index: 9;
}

/* Add styles to the form container 

.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: gray;
}



/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
 

  
  
  </style>
</head>
<body>
				
				
				
				
				
				

<?php 


session_start();



$con=mysqli_connect("localhost","id12933201_h","12345");         
          mysqli_select_db($con,"id12933201_h");

		  $uname= $_SESSION["usen"] ;
		   $password= $_SESSION["pass"] ;
	  $_SESSION["nbfiledtd"]="0";
	  
$q = "select * from student where user='".$uname."'and Pass='".$password."' limit 1";

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
$studentusername=$row['user']; 


}
 

mysqli_free_result ($r);                             // Free up the resources.
} 

mysqli_close($con);                                  // Close the database connection.

						 if(!isset($_SESSION["usen"])){
							 header("Location: https://lbedugate.000webhostapp.com/page2.php");}
						 
						

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
                    
                         <img src="assets/images/eeee.ico" alt="no photo" title="" style="height: 5.6rem;"></span>
                    

		

                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="#top">LB edugate</a></span>

				
					 		
            </div>
			
        </div>
		
			   
		
			   
			  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
		
		
		
		
		<div class="a"  onclick="openForm()" ><?php  if ($image!=""){ echo '<img class="logo1" img src="'.$image.'"style="border-radius:100px;"/> ';}
			   
			   else{	   
			echo '<img class="logo1" img src="images/v.gif"style="border-radius:100px;"/> '; } ?> 
					<div class="infodiv">
					
					
							<label class="b" for="lbl1"><?php  echo $fn."  ".$ln;      ?> </label><br>
						 
						 <label class="c" for="lbl2"><?php  echo " user : ".$studentusername; ?> </label><br>
						 
						 <label  class="d" for="lbl3"><?php  echo $add;     ?></label>	
					</div>		

					</div>
					
					<div class="form-popup" id="myForm">

		<form method="POST" action="https://lbedugate.000webhostapp.com/phplogoup.php" class="form-container" enctype="multipart/form-data">
 
		<input type="file" name="file" id="image" style="max-width: 250px;" >

		<br><button type="button" class="btn btn-primary tm-btn-search" onclick="closeForm()">Close</button>  <button type="submit" class="btn btn-primary tm-btn-search">upload</button></br>
		</form>
		</div>
					
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="index.html#accordion1-k" data-toggle="dropdown-submenu" aria-expanded="true"><span class="mbri-setting mbr-iconfont mbr-iconfont-btn"></span>settings</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="https://lbedugate.000webhostapp.com/account.php">account</a><a class="text-white dropdown-item display-4" href="" aria-expanded="false">privacy</a><a class="text-white dropdown-item display-4" href="" aria-expanded="false">notification</a><a class="text-white dropdown-item display-4" href="https://lbedugate.000webhostapp.com/dest.php" aria-expanded="false">SIGN OUT</a></div></li></ul>
            
			
        </div>
		
		
		
    </nav>
	
</section>


<section>

<div> <br><br><br><br><br>
</div>
<div> <P></div>

<div class="tm-section tm-bg-img" id="tm-section-1">
                <div>
				
                    <div class="">
					
                        <div class="row">
						
                            <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
							
							
                                <form action="https://lbedugate.000webhostapp.com/searchsys.php" method="post" class="tm-search-form tm-section-pad-2" id="searchform1">
                                  
										
                                           
											
                                            <input type="text" name="coursename"  class="form-control" id="inputCity" placeholder="course name" required>
                                        
										
                                            <input  type="text"name="courseclass" class="form-control" id="inputCheckIn" placeholder="  Course class" required >
                                            
                                            <input  type="text"name="teachername" class="form-control" id="inputCheckOut" placeholder=" teacher user name ">
                                            
                                            
											
                                        <p style="color:#ff0000;float:right;">
										
											<?php  
											if(isset($_SESSION["teacherseachresultx"])and $_SESSION["teacherseachresultx"]=="none"){
				
											echo"Cannot find any teacher with this username !";	
											}
											?>
											
											</p>
											
											<br><br>
											search for a teacher ! 
											<br><br>
												<input type="checkbox" name="box1"value="teacher search" id="check12"class="form-control"style="width:20%;" onclick="changesearch()" >
											
                                     </div>	
                                    </div>
									
                                    <br>
                                       
                                        <div class="e">
										
                                            <button type="submit" class="btn btn-primary tm-btn-search" style="margin:auto;display:block;">search</button>
										
                                        </div>
														
                                      </div>
                         
                                     
                                </form>
                            </div>                        
                        </div>      
                    </div>
                </div>                  
            </div>

 <br><br><br><br><br>
</section>






<section>







 

 <table border class="f" align="center" cellpadding="10">
				<tr class="trx"style="border-bottom:2px solid black">
				<td class="tdx"style="height:58px" colspan="3">
<?php   

if(isset($_SESSION["nbfiledtd"])){


echo "search result is  ".$_SESSION["nbfiledtd"]." files ";
}

?>

</td>

</td></tr> <tr>

<?php
if(isset($_SESSION["srx"])){


if($_SESSION["srx"]=="yesteacher"){

	$courseclass=$_SESSION["courseclass"] ;
	$coursename=$_SESSION["coursename"] ;
	$teachername=$_SESSION["teachernamef"]  ;
	  



$con=mysqli_connect("localhost","id12933201_h","12345");         
        mysqli_select_db($con,"id12933201_h");
		$uname= $_SESSION["usen"] ;
		 
	$q = "select * from teacher where teacher.user='".$uname."' limit 1";
	$r = @mysqli_query($con, $q);                     
	$num = mysqli_num_rows($r);

	if($num > 0) {   
	while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$fk= $row['stid'] ;}
	mysqli_free_result ($r);}                            
			//get the id of the teacher	(file owner)

                            
 
 
	$sql="select * from teacherfile where filedesc LIKE '".$coursename."%'and  fileclass LIke'".$courseclass."%'and idt='".$teachername."'    ";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
	$countera=0;


	$sql2="select * from teacherfile where idt='".$teachername."' ORDER BY idf DESC LIMIT 1";
	$result2 = $con->query($sql2);
	if ($result2->num_rows > 0)	{
	while($row2 = $result2->fetch_assoc()) {
	$lastf= $row2["fname"];}}
	
	
	while($row = $result->fetch_assoc()) {
   
	if($row["ftype"]=="jpg"or $row["ftype"]=="png"or $row["ftype"]=="tif"or $row["ftype"]=="gif"){
		
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'onclick='openFormz(this.id)' id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/qdt.png'class='imgx'>" ."</a>" ."<p>".$row["tusname"]."<p>".$row["filedesc"]."<p>".$row["fileclass"]." </td>";
		$countera=$countera+1;}

	
	else if($row["ftype"]=="webm"or $row["ftype"]=="mp4"or $row["ftype"]=="avi"or $row["ftype"]=="wmv"or $row["ftype"]=="flv"or $row["ftype"]=="avchd"or $row["ftype"]=="m4v" ){
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'onclick='openFormz(this.id)' id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/vdt.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}
	
	else if($row["ftype"]=="3gp"or $row["ftype"]=="mp3"or $row["ftype"]=="wav"){
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'onclick='openFormz(this.id)'id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/mscis.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}
	
	else if($row["ftype"]=="txt"or $row["ftype"]=="docx"or $row["ftype"]=="wpd"){
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'onclick='openFormz(this.id)'id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/textwoedic.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}
	
	
	else if($row["ftype"]=="pdf"){
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'onclick='openFormz(this.id)'id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/textpdfic.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}
		
	else{
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'onclick='openFormz(this.id)'id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/ferr.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}

	if($row2["fname"]==$row["fname"]){
		echo"</tr>";
}	

}

 $_SESSION["nbfiledtd"]=$countera;
} 	

}
else{
















	$courseclass=$_SESSION["courseclass"] ;
	$coursename=$_SESSION["coursename"] ;
	
	  



$con=mysqli_connect("localhost","id12933201_h","12345");         
        mysqli_select_db($con,"id12933201_h");
	

 
	$sql="select * from teacherfile where filedesc LIKE '".$coursename."%'and  fileclass LIke'".$courseclass."%' ";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
	$countera=0;


	$sql2="select * from teacherfile  where filedesc LIKE '".$coursename."%'and  fileclass LIke'".$courseclass."%'  ORDER BY idf DESC LIMIT 1";
	$result2 = $con->query($sql2);
	if ($result2->num_rows > 0)	{
	while($row2 = $result2->fetch_assoc()) {
	$lastf= $row2["fname"];}}
	
	
	while($row = $result->fetch_assoc()) {
   
	if($row["ftype"]=="jpg"or $row["ftype"]=="png"or $row["ftype"]=="tif"or $row["ftype"]=="gif"){
		
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'onclick='openFormz(this.id)' id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/qdt.png'class='imgx'>" ."</a>" ."<p>".$row["tusname"]."<p>".$row["filedesc"]."<p>".$row["fileclass"]." </td>";
		$countera=$countera+1;}

	
	else if($row["ftype"]=="webm"or $row["ftype"]=="mp4"or $row["ftype"]=="avi"or $row["ftype"]=="wmv"or $row["ftype"]=="flv"or $row["ftype"]=="avchd"or $row["ftype"]=="m4v" ){
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'onclick='openFormz(this.id)' id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/vdt.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}
	
	else if($row["ftype"]=="3gp"or $row["ftype"]=="mp3"or $row["ftype"]=="wav"){
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'onclick='openFormz(this.id)'id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/mscis.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}
	
	else if($row["ftype"]=="txt"or $row["ftype"]=="docx"or $row["ftype"]=="wpd"){
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'onclick='openFormz(this.id)'id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/textwoedic.png'class='imgx'>" ."<p>".$row["tusname"]."</a>"."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}
	
	
	else if($row["ftype"]=="pdf"){
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'onclick='openFormz(this.id)'id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/textpdfic.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}
		
	else{
		if($countera%3==0){
		echo "</tr>";
		echo "<tr class'trx'>";}
		echo "<td class='tdx'onclick='openFormz(this.id)'id='".$row["idf"]."'>"."<a href='".$row["fname"]."'>" ."<img src='images/ferr.png'class='imgx'>" ."</a>"."<p>".$row["tusname"]."<p>" .$row["filedesc"]."<p>".$row["fileclass"]."</td>";
		$countera=$countera+1;}

	if($row2["fname"]==$row["fname"]){
		echo"</tr>";
}	

}

 $_SESSION["nbfiledtd"]=$countera;
} 	




}}
		?>
</table>




















</section>






<section class="engine">site creation software</section><section class="header1 cid-rRwJrJ4NgK mbr-parallax-background" id="header1-11">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(193, 193, 193);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">search for your course</h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">it's easy thing to do&nbsp;</h3>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                    just choose your course name , your class then if you want more accurate search add your teacher name &nbsp;you will not miss anything ! evrything is here in one click .<br><br>if you have any problems or &nbsp;you need some help! please contact us !.<br>&nbsp; 
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
                        © Copyright 2020 LB edugate - All Rights Reserved &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;this site is made by Hassan al faour&nbsp;</p>
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
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<script>
function changesearch(){

if(document.getElementById("check12").checked==true){

document.getElementById("inputCity").disabled=true;
document.getElementById("inputCity").value="";

document.getElementById("inputCheckIn").disabled=true;
document.getElementById("inputCheckIn").value="";

document.getElementById("searchform1").action ="https://lbedugate.000webhostapp.com/studentteacherpage1.php" ;


}
else{

document.getElementById("inputCity").disabled=false;
document.getElementById("inputCheckIn").disabled=false;
document.getElementById("searchform1").action ="https://lbedugate.000webhostapp.com/phplogoup.php";

}
}
</script>


  </body>
</html>