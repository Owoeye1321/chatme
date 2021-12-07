<?php
session_start();

if(isset($_SESSION['login_contestant_username']) && isset($_SESSION['login_contestant_password'])){
$user =$_SESSION['login_contestant_username'];
 $pass = $_SESSION['login_contestant_password'];
         if (file_exists("contested/$user.txt")){
          header("Location:already_contested.php");
        }else {
          
include 'head.html';  
echo '<div  style="max-width: 100%;padding: 30px 3px 10px 3px;  background-image: url(img/hall.jpeg); background-repeat: no-repeat; background-size: cover; background-position: center;  opacity: 1.3">';
include 'logo.html';

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
   fwrite($file, "APC");


$file = fopen("apc.php","w");
fwrite($file, "<img style='height:300px;width:300px; margin-top: 20px;' src='$uploaded_image'>");



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


  }


  elseif ($name_of_party == "pdp") {
    
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
fwrite($file, "<img style='height:300px;width:300px; margin-top: 20px;'src='$uploaded_image'>");




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
fwrite($file, "<img style='height:300px;width:300px; margin-top: 20px;' src='$uploaded_image'>");




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
fwrite($file, "<img style='height:300px;width:300px; margin-top: 20px;' src='$uploaded_image'>");





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

$file = fopen("nuc.php","w");
fwrite($file, "<img style='height:300px;width:300px; margin-top: 20px;' src='$uploaded_image'>");





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


  }else{
    $err = "Click on the radio button to choose a party";
  }
   

}else{
      
    $err = "Unable to contest"; 
  }
}
}
echo '<div class="container" style="border:1px solid; padding:10px 10px 10px 40px; border-color: lightblue; margin-top: 10px; width: 50%;">

<center><strong  style="text-align: center; margin-top: 20px;font-size: 30px; color: red;" > Stand a chance to contest for the election</strong>
<br><br>
<form action = "contest.php" method = "post" enctype ="multipart/form-data">  

<input name="party"  type="radio" value="apc" > <b style="color: white;">APC</b>
<input name="party"  type="radio" value="pdp"> <b  style="color: white;">PDP</b>

<input name="party"  type="radio" value="apga"> <b style="color: white;">APGA</b>
<input name="party"  type="radio" value="nuc"> <b style="color: white;">NUC</b>

<input name="party"  type="radio" value="nupeng"> <b style="color: white;">NUPENG</b>


<br><br>
			<strong style="color: blue; font-size: 20px;">Choose an Image to show voters</strong><br>
			
      <strong style="color: #ffffff; font-size: 25px;" >Choose image to upload </strong >
      <input type= "file" required style="height: 40px; color: black;" name ="pic"  ><br>
			<br> <span style="color: red;" ><?php if(isset($err)){ echo $err;}?></span> <br>
      <button type = "submit" class="btn btn-success" style="margin-bottom: 25px;" name = "upload">Upload</button> 
		</form>
		</center>
 
	</div>

</div>
';
echo '	
<center style="text-align: center; margin-top: 20px;font-size: 30px;" >Votes</center>
<div class="container" style="max-width: 97%;">
<div class="row" style=" padding-left: 10px;">
		<div class="col-sm-8 col-md-5 col-lg-3" style=" border:3px solid; margin-left:20px; margin-top: 30px; border-radius: 20px; text-align: center;">	<center style="text-align: center; margin-top: 5px;font-size: 15px;" ><strong>APC  VOTES</strong></center>		
			<p>';

      $myfile = fopen("APC/apc_voters.txt","a+");
      $get = filesize("APC/apc_voters.txt");
       echo fread($myfile,$get)."\n";
       echo '</p>';
       echo '</div>
       <div class="col-sm-8 col-md-5 col-lg-3"  style=" border:3px solid; margin-left:20px; margin-top: 30px; border-radius: 20px;text-align: center;"><center style="text-align: center; margin-top: 5px;font-size: 13px;" ><strong>PDP VOTES</strong></strong></center>
       <p>';
       
 $myfile = fopen("PDP/pdp_voters.txt","a+");
 $get = filesize("PDP/pdp_voters.txt");
  echo fread($myfile,$get)."\n";
  echo '</p>';
  echo '	</div> 	
  <div class="col-sm-8 col-md-5 col-lg-3"  style=" border:3px solid; margin-left:20px; margin-top: 30px; border-radius: 20px;text-align: center;"><center style="text-align: center; margin-top: 5px;font-size: 13px;" ><strong>NUC VOTES</strong></center>
  <p>';
   		
 $myfile = fopen("NUC/nuc_voters.txt","a+");
 $get = filesize("NUC/nuc_voters.txt");
  echo fread($myfile,$get)."\n";
  echo '</p>	

	</div>
	<div class="col-sm-8 col-md-5 col-lg-3" style=" border:3px solid; margin-left:20px; border-radius: 20px; margin-top: 30px;text-align: center;">			<center style="text-align: center; margin-top: 5px;font-size: 13px;" ><strong>APGA VOTES</strong></center>
    <p>';
    
$myfile = fopen("APGA/apga_voters.txt","a+");
$get = filesize("APGA/apga_voters.txt");
 echo fread($myfile,$get)."\n"; 
 echo '</p>
 </div>
 <div class="col-sm-8 col-md-5 col-lg-3"  style=" border:3px solid; margin-left:20px; border-radius: 20px; margin-top: 30px;text-align: center;"><center style="text-align: center; margin-top: 5px;font-size: 13px;" ><strong>NUPENG VOTES</strong></center>
   <p>';
   
$myfile = fopen("NUPENG/nupeng_voters.txt","a+");
$get = filesize("NUPENG/nupeng_voters.txt");
 echo fread($myfile,$get)."\n"; 
 echo '</p>
 </div>

</div>
</div>';
        }
            
    //echo'<script>alert("logged in successsfully")</script>';
    }else{

      header("Location:login.php");
      
  }

	include 'footer.php';
?>