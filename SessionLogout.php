<?php

session_start();

if(isset($_SESSION['username']))
{
	session_destroy();
	header("Location: index.php?b=1");
}
?>
