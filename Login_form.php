<?php
	@include 'Configure.php';
	session_start();
	if(isset($_POST['submit'])){
		$name=mysqli_real_escape_string($conn,$_POST['name']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$pass=md5($_POST['password']);
		$cpass=md5($_POST['cpassword']);
		$user_type=$_POST['User_type'];

		$select="SELECT * FROM user_form WHERE email=='$email' && password='$pass' ";
		$result=mysqli_query($conn,$select);

	if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_array($result);
		if($row['User_type']=='admin'){
			$_SESSION['admin_name']=$row['name'];
			header('location:Admin_page.php');
		}
		elseif($row['User_type']=='user'){
			$_SESSION['user_name']=$row['name'];
			header('location:User_page.php');
		}
		else{
			$error[]='Incorrect email or password';
		}
	
	};
?> 


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="Style1.css">
</head>
<body>
	<div class="form-container2">
	<form action="" method="post">
		<h3>Login Now</h3>
		<?php
			if(isset($error)){
				foreach($error as $error){
					echo '<span class="error-msg">'.$error.'</span>';
				}
			}
		?>
		<input type="text" name="email" required placeholder="Enter your email">
		<input type="text" name="password" required placeholder="Enter your password">
		<a href="index.html"><input type="submit" value="Login now" class="form-btn"></a>
		<p> Don't have an account ?<a href="Register_form.php">Register_now</a></p>
	</form>
</div></body></html>