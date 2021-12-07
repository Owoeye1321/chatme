<?php
require 'nupeng.php';
	$myfile = fopen("nupeng_con/nupeng_con.txt","r+");
	$size = filesize("nupeng_con/nupeng_con.txt");
	echo fread($myfile,$size)."\n";
 ?>