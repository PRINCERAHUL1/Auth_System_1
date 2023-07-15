<html>
<head>
<title>Login Page</title>
</head>
<body>

<form action="LoginPageDB.php" method="post">
<center>
<font size=6><b>Authentication System</b></font><p>
		<b><u>LOGIN</u></b><p>
		Username : <input type="text" name="user"><p>
		Password : <input type="password" name="pass"><p>
		<input type="submit" value="Sign in">
		<input type="reset" value="Reset"><p><br>
		Don't have an account ?
		<a href="CreateAccount.php">CREATE ACCOUNT</a><p>
		
<?php
	if(isset($_GET['a']))
	{
		echo "<font color='red'><b>Invalid Username/Password</b></font>";
	}
?>

<?php
	if(isset($_GET['b']))
	{
		echo "<font color='#CBC80B'><b>User Logged Out</b></font>";
	}
?>

<?php
	if(isset($_GET['c']))
	{
		echo "<font color='green'><b>Account Created</b></font>";
	}
?>
	
<?php
	if(isset($_GET['h']))
	{
		echo "<font color='#5202D5'><b>Account Deleted</b></font>";
	}
?>
	
</form>
</body>
</html>