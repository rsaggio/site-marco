<?php 
	$especific_css[] = 'login';
	$especific_css[] = 'profile';

	require_once('header.php');
?>

<main class="container login">
	<h2 class="login-title">Welcome back!</h2>
	<h3 class="login-subtitle">
		We are under implementation phase, and working hard to share  some good news with you soon! Meanwhile we are  accepting projects to help you raise capital. Please stay in touch!
	</h3>

	<section class="actions">
		<ul class="actions-list">

			<li class="actions-list-item card-invest">
				<a href="#">
					<h4 class="card-title">Invest</h4>

					<span class="card-footer soon">Coming soon</span>
				</a>
			</li>

			<li class="actions-list-item card-impactInvesting">
				<a href="#">
					<h4 class="card-title">Impact Investing</h4>

					<span class="card-footer soon">Coming soon</span>
				</a>
			</li>

			<li class="actions-list-item card-raiseCapital">
				<a href="#">
					<h4 class="card-title">Raise Capital</h4>

					<span class="card-footer active">Submit Project</span>
				</a>
			</li>

		</ul>
	</section>

</main>


<?php require_once('footer.php'); ?>