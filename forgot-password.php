<?php 
	$especific_css[] = 'login';
	require_once('header.php');
?>

<main class="container login">
	<h2 class="login-title">Welcome back!</h2>
	<h3 class="login-subtitle">Please reset your new password below!</h3>

	<form action="" method="post">
		<input class="signupForm-input" type="password" name="temporary-password" placeholder="Temporary Password">

		<input class="signupForm-input" type="password" name="login-password" placeholder="Password (8 characters min. with at least 1 number and 1 letter)">
		<input class="signupForm-input" type="password" name="temporary-password" placeholder="Password Confirmation">

		<button class="signupForm-button loginButton" stype="submit">Submit</button>
	</form>

</main>


<?php require_once('footer.php'); ?>