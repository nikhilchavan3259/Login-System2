<?php

if(isset($_POST['submit'])){
	session_start();
	session_unset();
	session_destroy();
	header("Refresh:0; url= ../Loginform.php?logout=successful");
	echo '<script>alert("Logout successful")</script>';
	exit();
}