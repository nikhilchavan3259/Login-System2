 <?php
session_start();
include 'dbh.inc.php';
$uid=mysqli_real_escape_string($conn,$_POST['uid']);
$security=mysqli_real_escape_string($conn,$_POST['email']);
$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	$sql = "SELECT * FROM user2 WHERE user_uid='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck < 1){
			header("Refresh:0; url= ../changepassword.php?change=error");
			echo '<script>alert("Error in changing a password")</script>';
			exit();
		}
		else{
			if($row = mysqli_fetch_assoc($result)){
				if ($uid==$row['user_uid'] && $security==$row['user_security']) {
					$sql = "UPDATE user2 SET user_pwd ='$hashedPwd' WHERE user_uid='$uid'";
			mysqli_query($conn, $sql);
			header("Refresh:0; url= ../Loginform.php?change=success");
			echo '<script>alert("Password is change")</script>';
			exit();
				}else{
					header("Refresh:0; url= ../changepassword.php?change=incorrectdata");
			echo '<script>alert("PRN No or Email not match")</script>';
			exit();

				}

			}else{
				header("Refresh:0; url= ../changepassword.php?change=error");
			echo '<script>alert("Error")</script>';
			exit();
			}

		}