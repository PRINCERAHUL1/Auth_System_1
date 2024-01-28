<?php
	
	error_reporting(0);
	$result='';
	function generateOTP($length = 5)
	{
    $otp = '';
		for ($i = 0; $i < $length; $i++)
		{
			$otp .= rand(0, 9);
		}
	return $otp;
	}
	
	$vm = $_POST['vmail'];
	$flag = 0;
	
	$h = mysqli_connect("localhost","root","","");
	mysqli_select_db($h,"xyz");
	$q = "select * from create_acc";
	$r = mysqli_query($h,$q);
	while($a = mysqli_fetch_array($r))
	{
		if($a[4] == $vm)
		{
			$flag = 1;
		}	
	}
	if($flag == 1)
	{
		$genotp = generateOTP();
		$q = "update create_acc set otp=".$genotp." where email='".$vm."' ";
		mysqli_query($h,$q);
		echo "<script>";
		echo "alert('An OTP Sent');";
		echo "</script>";
		echo "<meta http-equiv='refresh' content='0;url=ForgotPassOTP.php'>";
	}
	else
	{
		header("Location:ForgotPass.php?i=1");
	}

	mysqli_close($h);
	
?>