<?php 
	$especific_css[] = 'login';
	$lightOrDark = 'light';
	require_once('header.php');
?>

<main class="container login">
	<h2 class="login-title">Welcome back!</h2>
	<h3 class="login-subtitle">Please enter your details below!</h3>

	<form action="" method="post">
		<input class="signupForm-input" type="email" name="login-email" placeholder="Email">
		<input class="signupForm-input" type="password" name="login-password" placeholder="Password (8 characters min. with at least 1 number and 1 letter)">

		<button class="signupForm-button loginButton" stype="submit">Log in</button>
	</form>

	<section class="forgot-password">
		<h4>
			<span>Forgot your Password?</span>
			<span>Click <a href="forgot-password.php">here</a> and we will send you</span>
			<span>a temporary password</span>
		</h4>
	</section>

</main>


<?php require_once('footer.php'); ?>