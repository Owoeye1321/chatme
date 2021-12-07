<?php
session_start();
if (isset($_SESSION['login_voters_username']) && isset($_SESSION['login_voters_username'])) {
	 session_unset();
    session_destroy();
    header("Location:new_log.php");
}elseif (isset($_SESSION['login_contestant_username']) && isset($_SESSION['login_contestant_username'])) {
	 session_unset();
    session_destroy();
    header("Location:new_log.php");
}else{
	 header("Location:new_log.php");
}



?>