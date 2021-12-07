<?php
require 'nuc.php';
	$myfile = fopen("nuc_con/nuc_con.txt","r+");
	$size = filesize("nuc_con/nuc_con.txt");
	echo fread($myfile,$size)."\n";
 ?>