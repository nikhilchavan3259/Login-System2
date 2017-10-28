<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="Style2.css">
</head>
<body>
	<div class="main">
		<div class="main1">
		
		</div>
		<div class="main2">
		
		</div>
		<div class="main3">
			<form action="include/signup.inc.php" method="post">
				<p>Sign Up</p>
				<input type="text" id="first" name="first" placeholder="First_Name" autocomplete="off" autofocus><br>
				<input type="text" id="last" name="last" placeholder="Last_Name" autocomplete="off"><br>
				<input type="text" id="add" name="add" placeholder="Address" autocomplete="off"><br>
				<input type="text" id="branch" name="branch" placeholder="Branch" autocomplete="off"><br>
                <input type="text" id="year" name="year" placeholder="Year(FE,SE,TE AND BE)" autocomplete="off"><br>
				<input type="text" id="city" name="city" placeholder="City" autocomplete="off"><br>
				<input type="text" id="station" name="station" placeholder="Nearest Station" autocomplete="off"><br>
				<input type="text" id="cast" name="cast" placeholder="Cast" autocomplete="off"><br>
				<input type="text" id="dob" name="dob" placeholder="DOB" autocomplete="off" onfocus="(this.type='date')"><br>
				<input type="text" id="email" name="email" placeholder="E-mail" autocomplete="off"><br>
				<input type="text" id="prn" name="uid" placeholder="PRN_No" maxlength="9" autocomplete="off"><br>
				<input type="password" id="pwd" name="pwd" placeholder="Password" autocomplete="off"><br>
                <input type="text" id="security" name="security" placeholder="Enter Grandfather Name" autocomplete="off"><br>
                <button type="submit" id="signup" name="submit">Sign Up</button><br>
			</form>
		</div>
	</div>
	
</body>
</html>
