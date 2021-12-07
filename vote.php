<?php
session_start();

if(isset($_SESSION['login_voters_username']) && isset($_SESSION['login_voters_password'])){
	$user =$_SESSION['login_voters_username'];
 $pass = $_SESSION['login_voters_password'];
         if (file_exists("voted/$user.txt")){
           
            header("Location:already_voted.php");
  
    }else{
      

	include_once 'head.html';
	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['vote'])){
		 $user =$_SESSION['login_voters_username'];
 
 if (file_exists("voted/$user.txt")){
		 header("Location:already_voted.php");
    }else{

if (empty($_POST['party'])) {
	$err = "invalid voting";
}elseif ($_POST['party'] == "apc") {
	$val =  $_SESSION['login_voters_username'];
	$votes = fopen("APC/apc_voters.txt","a+");
$size = filesize("APC/apc_voters.txt");
fwrite($votes,"<br>   $val");
// echo fread($myvotersid,$size)."\n";

$voted = fopen("voted/$val.txt","a+");
$size = filesize("voted/$val.txt");
fwrite($voted,"<br>  $val");

header("Location:lastpage.php");

}elseif ($_POST['party'] == "pdp") {
	$val =  $_SESSION['login_voters_username'];
	$votes = fopen("PDP/pdp_voters.txt","a+");
$size = filesize("PDP/pdp_voters.txt");
fwrite($votes,"<br>   $val");
// echo fread($myvotersid,$size)."\n";

$voted = fopen("voted/$val.txt","a+");
$size = filesize("voted/$val.txt");
fwrite($voted,"<br> <br>  $val");

header("Location:lastpage.php");
}elseif ($_POST['party'] == "apga") {
	$val =  $_SESSION['login_voters_username'];
	$votes = fopen("APGA/apga_voters.txt","a+");
$size = filesize("APGA/apga_voters.txt");
fwrite($votes,"<br>   $val");
// echo fread($myvotersid,$size)."\n";

$voted = fopen("voted/$val.txt","a+");
$size = filesize("voted/$val.txt");
fwrite($voted,"<br> $val");

header("Location:lastpage.php");
}elseif ($_POST['party'] == "nuc") {
	$val =  $_SESSION['login_voters_username'];
	$votes = fopen("NUC/nuc_voters.txt","a+");
$size = filesize("NUC/nuc_voters.txt");
fwrite($votes,"<br>  $val");
// echo fread($myvotersid,$size)."\n";

$voted = fopen("voted/$val.txt","a+");
$size = filesize("voted/$val.txt");
fwrite($voted,"<br>   $val");

header("Location:lastpage.php");
}elseif ($_POST['party'] == "nupeng") {
	$val =  $_SESSION['login_voters_username'];
	$votes = fopen("NUPENG/nupeng_voters.txt","a+");
$size = filesize("NUPENG/nupeng_voters.txt");
fwrite($votes,"<br> <br>  $val");
// echo fread($myvotersid,$size)."\n";

$voted = fopen("voted/$val.txt","a+");
$size = filesize("voted/$val.txt");
fwrite($voted,"<br>  $val");

header("Location:lastpage.php");
}else{
	$err = "invalid voting";
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
<div class = "all">
<div class="row">
<div class="col-sm-8 col-md-4 col-lg-4">
<form action = "vote.php" method = "post">
';

require 'readapc.php';
echo ' <br>
<input name="party" id="apc" type="radio" value="apc" ><span style= "color:blue; font-size:25px;"> Vote</span><br> 
</div>

<div class="col-sm-8 col-md-4 col-lg-4">
 ';

require 'readpdp.php';
echo '<br>
<input name="party" id="apc" type="radio" value="pdp" ><span style= "color:blue; font-size:25px;"> Vote</span><br> 

</div>

<div class="col-sm-8 col-md-4 col-lg-4">
 ';

require 'readnuc.php';
echo '<br>
<input name="party" id="apc" type="radio" value="nuc" ><span style= "color:blue; font-size:25px;"> Vote</span><br> 

</div>

<div class="col-sm-8 col-md-4 col-lg-4">
';

require 'readapga.php';
echo '<br>
<input name="party" id="apc" type="radio" value="apga" ><span style= "color:blue; font-size:25px;"> Vote</span>
</div>

<div class="col-sm-8 col-md-4 col-lg-4">
';

require 'readnupeng.php';
echo '<br>
<input name="party" id="apc" type="radio" value="nupeng" ><span style= "color:blue; font-size:25px;"> Vote</span>
</div>
</span> <br> 
</div>

 <span style="color: red;" >';if(isset($err)){ echo $err;}
 echo'
</div>

<input type="submit" name="vote" value="Vote" class="btn btn-primary" style="margin-top: 10px;height:70px; width: 100%;font-size20px;">
</form>';



}

    
 }else {
	header("Location:home.php");
 }


	include_once 'footer.php';
?>