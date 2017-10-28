<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="Style1.css">
</head>
<body>
	<div class="main">
		<div class="main1">
		
		</div>
		<div class="main2">
		
		</div>
		<div class="main3">
			<form action="include/login.inc.php" method="post">
				<h6>Welcome!</h6>
				<p align="center">Login Here</p><br>
				<input type="text" id="prn" name="uid" placeholder="PRN_No" required autofocus autocomplete="off"><br>
				<input type="password" id="pwd" name="pwd" placeholder="Password" required autocomplete="off"><br>
				<a href="changepassword.php">Forgot Password ?&nbsp;&nbsp;&nbsp;</a><br>
				<button type="submit" id="submit" name="submit">Login</button>
			</form><br><br>
			<a class="signup" href="Signup1.php">Sign Up</a>
		</div>
	</div>
	
</body>
</html>
