<?php
	error_reporting(0);
	session_start();
	if(isset($_SESSION['username']))
	{
		$ud = $_SESSION['username'];
	}
	$h = mysqli_connect("localhost","root","");
	mysqli_select_db($h,"xyz");
	$q = "delete from create_acc where user='".$ud."' ";
	header("Location: index.php?h=1");
	mysqli_query($h,$q);
	mysqli_close($h);
	//echo"<META HTTP-EQUIV='Refresh' CONTENT='2; URL=http://localhost/PHP Files/demo1.php'>"
?>