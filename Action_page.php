<?php
	@include 'Configure.php';
	session_start();
	if(isset($_POST['submit'])){
		$name=mysqli_real_escape_string($conn,$_POST['name']);
		$gender=mysqli_real_escape_string($conn,$_POST['gender']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);

		$select="SELECT * FROM form_db WHERE email=='$email' && password='$gender' ";
		$result=mysqli_query($conn,$select);
	
	};
?> 