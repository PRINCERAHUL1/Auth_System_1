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
	if(isset($_GET['p']))
	{
		echo"<font color='red'><b>Enter First name</b></font>";
	}
	else
	{
		if(isset($_GET['q']))
		{
			echo"<font color='red'><b>Enter Last name</b></font>";
		}
		else
		{
			if(isset($_GET['r']))
			{
				echo"<font color='red'><b>Entry your Gender</b></font>";
			}
			else
			{
				if(isset($_GET['s']))
				{
					echo"<font color='red'><b>Enter Phone no.</b></font>";
				}
				else
				{
					if(isset($_GET['t']))
					{
						echo"<font color='red'><b>Enter Email</b></font>";
					}
					else
					{
						if(isset($_GET['u']))
						{
							echo"<font color='red'><b>Enter Userid</b></font>";
						}
						else
						{
							if(isset($_GET['v']))
							{
								echo"<font color='red'><b>Enter Password</b></font>";
							}
							else
							{
								if(isset($_GET['w']))
								{
									echo"<font color='red'><b>Confirm Password</b></font>";
								}
								else
								{
									if(isset($_GET['d']))
									{
										echo "<font color='red'><b>Confirm the password</b></font>";
									}
								}
							}
						}
					}
				}
			}
		}
	}
?>
</form>
</center>
</body>
</html>
