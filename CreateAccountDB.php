<?php
	error_reporting(0);
	
	$fname = $_POST['first'];
	$lname = $_POST['last'];
	$ge = $_POST['gender'];
	$phn = $_POST['phone'];
	$email = $_POST['mail'];
	$userid = $_POST['user'];
	$userpass = $_POST['pass'];
	$usercon = $_POST['con'];
	
	$h = mysqli_connect("localhost","root","");
	mysqli_select_db($h,"xyz");
	
	if($fname == '')
	{
		header("Location:CreateAccount.php?p=1");
	}
	else
	{
		if($lname == '')
		{
			header("Location:CreateAccount.php?q=1");
		}
		else
		{
			if($ge == '')
			{
				header("Location:CreateAccount.php?r=1");
			}
			else
			{
				if($phn == '')
				{
					header("Location:CreateAccount.php?s=1");
				}
				else
				{
					if($email == '')
					{
						header("Location:CreateAccount.php?t=1");
					}
					else
					{
						if($userid == '')
						{
							header("Location:CreateAccount.php?u=1");
						}
						else
						{
							if($userpass == '')
							{
								header("Location:CreateAccount.php?v=1");
							}
							else
							{
								if($usercon == '')
								{
									header("Location:CreateAccount.php?w=1");
								}
								else
								{
									if($userpass == $usercon)
									{
										$q = "INSERT INTO create_acc (first_name, last_name, gender, mobile, email, user, password) VALUES ('$fname', '$lname', '$ge', $phn, '$email', '$userid', '$userpass')";
										mysqli_query($h,$q);
										
										mysqli_close($h);
										header("Location:index.php?c=1");
									}
									else
									{
										header("Location:CreateAccount.php?d=1");
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
