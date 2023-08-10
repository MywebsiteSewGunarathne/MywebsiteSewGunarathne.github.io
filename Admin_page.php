<?php
	@include 'Configure.php';
	session_start();
	if(!isset($_SESSION['admin_name'])){
		header('location:Login_form.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="Style1.css">
</head>
<body>
	<div class="container4">
	<div class="content4">
		<h1>Hi,<span>Admin</span></h1>
		<h3>Welcome</h3>
		<?php
			echo $_SESSION['admin_name'];
			?>
		<a href="Login_form.php" class="btn">LOGIN</a>
		<a href="Register_form.php" class="btn">REGISTER</a>
		<a href="Logout.php" class="btn">LOGOUT</a>
	</div>
</div>
</body>
</html>