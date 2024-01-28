<?php
	error_reporting(0);
	$u = $_POST['user'];
	$p = $_POST['pass'];
	$flag = 0;
	
	$h = mysqli_connect("localhost","root","","");
	mysqli_select_db($h,"xyz");
	$q = "select * from create_acc";
	$r = mysqli_query($h,$q);
	while($a = mysqli_fetch_array($r))
	{
		if($a[5] == $u and $a[6] == $p)
		{
			$flag = 1;
		}	
	}
	if($flag == 1)
	{
		session_start();
		$_SESSION['username']=$u;
		$_SESSION['password']=$p;
		header("Location:SessionLogin.php");
	}
	else
	{
		header("location:index.php?a=1");
	}
	mysqli_close($h);
?>
