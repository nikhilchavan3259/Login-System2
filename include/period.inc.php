<?php
session_start();
date_default_timezone_set('Asia/Kolkata'); 
include_once 'dbh.inc.php';

if(isset($_POST['passclass']) && isset($_POST['passperiod']) ){
	$dta=date('Y/m/d');
	$expdt=$_SESSION['u_passexpiraydate'];
	$d1=strtotime($dta);
	$d2=strtotime($expdt);
	$diff=$d1-$d2;
	$day=abs(floor($diff/(60*60*24)));
	if ($d1>$d2 || $_SESSION['u_passexpiraydate']==$_SESSION['u_passtakendate']) {
	$uid=$_SESSION['u_uid'];
	$pclass = mysqli_real_escape_string($conn, $_POST['passclass']);
	$pperiod= mysqli_real_escape_string($conn, $_POST['passperiod']);
	$sql = "SELECT * FROM user2 WHERE user_uid='$uid';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
											
		if($resultCheck < 1){
	   header("Refresh:0; url= ../period.php?period=errorinrun");
	   echo '<script>alert("Error")</script>';
		exit();
		} 
		else{
			$uid=$_SESSION['u_uid'];
			$pclass = mysqli_real_escape_string($conn, $_POST['passclass']);
			$pperiod= mysqli_real_escape_string($conn, $_POST['passperiod']);
			$date1=date('Y/m/d');
			if ($pperiod == 'Monthly') {
				$expdate=date('Y/m/d', strtotime(" +1 months"));
			}
			else{
				$expdate=date('Y/m/d', strtotime(" +3 months"));
			}
			$sql = "UPDATE user2 SET user_passtakendate = '$date1', user_passexpiraydate = '$expdate' WHERE user_uid='$uid'";
			mysqli_query($conn, $sql);
			$sql = "UPDATE user2 SET user_pclass = '$pclass', user_pperiod = '$pperiod' WHERE user_uid='$uid'";
			mysqli_query($conn, $sql);
			$sql = "SELECT * FROM user2 WHERE user_uid='$uid';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
											
		if($resultCheck < 1){
	   header("Refresh:0; url= ../period.php?period=errorinrun");
	   echo '<script>alert("Error")</script>';
		exit();
		} else{
			if($row = mysqli_fetch_assoc($result)){
			 	 	 $_SESSION['u_registerdate']=$row['user_registerdate'];
					 $_SESSION['u_passtakendate']=$row['user_passtakendate'];
					 $_SESSION['u_passexpiraydate']=$row['user_passexpiraydate'];
					 $_SESSION['u_pclass']=$row['user_pclass'];
					 $_SESSION['u_pperiod']=$row['user_pperiod'];
					}
		      	header("Refresh:0; url= ../printout.php?period=sucess");
		      	echo '<script>alert("Period and class is selected")</script>';
		      			exit();
		     }

		}
	 }
	 else{
          
	 	
	  
	 	header("Refresh:0; url= ../period.php?period=passisnotexpire");
	 	echo '<script>alert("Pass not expire days remaining "+'.$day.')</script>';
		exit();
	 }
   }
else{
	header("Refresh:0; url= ../period.php?period=error");
	echo '<script>alert("Error")</script>';
		exit();
}
