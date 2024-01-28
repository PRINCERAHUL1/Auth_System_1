<html>
<title>Forgot Password</title>
<body>
<center>
<font size=5><b>Forgot Password</b></font><p>
	<form action ="ForgotPassOTPDB.php" method="post">
<font size=4><b>Verify OTP</b></font><p>
	Enter OTP: <input type="number" name="setotp"><p>
	<input type="submit" value="Verify">
	</form>
</body>
</html>

<?php
	if(isset($_GET['j']))
	{
		echo "<font color='red'><b>OTP incorrect</b></font>";
	}
?>