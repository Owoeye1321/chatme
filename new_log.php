<?php
session_start();
	include 'head.html';
	//$err_log ="<i style='color:red;'>Invalid Login</i>";
	//$err_contestant = "<i  style='color:red;'>Invalid Login</i>";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['login_voters'])) {
	if (empty( $_POST['login_voters_username']) || empty($_POST['login_voters_password'])) {
		 $err_log ="<i style='color:red; font-size:13px;'>Invalid Login</i>";
	} else {
		  $user = $_POST['login_voters_username'];  
   		  $pass = $_POST['login_voters_password'];  
    if (file_exists("voters/$user.txt")){

    	$File =fopen("voters/$user.txt", "r");

	 	$size = filesize("voters/$user.txt");

	 	$content =fread($File, $size);

	 	$password = $_POST['login_voters_password'];

	 	$connect =strpos($content, $password);

	 	if (empty($connect)) {

	 		 $err_log ="<i style='color:red;font-size:13px;'>Invalid Login</i>";

	 	} else {

	 		 $_SESSION['login_voters_username'] = $_POST['login_voters_username'];
           $_SESSION['login_voters_password'] = $_POST['login_voters_password'];
          //  $err_log = "logged in successsfully";
            
    //echo'<script>alert("logged in successsfully")</script>';
          header("Location:vote.php");

	 	}


        
    }else{
     
      $err_log ="<i style='color:red;font-size:13px;'>Invalid Login</i>";
    }
	}
	
 

 

}elseif ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['login_contestant'])) {
	if (empty($_POST['login_contestant_username']) || empty($_POST['login_contestant_password'])) {
		$err_contestant = "<i  style='color:red; font-size:13px;'>Invalid Login</i>";
	} else {

		$user = $_POST['login_contestant_username'];  
     	$pass = $_POST['login_contestant_password'];  
    if (file_exists("contestant/$user.txt")){

    	$File =fopen("contestant/$user.txt", "r");

	 	$size = filesize("contestant/$user.txt");

	 	$content =fread($File, $size);

	 	$password = $_POST['login_contestant_password'];

	 	$connect =strpos($content, $password);
	 	if (empty($connect)) {

	 		  $err_contestant = "<i  style='color:red; font-size:13px;'>Invalid Login</i>";

	 	} else {

	 	 $_SESSION['login_contestant_username'] = $_POST['login_contestant_username'];
           $_SESSION['login_contestant_password'] = $_POST['login_contestant_password'];
            // $err_log = "logged in successsfully";
            
    //echo'<script>alert("logged in successsfully")</script>';
            header("Location:real_contest.php");
	 	}

        
    }else{
      $err_contestant = "<i  style='color:red; font-size:13px;'>Invalid Login</i>";
    }
	}
	

   
 
}
		
		
	?>
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
	<div class="row">
		<div class="merge">
			<div class="col-sm-8 col-md-6 col-lg-6">
			 <b  style="color: dark;">VOTERS</b> 
<form role="form" action="new_log.php" method="post">
          <div class="form-group">
          	<br>
 			
 			<input type="text" name="login_voters_username" required  class="form-control" placeholder="Username"> <br>
 			
 			<input type="Password" name="login_voters_password" required class="form-control" placeholder="Password"><?php
 			 if(isset($err_log)){ echo $err_log;}?> <br>

 			<input class="btn btn-primary" name="login_voters"  type="submit" name="login" value="Login">

 		</div>
</form>
			
		</div>
		</div>
		
	</div>



	<div class="row">
		<div class="merge">
			<div class="col-sm-8 col-md-6 col-lg-6">
			 <b  style="color: dark;">CONTESTANT</b> 
<form role="form"  action="new_log.php" method="post">
          <div class="form-group">
          	<br>
 			
 			<input type="text"  name="login_contestant_username" required class="form-control" placeholder="Username"> <br>
 			
 			<input type="Password"  name="login_contestant_password" required class="form-control" placeholder="Password"> <?php
 			 if(isset($err_contestant)){ echo $err_contestant;}?><br>

 			<input class="btn btn-primary"  name="login_contestant"  type="submit" name="login" value="Login">

 		</div>
</form>
			
		</div>
		</div>
		
	</div>

	<?php
	include 'footer.php';

	?>