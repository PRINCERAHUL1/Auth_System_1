<?php
	//error_reporting(0);
	session_start();
	if(isset($_SESSION['username']))
	{
		$ub = $_SESSION['username'];
		$pb = $_SESSION['password'];
	}
?>

<html>
<title>Change Login</title>
<body>

<center>
<font size=6><b>Changing Password</b></font><p>
	<form action ="ChangeLoginDB.php" method="post">
	<div>
	Current Password : <input type="password" name="curpass"><p>
	New Password : <input type="password" name="newpass"><p>
	Confirm Password : <input type="password" name="conpass"><p>
	<input type="submit" value="Update">
	</form>
</body>
</html>

<?php
	if(isset($_GET['d']))
	{
		echo "<font color='red'><b>Current Password Incorrect</b></font>";
	}
?>

<?php
	if(isset($_GET['e']))
	{
		echo "<font color='red'><b>Enter New password</b></font>";
	}
?>

<?php
	if(isset($_GET['f']))
	{
		echo "<font color='red'><b>Confim the Password</b></font>";
	}
?>