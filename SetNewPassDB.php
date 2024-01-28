<?php
	
	//error_reporting(0);
	$uname = $_POST['username'];
	$gotp = $_POST['otppass'];
	$newpassset = $_POST['setnewpass'];
	$conpassset = $_POST['setconpass'];
	$h = mysqli_connect("localhost","root","");
	mysqli_select_db($h,"xyz");
		if($newpassset == '')
		{
			header("Location: SetNewPass.php?k=1&o=$gotp");
		}
		else
		{
			if($newpassset == $conpassset)
			{
				$q = "update create_acc set password='".$newpassset."' where user='".$uname."' ";
				mysqli_query($h,$q);
				mysqli_close($h);
				header("Location: index.php?l=1");
			}
			else
			{
				header("Location:SetNewPass.php?n=1&o=$gotp");
			}
		}
?>