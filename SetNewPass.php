<?php
	
	if(isset($_GET['o']))
	{
		$sotp = $_GET['o'];
		echo "<center>";
		$h = mysqli_connect("localhost","root","","");
		mysqli_select_db($h,"xyz");
		$q = "select user from create_acc where otp = '$sotp'";
		$r = mysqli_query($h,$q);
		$row = mysqli_fetch_assoc($r);
		$un = $row['user'];
		echo "<font size=5>Hello, <b>$un</b></font>";	
	}	
?>

<html>
<title>New Password</title>
<body>
<center>
<font size=4><b>Setup New Password</b></font><p>
	<form action ="SetNewPassDB.php" method="post">
	<input type="hidden" name="username" value="<?php echo $un; ?>">
	<input type="hidden" name="otppass" value="<?php echo $sotp; ?>">
	New Password : <input type="password" name="setnewpass"><p>
	Confirm Password : <input type="password" name="setconpass"><p>
	<input type="submit" value="Set Password">
	</form>

</body>
</html>

<?php
	if(isset($_GET['k']))
	{
		echo "<font color='red'><b>Enter New password</b></font>";
	}
?>

<?php
	if(isset($_GET['n']))
	{
		echo "<font color='red'><b>Confim the Password</b></font>";
	}
?>