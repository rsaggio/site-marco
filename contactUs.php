<?php 
	$especific_css[] = 'login';
	$lightOrDark = 'light';
	require_once('header.php');
?>

<main class="container login">
	<h2 class="login-title">Contact us!</h2>
	<h3 class="login-subtitle">We would love to hear from you!</h3>

	<form class="contactUs-form" action="" method="post">
		<input class="signupForm-input" type="text" name="user-name" placeholder="Nome">

		<input class="signupForm-input" type="email" name="user-email-again" placeholder="Email">
		<textarea class="signupForm-textarea" name="user-email-body">Type your thoughts, question, comments, feedback or anything you would like to share with us here!</textarea>

		<button class="signupForm-button loginButton" stype="submit">Submit</button>
	</form>

</main>


<?php require_once('footer.php'); ?>
