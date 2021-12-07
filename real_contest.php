<?php
session_start();

if(isset($_SESSION['login_contestant_username']) && isset($_SESSION['login_contestant_password'])){
	$user =$_SESSION['login_contestant_username'];
     $pass = $_SESSION['login_contestant_password'];
      if (file_exists("contested/$user.txt")){
          header("Location:already_contested.php");
        }else {
        	include 'head.html'; 
        	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['upload'])){ 
        		 $user =$_SESSION['login_contestant_username'];
        		  $pass = $_SESSION['login_contestant_password'];
        		   if (file_exists("contested/$user.txt")){
					 header("Location:already_contested.php");
   				 }else{
   				 	if (isset($_POST['party']) && isset($_FILES['pic']['tmp_name'])){
   				 		 $name_of_party = $_POST['party'];

   				 		 if ($name_of_party == "apc") {   

$source  =  $_FILES['pic']['tmp_name'];  
 $destination = 'apc_con/'.$_FILES['pic']['name'];
 $filetype =strtolower(pathinfo($destination,PATHINFO_EXTENSION));
 if(file_exists($destination)){
    $err = "Unable to contest";
     
 }else if($_FILES['pic']['size'] > 400000){

      $err = "file too large";
 }else if($filetype == "png" || $filetype == "jpg" || $filetype == "jpeg"){

 if( move_uploaded_file($source,$destination)){
   $uploaded_image = $destination;
   
   $file = fopen("apc_con/apc_con.txt","w");
   fwrite($file, "<br>APC");


$file = fopen("apc.php","w");
fwrite($file, "<img style='height:300px;width:450px; margin-top: 20px;' src='$uploaded_image'>");



 $val = $_SESSION['login_contestant_username'];
$contested = fopen("contested/$val.txt","a+");
$size = filesize("contested/$val.txt");
fwrite($contested,"<br> <br>  $val");



    echo'<script>alert("Contested successfully to APC")</script>';
    header("Location:lastcontest.php");
 }
}else{
    $err = "Only png, jpeg and jpg files are required";
}


  } elseif ($name_of_party == "pdp") {
    
     $source  =  $_FILES['pic']['tmp_name'];  		
 $destination = 'pdp_con/'.$_FILES['pic']['name'];
 $filetype =strtolower(pathinfo($destination,PATHINFO_EXTENSION));
 if(file_exists($destination)){
     $err = "file already exist";
     
 }else if($_FILES['pic']['size'] > 200000){
      $err = "file too large";
 }else if($filetype == "png" || $filetype == "jpg" || $filetype == "jpeg"){

 if( move_uploaded_file($source,$destination)){
   $uploaded_image = $destination;     
   $file = fopen("pdp_con/pdp_con.txt","w");
   fwrite($file, "<br>PDP");


$file = fopen("pdp.php","w");
fwrite($file, "<img style='height:300px;width:450px; margin-top: 20px;'src='$uploaded_image'>");




 $val = $_SESSION['login_contestant_username'];
$contested = fopen("contested/$val.txt","a+");
$size = filesize("contested/$val.txt");
fwrite($contested,"<br> <br>  $val");

    echo'<script>alert("Contested successfully to PDP")</script>';
        header("Location:lastcontest.php");
 }
}else{
    $err = "Only png, jpeg and jpg files are required";
}


  }
  elseif ($name_of_party == "apga") {
    
     $source  =  $_FILES['pic']['tmp_name'];  		
 $destination = 'apga_con/'.$_FILES['pic']['name'];
 $filetype =strtolower(pathinfo($destination,PATHINFO_EXTENSION));
 if(file_exists($destination)){
     $err = "Unable to contest";
     
 }else if($_FILES['pic']['size'] > 200000){
      $err = "file too large";
 }else if($filetype == "png" || $filetype == "jpg" || $filetype == "jpeg"){

 if( move_uploaded_file($source,$destination)){
   $uploaded_image = $destination;
  
   $file = fopen("apga_con/apga_con.txt","w");
   fwrite($file, "<br>APGA");


$file = fopen("apga.php","w");
fwrite($file, "<img style='height:300px;width:450px; margin-top: 20px;' src='$uploaded_image'>");




 $val = $_SESSION['login_contestant_username'];
$contested = fopen("contested/$val.txt","a+");
$size = filesize("contested/$val.txt");
fwrite($contested,"<br> <br>  $val");
    echo'<script>alert("Contested successfully to APGA")</script>';
        header("Location:lastcontest.php");
 }
}else{
    $err = "Only png, jpeg and jpg files are required";
}


  }
  elseif ($name_of_party == "nuc") {
    
     $source  =  $_FILES['pic']['tmp_name'];  		
 $destination = 'nuc_con/'.$_FILES['pic']['name'];
 $filetype =strtolower(pathinfo($destination,PATHINFO_EXTENSION));
 if(file_exists($destination)){
    $err = "Unable to contest";
     
 }else if($_FILES['pic']['size'] > 200000){
      $err = "file too large";
 }else if($filetype == "png" || $filetype == "jpg" || $filetype == "jpeg"){

 if( move_uploaded_file($source,$destination)){
   $uploaded_image = $destination;
   
   $file = fopen("nuc_con/nuc_con.txt","w");
   fwrite($file, "<br>NUC");

$file = fopen("nuc.php","w");
fwrite($file, "<img style='height:300px;width:450px; margin-top: 20px;' src='$uploaded_image'>");





 $val = $_SESSION['login_contestant_username'];
$contested = fopen("contested/$val.txt","a+");
$size = filesize("contested/$val.txt");
fwrite($contested,"<br> <br>  $val");
    echo'<script>alert("Contested successfully to NUC")</script>';
        header("Location:lastcontest.php");
 }
}else{
    $err = "Only png, jpeg and jpg files are required";
}


  }
   elseif ($name_of_party == "nupeng") {
    
     $source  =  $_FILES['pic']['tmp_name'];  		
 $destination = 'nupeng_con/'.$_FILES['pic']['name'];
 $filetype =strtolower(pathinfo($destination,PATHINFO_EXTENSION));
 if(file_exists($destination)){
    $err = "Unable to contest";
     
 }else if($_FILES['pic']['size'] > 200000){
      $err = "file too large";
 }else if($filetype == "png" || $filetype == "jpg" || $filetype == "jpeg"){

 if( move_uploaded_file($source,$destination)){
   $uploaded_image = $destination;
   
   $file = fopen("nupeng_con/nupeng_con.txt","w");
   fwrite($file, "<br>NUPENG");

$file = fopen("nupeng.php","w");
fwrite($file, "<img style='height:300px;width:450px; margin-top: 20px;'src='$uploaded_image'>");


 $val = $_SESSION['login_contestant_username'];
$contested = fopen("contested/$val.txt","a+");
$size = filesize("contested/$val.txt");
fwrite($contested,"<br> <br>  $val");
    echo'<script>alert("Contested successfully to NUPENG")</script>';
        header("Location:lastcontest.php");
 }
}else{
    $err = "Only png, jpeg and jpg files are required";
}
  }else{
    $err = "Click on the radio button to choose a party";
  }
   				 	}else{
   				 		$err = "Unable to contest";
   				 	}
   				 }
          }
          
echo '
<nav style="height: 60px; background:lightblue; margin-top: 4px; padding: 5px 0px 5px 0px; border-radius: 5px;width: 100%;">
    <div class="desk" style=" height: 45px;">
             <div style="float: left;">
              <img id="logo" src="img/logo.jpeg" class="img-circle" style="width: 80px; margin-top: 4px; height: 40px;margin-left: 8px; "> 
                     </div>
                       <div style=" margin-top: 5px;float: left; margin-left: 3px;">
                         <b style="font-size: 23px;">2020 election</b>

                       </div>
                        </div>
                         <div class="mobile" style="">
             <div style="float: left; margin-left: 5px;">
              <img id="logo" src="img/logo.jpeg" class="img-circle" style="width: 80px; margin-top: 4px; height: 40px; "> 
                     </div> 
                      <div style=" margin-top:6px;float: left;margin-left: 3px;">
                         <b style="font-size: 20px;">2020 election</b>

                       </div>
                       </div>
  </nav>
  <div class="widght" style="">

<center><strong  style="text-align: center; margin-top: 20px;font-size: 30px; color: red;" > Stand a chance to contest for the election</strong>
<br><br>
<form action = "real_contest.php" method = "post" enctype ="multipart/form-data">  

<input name="party"  type="radio" value="apc" > <b style="color: #000000;">APC</b>
<input name="party"  type="radio" value="pdp"> <b  style="color:  #000000;">PDP</b>

<input name="party"  type="radio" value="apga"> <b style="color:  #000000;">APGA</b>
<input name="party"  type="radio" value="nuc"> <b style="color:  #000000;">NUC</b>

<input name="party"  type="radio" value="nupeng"> <b style="color:  #000000;">NUPENG</b>


<br><br>
			<strong style="color: blue; font-size: 20px;">Choose an Image to show voters</strong><br>
			
      <strong style="color: #000000; font-size: 25px;" >Choose image to upload </strong >
      <input type= "file" required style="height: 40px; color: white;" name ="pic"  ><br>
			<br> <span style="color: red;" >';
      if(isset($err)){ echo $err;};echo'</span> <br>

      <button type = "submit" class="btn btn-success" style="margin-bottom: 25px;" name = "upload">Upload</button> 
		</form>
		</center>

	</div>';
        }
   
}else{

      header("Location:home.php");
      
  }
  include 'footer.php';
?>