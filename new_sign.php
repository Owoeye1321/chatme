<?php
session_start();
	include 'head.html';
  //$err_signup_voters = "<i style='color:red;'>Invalid Login</i>";
   //$err_signup_contestant="<i style='color:red;'>Invalid Login</i>";
   $pass_log="<i style='color:green; font-size:13px;'>Password must be at least 8 characters</i>";
      $pass="<i style='color:green; font-size:13px;'>Password must be at least 8 characters</i>";
  function clean_data($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
  //  $data = mysql_real_escape_string($data);
    return $data;
  }

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['signup_voters'])){ 

  $voters_id = time();

   //validating username
                     if(!preg_match("/^[a-zA-Z ]*$/",$_POST['signup_voters_username'])){
                           $err_signup_voters = "<i style='color:red;'>Invalid sign up</i>";  
                           } else{

                              $signup_voters_username = clean_data($_POST['signup_voters_username']);
                           }
                           
                              //validating password
                           if(mb_strlen($_POST['signup_voters_password']) < 5){
                               $pass="<i style='color:red; font-size:13px;'>Password must be at least 8 characters</i>";
                            }
                            else{
                              $signup_voters_password = clean_data($_POST['signup_voters_password']);
                            }
                                //validate email
                     
                          //check if email adress is well formed
                                if(!filter_var($_POST['signup_voters_email'],FILTER_VALIDATE_EMAIL)){
                                  $err_signup_voters = "<i style='color:red;'>Invalid email</i>";
                                
                               }else{
                                $signup_voters_email = clean_data($_POST['signup_voters_email']);
                               }
                          
  if(empty($signup_voters_username ) || empty($signup_voters_password) || empty($signup_voters_email)){
                  $err_signup_voters = "<i style='color:red;  font-size:13px;'>Invalid sign up</i>"; 
               }else{
                 $_SESSION['login_voters_username'] =  $signup_voters_username;
                 $_SESSION['login_voters_password'] =  $signup_voters_password;
                 $_SESSION['login_voters_email'] =  $signup_voters_email;


$myfile = fopen("voters/voters.txt","a+");
$get = filesize("voters/voters.txt");
 fwrite($myfile,"<br> <br> Username:  $signup_voters_username <br> Password: $signup_voters_password <br> Email: $signup_voters_email <br> voters_id:  $voters_id");
 //echo fread($myfile,$get)."\n";

 $user = $signup_voters_username;
 $myfile = fopen("voters/$user.txt","a+");
$get = filesize("voters/$user.txt");
fwrite($myfile,"<br> <br> Username:  $signup_voters_username <br> Password: $signup_voters_password <br> Email: $signup_voters_email <br> voters_id:  $voters_id");


$myvotersid = fopen("voters id/voters_id.txt","a+");
$size = filesize("voters id/voters_id.txt");
fwrite($myvotersid,"<br> $voters_id");
 //echo fread($myvotersid,$size)."\n";

 echo"<script>
                                    alert('Your voting identity is $voters_id' );
                                      window.location='vote.php';
                                    </script>";


                 

               }


}elseif ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['signup_contestant'])) {

  
  $contestant_id = time();
//username check
   //validating username
                     if(!preg_match("/^[a-zA-Z ]*$/",$_POST['signup_contestant_username'])){
                            $err_signup_contestant="<i style='color:red; font-size:13px;'>Invalid sign up</i>"; 
                           } else{

                              $signup_contestant_username = clean_data($_POST['signup_contestant_username']);
                           }
                           
                              //validating password
                           if(mb_strlen($_POST['signup_contestant_password']) < 8){
                              $pass_log="<i style='color:red; font-size:13px;'>Password must be at least 8 characters</i>";
                            }
                            else{
                              $signup_contestant_password = clean_data($_POST['signup_contestant_password']);
                            }
                                //validate email
                     
                          //check if email adress is well formed
                                if(!filter_var($_POST['signup_contestant_email'],FILTER_VALIDATE_EMAIL)){
                                      $err_signup_contestant = "<i style='color:red;  font-size:13px;'>Invalid email</i>";;
                                
                               }else{
                                $signup_contestant_email = clean_data($_POST['signup_contestant_email']);
                               }
                          
  if(empty($signup_contestant_username ) || empty($signup_contestant_password) || empty($signup_contestant_email)){
                 $err_signup_contestant="<i style='color:red; font-size:13px;'>Invalid sign up</i>";
               }else{
                 $_SESSION['login_contestant_username'] =  $signup_contestant_username;
                 $_SESSION['login_contestant_password'] =  $signup_contestant_password;
                 $_SESSION['login_contestant_email'] =  $signup_contestant_email;


$myfile = fopen("contestant/contestant.txt","a+");
$get = filesize("contestant/contestant.txt");
 fwrite($myfile,"<br> <br> Username:  $signup_contestant_username <br> Password: $signup_contestant_password <br> Email: $signup_contestant_email <br> contestant_id:  $contestant_id");
 //echo fread($myfile,$get)."\n";

 $user = $signup_contestant_username;
 $myfile = fopen("contestant/$user.txt","a+");
$get = filesize("contestant/$user.txt");
fwrite($myfile,"<br> <br> Username:  $signup_contestant_username <br> Password: $signup_contestant_password <br> Email: $signup_contestant_email <br> contestant_id:  $contestant_id");


$myvotersid = fopen("contestant id/contestant_id.txt","a+");
$size = filesize("contestant id/contestant_id.txt");
fwrite($myvotersid,"<br> $contestant_id");
 //echo fread($myvotersid,$size)."\n";

 echo"<script>
                                    alert('Your contesting identity is $contestant_id' );
                                      window.location='real_contest.php';
                                    </script>";


                 

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
<form role="form" action="new_sign.php" method="post"> 
          <div class="form-group">
            <br>
      
      <input type="text"  name="signup_voters_username" required class="form-control" placeholder="Username"> <br>
      
      <input type="Password"  name="signup_voters_password" required class="form-control" placeholder="Password">
      <?php
      if(isset($pass)){ echo $pass;}?> <br>

      <input type="Email"  name="signup_voters_email" required class="form-control" placeholder="Email"><?php
      if(isset($err_signup_voters)){ echo $err_signup_voters;}?> <br>

      <input class="btn btn-primary" name="signup_voters" type="submit" name="login" value="Login">

    </div>
</form>
      
    </div>
    </div>
    
  </div>

   <div class="row">
    <div class="merge">
      <div class="col-sm-8 col-md-6 col-lg-6">
       <b  style="color: dark;">CONTESTANT</b> 
<form role="form"  action="new_sign.php" method="post">
          <div class="form-group">
            <br>
      
      <input type="text"  name="signup_contestant_username" required class="form-control" placeholder="Username"> <br>
      
      <input type="Password"  name="signup_contestant_password" required class="form-control" placeholder="Password">
       <?php
      if(isset($pass_log)){ echo $pass_log;}?> <br>
      
      <input type="Email"  name="signup_contestant_email" required class="form-control" placeholder="Email"> <?php
       if(isset($err_signup_contestant)){ echo $err_signup_contestant;}?><br>

      <input class="btn btn-primary"  name="signup_contestant"  type="submit" name="login" value="Login">

    </div>
</form>
      
    </div>
    </div>
    
  </div>


  <?php
  include 'footer.php';

  ?>