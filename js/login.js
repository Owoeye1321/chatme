$(document).ready(function(){ 

function forget_password(){
	
}
 
$("#signup").click(function(){

		$(".login_contestant").hide();
  	  	 	$(".signup_contestant").show();

})
  
$("#Login").click(function(){

		$(".login_voters").hide();
  	  	 	$(".signup_voters").show();

})
$(".forget_password").click(function(){
alert('Firstly why would you forget your password !!! \nPlease dont stress me !!\nTry to remenber it yourself please! ')

}) 


$("#log").click(function(){

window.location="new_log.php";

})


$("#Sign").click(function(){

	
window.location="new_sign.php";

})


$("#bring").click(function(){

 
 $("#take").show();
$("#bring").hide();
 $("#content").show();

})


$("#take").click(function(){

 
 $("#take").hide();
$("#bring").show();
 $("#content").show();

})


})