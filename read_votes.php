<?php
  include_once'head.html';

  include 'real_nav.php';

  ?>
   <main class="animate__animated animate__fadeInLeft">
   
<div style="margin-top:30px;">
<center style="text-align: center; margin-top: 20px;font-size: 30px;" >Votes</center>
<div class="container" style="max-width: 97%;">
<div class="row" style=" padding-left: 10px;">
    <div class="col-sm-8 col-md-5 col-lg-3" style=" border:3px solid; margin-left:20px; margin-top: 30px; border-radius: 20px; text-align: center;">  <center style="text-align: center; margin-top: 5px;font-size: 15px;" ><strong>APC  VOTES</strong></center>    
      <p>
      <?php
      $myfile = fopen("APC/apc_voters.txt","r");
      $get = filesize("APC/apc_voters.txt");
       echo fread($myfile,$get)."<br>";
       $number_of_votes_apc =count(file("APC/apc_voters.txt"));
      // echo $number_of_votes_apc;
        echo "Total votes for apga= $number_of_votes_apc";
    ?>
      </p>
       </div>
       <div class="col-sm-8 col-md-5 col-lg-3"  style=" border:3px solid; margin-left:20px; margin-top: 30px; border-radius: 20px;text-align: center;"><center style="text-align: center; margin-top: 5px;font-size: 13px;" ><strong>PDP VOTES</strong></strong></center>
       <p>
       
       <?php
 $myfile = fopen("PDP/pdp_voters.txt","r");
 $get = filesize("PDP/pdp_voters.txt");
  echo fread($myfile,$get)."<br>";
 $number_of_votes_pdp =count(file("PDP/pdp_voters.txt"));
     //  echo $number_of_votes_pdp;

   echo "Total votes for apga= $number_of_votes_pdp";
?>
  </p>
 </div>   
  <div class="col-sm-8 col-md-5 col-lg-3"  style=" border:3px solid; margin-left:20px; margin-top: 30px; border-radius: 20px;text-align: center;"><center style="text-align: center; margin-top: 5px;font-size: 13px;" ><strong>NUC VOTES</strong></center>
  <p>
  <?php 
 $myfile = fopen("NUC/nuc_voters.txt","r");
 $get = filesize("NUC/nuc_voters.txt");
  echo fread($myfile,$get)."<br>";
  
$number_of_votes_nuc =count(file("NUC/nuc_voters.txt"));
     //  echo $number_of_votes_nuc;
         echo "Total votes for apga= $number_of_votes_nuc";
?>
 </p> 

  </div>
  <div class="col-sm-8 col-md-5 col-lg-3" style=" border:3px solid; margin-left:20px; border-radius: 20px; margin-top: 30px;text-align: center;">     <center style="text-align: center; margin-top: 5px;font-size: 13px;" ><strong>APGA VOTES</strong></center>
    <p>
     
  <?php
$myfile = fopen("APGA/apga_voters.txt","r");
$get = filesize("APGA/apga_voters.txt");
 echo fread($myfile,$get)."<br>";

$number_of_votes_apga =count(file("APGA/apga_voters.txt"));
      // echo $number_of_votes_apga;


   echo "Total votes for apga= $number_of_votes_apga";
   ?>  
 </p>
 </div>
 <div class="col-sm-8 col-md-5 col-lg-3"  style=" border:3px solid; margin-left:20px; border-radius: 20px; margin-top: 30px;text-align: center;"><center style="text-align: center; margin-top: 5px;font-size: 13px;" ><strong>NUPENG VOTES</strong></center>
   <p>
   
   <?php
$myfile = fopen("NUPENG/nupeng_voters.txt","r");
$get = filesize("NUPENG/nupeng_voters.txt");
 echo fread($myfile,$get)."<br>";

$number_of_votes_nupeng =count(file("NUPENG/nupeng_voters.txt"));
     //  echo $number_of_votes_nupeng;
     echo "Total votes for apga= $number_of_votes_nupeng";
    ?> 
</p>
 </div>

</div>
</div>
</div>

  </main>

<?php
  include 'footer.php';

  ?>