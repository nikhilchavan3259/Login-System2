<?php
session_start();
date_default_timezone_set('Asia/Kolkata'); 

if(isset($_POST['submit'])){

	include_once 'dbh.inc.php';
	
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$add = mysqli_real_escape_string($conn, $_POST['add']);
	$branch = mysqli_real_escape_string($conn, $_POST['branch']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$station = mysqli_real_escape_string($conn, $_POST['station']);
	$cast = mysqli_real_escape_string($conn, $_POST['cast']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $security = mysqli_real_escape_string($conn, $_POST['security']);
    
	
	if(empty($first) || empty($last) || empty($add) || empty($branch) || empty($year) || empty($city) || empty($station) || empty($cast) || empty($dob) || empty($email) || empty($uid) || empty($pwd) || empty($security) ){
		header("Refresh:0; url= ../Signup1.php?Signup=empty");
		echo '<script>alert("Fill out empty fields ")</script>';
		exit();
	} else {
		if(!preg_match("/^[a-zA-Z ]*$/", $first)){
			header("Refresh:0; url= ../Signup1.php?Signup=InvalidFirstName");
			echo '<script>alert("First name is invalid")</script>';
			exit();
		} else {
			if(!preg_match("/^[a-zA-Z ]*$/", $last)){
				header("Refresh:0; url= ../Signup1.php?Signup=InvalidLastName");
				echo '<script>alert("Last name is invalid")</script>';
				exit();
			} else {
				if(!preg_match("/\b[-a-z0-9+&@#\/%?=~_|!-:,.;]/i", $add)){
					header("Refresh:0; url= ../Signup1.php?Signup=InvalidAddress");
					echo '<script>alert("Adress is invalid")</script>';
					exit();
				} else{
					if(!preg_match("/^[a-zA-Z ]*$/", $branch)){
						header("Refresh:0; url= ../Signup1.php?Signup=InvalidBranch");
						echo '<script>alert("Branch name is invalid")</script>';
						exit();
					} else {
                        if(!preg_match("/^[a-zA-Z ]*$/", $year)){
						header("Refresh:0; url= ../Signup1.php?Signup=InvalidYear");
						echo '<script>alert("Year is invalid")</script>';
						exit();
                    } else {
						if(!preg_match("/^[a-zA-Z ]*$/", $city)){
							header("Refresh:0; url= ../Signup1.php?Signup=InvalidCity");
							echo '<script>alert("City name is invalid")</script>';
							exit();
						} else {
							if(!preg_match("/^[a-zA-Z ]*$/", $station)){
								header("Refresh:0; url= ../Signup1.php?Signup=InvalidStation");
								echo '<script>alert("Station name is invalid")</script>';
								exit();
							} else {
								if(!preg_match("/^[a-zA-Z ]*$/", $cast)){
									header("Refresh:0; url= ../Signup1.php?Signup=InvalidCaste");
									echo '<script>alert("Caste is invalid")</script>';
									exit();
								} else {
									if(!preg_match("/^[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]*$/", $dob)){
										header("Refresh:0; url= ../Signup1.php?Signup=InvalidDOB");
										echo '<script>alert("DOB is invalid")</script>';
										exit();
									} else {
										if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
											header("Refresh:0; url= ../Signup1.php?Signup=InvalidEmail");
											echo '<script>alert("Email is invalid")</script>';
											exit();
										} else {
											if(!preg_match("/^[0-9]*$/", $uid)){
									            header("Refresh:0; url= ../Signup1.php?Signup=InvalidCaste");
									             echo '<script>alert("PRN no is invalid")</script>';
									             exit();
								           } else {
											$sql = "SELECT * FROM user2 WHERE user_uid='$uid'";
											$result = mysqli_query($conn, $sql);
											$resultCheck = mysqli_num_rows($result);
											
											if($resultCheck > 0){
												header("Refresh:0; url= ../Signup1.php?Signup=UserTaken");
												echo '<script>alert("This user is already register")</script>';
												exit();
											} else {
												$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
												$sql = "INSERT INTO user2 (user_first, user_last, user_add, user_branch, user_year, user_city, user_station, user_cast, user_dob, user_email, user_uid, user_pwd, user_security) VALUES ('$first', '$last', '$add', '$branch', '$year', '$city', '$station', '$cast', '$dob', '$email', '$uid', '$hashedPwd', '$security');";
												mysqli_query($conn, $sql);
												$date = date('Y/m/d H:i:s');
												$sql = "UPDATE user2 SET user_registerdate = '$date' WHERE user_uid='$uid'";
												mysqli_query($conn, $sql);
												header("Refresh:0; url= ../Loginform.php?Signup=Success");
												echo '<script>alert("Signup sucessful")</script>';
												exit();
												
											}
										}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
}
	
} else {
	header("Location: ../Signup1.php");
	exit();
}
?>