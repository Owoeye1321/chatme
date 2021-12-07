
<?php
	include_once'head.html';
	include'real_nav.php';

 
	 if (file_exists("voters/owoeye.txt")){

	 	$File =fopen("voters/owoeye.txt", "r");

	 	$size = filesize("voters/owoeye.txt");

	 	$content =fread($File, $size);

	 	$password = "marcusrashford";

	 	$connect =strpos($content, $password);

	 	if (empty($connect)) {

	 		echo 'un logged';

	 	} else {

	 		echo 'logged';
	 		echo $connect;

	 	}
	 	
	 }else{

	 	echo 'File dosent exist';
	 }

	include_once 'footer.php';
?>
