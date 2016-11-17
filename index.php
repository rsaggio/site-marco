<?php 
	$especific_css[] = 'index';
	$background_class = 'index-cover';
	$especific_header = 'index';
	$lightOrDark = 'light';
	require_once('header.php');
?>

<main>
	<div class="container">
		<section class="mosaic">

			<div class="mosaic-item engage-community">
				<a href="about.php">
					<span class="align-text">
						Engage in your community  and improve your life
					</span>
				</a>
			</div>
			<div class="mosaic-item wind-sun"></div>
			<div class="mosaic-item raise-capital">
				<a href="raisecapital.php">
					<span class="align-text">
						Raise Capital
					</span>
				</a>
			</div>
			<div class="mosaic-item solar-powerplant"></div>
			<div class="mosaic-item water-plant"></div>
			<div class="mosaic-item invest">
				<a href="invest.php">
					<span class="align-text">
						Invest
					</span>
				</a>
			</div>
			<div class="mosaic-item bike-lane"></div>
			<div class="mosaic-item impact-investing">
				<a href="takeaction.php">
					<span class="align-text">
						Impact Investing
					</span>
				</a>
			</div>
			<div class="mosaic-item train"></div>
			<div class="mosaic-item consultancy">
				<a href="helpfinancing.php">
					<span class="align-text">
						Consultancy
					</span>
				</a>
			</div>
			<div class="mosaic-item alone-guy"></div>

		</section>

		<a class="button learnHow-button" href="#">Learn How</a>
	</div>

	<section class="join-now">
		<div class="container">
			<p class="join-now-text">
				Undrland is currently in development and we are launching pilot projects in a few selected locations  ready to experience the future of energy, education, infrastructure and urban developmet financing.  Join <strong>our community</strong> to learn more.
			</p>

			<div class="join-now-contact">
				<input class="signupForm-input" type="email" name="join-email" placeholder="Your email address here">
				<button class="button learnHow-button joinNow-button" type="button">Join Now</button>
			</div>
		</div>

	</section>
	
</main>


<?php
	$isLanding = true;
	require_once('footer.php');
?>
