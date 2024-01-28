<?php
	session_start();
	if(isset($_SESSION['username']))
	{
		echo "<center>";
		$f=$_SESSION['username'];
		echo "<font size=5>Welcome <b>$f</b></font>";
?>

<html>
<title>Logged in</title>
<body>
<p>
	<form action="ChangeLogin.php" method="post">
		<input type="submit" value="Change Password">
	</form>
	<p>
	<form action="SessionLogout.php" method="post">
		<input type="submit" value="Log Out">
	</form>
	<form action="DeleteAccount.php" method="post" onclick="return CheckDelete();">
		<input type="submit" value="Delete Account">
	</form>
</body>
</html>

<?php
	if(isset($_GET['g']))
	{
		echo "<font color='green'><b>Password Changed</b></font>";
	}
?>

<!-- Using JS pop up message to warn for sure to delete account once-->
<script>
	function CheckDelete()
	{
		return confirm("Are you sure want to delete your Account ?");
	}
</script>
