<html
<head>
<title>Create Account</title>
</head>
<body>

<center>
<form action="CreateAccountDB.php" method="post">
<font size=6><b>Create Account</b></font><p>
First Name : <input type="text" name="first"><p>
Last Name  : <input type="text" name="last"><p>
Gender     :    Male<input type="radio" name="gender" value="Male">
				Female<input type="radio" name="gender" value="Female">
				Others<input type="radio" name="gender" value="Others"><p>
Phone No.  : <input type="number" name="phone"><p>
E-mail Id  : <input type="email" name="mail"><p>
Username   : <input type="username" name="user"><p>
Password   : <input type="password" name="pass"><p>
Confirm Password : <input type="password" name="con"><p>
<input type="submit" value="Sign Up">
<input type="reset" value="Reset"><p>

<?php
	if(isset($_GET['d']))
	{
		echo "<font color='red'><b>Confirm the password</b></font>";
	}
?>

</form>
</center>
</body>
</html>