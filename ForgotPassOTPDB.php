<?php
	
	error_reporting(0);
	
	$set = $_POST['setotp'];
	$f = 0;
	
	$h = mysqli_connect("localhost","root","","");
	mysqli_select_db($h,"xyz");
	$q = "select * from create_acc";
	$r = mysqli_query($h,$q);
	while($a = mysqli_fetch_array($r))
	{
		if($a[7] == $set)
		{
			$f = 1;
		}	
	}
	if($f == 1)
	{
		header("Location:SetNewPass.php?o=$set");
	}
	else
	{
		header("Location:ForgotPassOTP.php?j=1");
	}

	mysqli_close($h);
	
?>