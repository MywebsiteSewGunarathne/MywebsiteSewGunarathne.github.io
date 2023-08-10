<?php
	@include 'Configure.php';
	session_start();
	if(isset($_POST['submit'])){
		$message=mysqli_real_escape_string($conn,$_POST['message']);

		$select="SELECT * FROM form_db WHERE message=='$message'";
		$result=mysqli_query($conn,$select);
	
	};
?> 