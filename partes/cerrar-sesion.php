<?php 
	session_start();
	session_unset("session_username"); 
	header('location: ../index.php');
 ?>