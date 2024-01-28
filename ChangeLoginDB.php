<?php
	error_reporting(0);
	session_start();
	if(isset($_SESSION['username']))
	{
		$us = $_SESSION['username'];
		$ps = $_SESSION['password'];
	}
	$curpass = $_POST['curpass'];
	$newpass = $_POST['newpass'];
	$conpass = $_POST['conpass'];
	$h = mysqli_connect("localhost","root","");
	mysqli_select_db($h,"xyz");
	if($curpass == $ps)
	{
		if($newpass == '' || $curpass == $newpass)
		{
			header("Location: ChangeLogin.php?e=1");
		}
		else
		{
			if($newpass == $conpass)
			{
				$q = "update create_acc set password='".$newpass."' where user='".$us."' ";
				header("Location: SessionLogin.php?g=1");
			}
			else
			{
				header("Location: ChangeLogin.php?f=1");
			}
		}
	}
	else
	{
		header("Location: ChangeLogin.php?d=1");
	}
	mysqli_query($h,$q);
	mysqli_close($h);
?>
