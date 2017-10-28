<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" href="Style3.css">
</head>

<body>
	<?php
if(isset($_SESSION['u_id'])){
	echo "signupsucesful";
	echo ' <form action="include/logout.inc.php" method="POST">
           <button type="submit" name="submit">Logout</button>
           </form>';
}else{
	echo '<p> signup unsucessful</p>';
	
}
?>
</body>
</html>