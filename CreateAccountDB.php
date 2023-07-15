<?php
	//error_reporting(0);
	
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
	
	if($userpass == $usercon)
	{
		$q = "insert into create_acc values('".$fname."','".$lname."','".$ge."',".$phn.",'".$email."','".$userid."','".$userpass."')";
		mysqli_query($h,$q);
	
		mysqli_close($h);
		header("Location:index.php?c=1");
	}
	else
	{
		header("Location:CreateAccount.php?d=1");
	}
?>