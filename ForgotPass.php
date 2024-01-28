<html>
<title>Forgot Password</title>
<body>
<center>
<form action ="ForgotPassDB.php" method="post">
	<font size=5><b>Forgot Password</b></font><p>
	<font size=4><b>Verify Email</b></font><p>
	Enter E-mail Id: <input type="email" name="vmail" ><p>
	<input type="submit" value="Forgot Password" onclick="return sent();">
	</form>
</body>
</html>

<?php
	if(isset($_GET['i']))
	{
		echo "<font color='red'><b>Email Not Verified</b></font>";
	}
?>