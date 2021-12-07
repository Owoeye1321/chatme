<?php

 require 'apc.php';
	$myfile = fopen("apc_con/apc_con.txt","r+");
	$size = filesize("apc_con/apc_con.txt");
	echo fread($myfile,$size)."\n";
	
 ?>