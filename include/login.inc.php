<?php
session_start();
date_default_timezone_set('Asia/Kolkata'); 
include_once 'dbh.inc.php';

if(isset($_POST['uid']) && isset($_POST['pwd']) ){
	
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	
	if( empty($uid) || empty($pwd)){
		
		header("Refresh:0; url= ../Loginform.php?login=empty");
		echo '<script>alert("Fill out empty fileds")</script>';
		exit();
	} else {
		$sql = "SELECT * FROM user2 WHERE user_uid='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck < 1){
			header("Refresh:0; url= ../Loginform.php?login=error");
			echo '<script>alert("Error in login")</script>';
			exit();
		} else {
			if($row = mysqli_fetch_assoc($result)){	
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if($hashedPwdCheck == false){
					header("Refresh:0; url= ../Loginform.php?login=error");
					echo '<script>alert("Incorrect password")</script>';
					exit();
				} elseif($hashedPwdCheck == true){
					 $_SESSION['u_id']=$row['user_id'];
					 $_SESSION['u_first']=$row['user_first'];
					 $_SESSION['u_last']=$row['user_last'];
					 $_SESSION['u_add']=$row['user_add'];
					 $_SESSION['u_branch']=$row['user_branch'];
					 $_SESSION['u_year']=$row['user_year'];
					 $_SESSION['u_city']=$row['user_city'];
					 $_SESSION['u_station']=$row['user_station'];
					 $_SESSION['u_cast']=$row['user_cast'];
					 $_SESSION['u_dob']=$row['user_dob'];
					 $_SESSION['u_email']=$row['user_email'];
					 $_SESSION['u_uid']=$row['user_uid'];
					 $_SESSION['u_registerdate']=$row['user_registerdate'];
					 $_SESSION['u_passtakendate']=$row['user_passtakendate'];
					 $_SESSION['u_passexpiraydate']=$row['user_passexpiraydate'];
					 $_SESSION['u_pclass']=$row['user_pclass'];
					 $_SESSION['u_pperiod']=$row['user_pperiod'];
					header("Location: ../period.php?login=sucess");
					
					exit();
				}
				
			}else{
						header("Refresh:0; url= ../Loginform.php?login=error");
                     	echo '<script>alert("PRN no and password not match")</script>';
				}
		}
	}
	
} else {
	header("Refresh:0; url= ../Loginform.php?login=error");
	echo '<script>alert("Error in login")</script>';
}