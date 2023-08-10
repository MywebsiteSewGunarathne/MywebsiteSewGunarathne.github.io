<?php
	@include 'Configure.php';
	if(isset($_POST['submit'])){
		$name=mysqli_real_escape_string($conn,$_POST['name']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$pass=md5($_POST['password']);
		$cpass=md5($_POST['cpassword']);
		$user_type=$_POST['User_type'];

		$select="SELECT * FROM user_form WHERE email=='$email' && password='$pass' ";
		$result=mysqli_query($conn,$select);

	if(mysqli_num_rows($result)>0){
		$error[]='user already exist!';
		}
	else{
		if($pass!=pass){
			$error[]='password not matched!';
		}
		else{
			$insert="INSERT INTO user_form(name,email, password, User_type) VALUES('$name','$email','$pass','$user_type')";
			mysqli_query($conn,$insert);
			header('location:Login_form.php');
		}
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
		<h3>Register Now</h3>
				<?php
			if(isset($error)){
				foreach($error as $error){
					echo '<span class="error-msg">'.$error.'</span>';
				}
			}
		?>
		<input type="text" name="name" required placeholder="Enter your name">
		<input type="text" name="email" required placeholder="Enter your email">
		<input type="text" name="password" required placeholder="Enter your password">
		<input type="text" name="cpassword" required placeholder="Confirm your email">
		<select name="User_type">
			<option value="user"> User</option>
			<option value="admin">Admin</option>
		</select>
		<input type="submit" value="Register now" class="form-btn">
		<p> Already have an account ?<a href="Login_form.php">Login_now</a></p>
	</form>
</div></body></html>