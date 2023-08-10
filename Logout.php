<?php
	@include 'Configure.php';
	session_start();
	session_unset();
	session_destroy();

	header('location:Login_form.php');
?>