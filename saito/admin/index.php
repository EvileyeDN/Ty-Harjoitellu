<?php
if (isset ($_POST['AddAdmin'])) {
	global $conn;
	
	$email =$_POST['emailpol'];
	
	$conn->query("UPDATE users SET yes = '1' WHERE email = '".$email."'");
}

if (isset ($_POST['DeletAdmin'])) {
	global $conn;
	
	$email =$_POST['emailpol'];
	
	$conn->query("UPDATE users SET yes = ' ' WHERE email = '".$email."'");	
}
	header("Location: /saito/index.php?act=cab");
	?>