<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="Style1.css">
</head>
<body>
	<div class="main">
		<div class="main1">
		
		</div>
		<div class="main2">
		
		</div>
		<div class="main3">
			<form action="include/change.inc.php" method="post">
				<h6>Welcome!</h6>
				<p align="center">Change Password</p><br>
				<input type="text" id="prn" name="uid" placeholder="PRN_No" required autofocus><br>
				<input type="text" id="prn" name="email" placeholder="Enter Grandfather Name" required><br>
                <input type="password" id="prn" name="pwd" placeholder="Enter new password" required autofocus><br>
				<button type="Change" id="submit" name="submit">
Change</button>
			</form><br><br>
		</div>
	</div>
</body>
</html>