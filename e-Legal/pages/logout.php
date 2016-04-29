<?php
	session_start();
	$_SESSION = array();
	session_unset();
	session_destroy();
	echo "<script type='text/javascript'>
			window.location.href='http://localhost:81/e-Legal/';
			</script>";
	exit();	
?>