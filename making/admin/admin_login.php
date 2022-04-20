<?php

include '../form/config.php';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Admin</p>
			<div class="input-group">
				<input type="text" placeholder="username" name="AdminName"  required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="AdminPassword" required>
			</div>
			<div class="input-group">
				<button name="Signin" class="btn" type="submit">Sign In</button>
			</div>
			
			
		</form>
	</div>
</body>
</html>
<?php 

if(isset($_POST['Signin'])){
	$query = "select * from admin_log where admin_name ='$_POST[AdminName]' && admin_pass='$_POST[AdminPassword]'";
	$result = mysqli_query($conn,$query);

	if(mysqli_num_rows($result)==1){
		echo "<script>alert('welcome to admin panel')</script>";
		header("Refresh:0; admin_panel.php");
	}
	else{
		echo "<script>alert('username or password is incorrect')</script>";
	}
}


?>
