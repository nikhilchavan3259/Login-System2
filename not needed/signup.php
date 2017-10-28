<?php
	include_once 'header.php';
?>


<section class="main-container">
	<div class="main-wrapper">
		<h1>Sign Up</h1>
		<form class="signup-form" action="include/signup.inc.php" method="post">
			<input type="text" name="first" placeholder="First_Name">
			<input type="text" name="last" placeholder="Last_Name">
			<input type="text" name="add" placeholder="Address">
			<input type="text" name="branch" placeholder="Branch">
			<input type="text" name="city" placeholder="City">
			<input type="text" name="station" placeholder="Station">
			<input type="text" name="cast" placeholder="Cast">
			<input type="datetime" name="dob" placeholder="DOB">
			<input type="text" name="email" placeholder="E-mail">
			<input type="number" name="uid" placeholder="PRN_No">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">Sign Up</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
