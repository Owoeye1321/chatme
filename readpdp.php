<?php
require 'pdp.php';
	$myfile = fopen("pdp_con/pdp_con.txt","r+");
	$size = filesize("pdp_con/pdp_con.txt");
	echo fread($myfile,$size)."\n";
 ?>