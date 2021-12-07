<?php
require 'apga.php';
	$myfile = fopen("apga_con/apga_con.txt","r+");
	$size = filesize("apga_con/apga_con.txt");
	echo fread($myfile,$size)."\n";
 ?>