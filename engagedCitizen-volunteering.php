<?php
	$especific_css[] = 'engagedCitizen';
	require_once('header.php');
?>

<main class="container">
	<h2 class="page-title">Welcome !</h2>

	<p class="title-paragraph">You're almost done! Now I just need a little more information, so we can better attend your needs.</p>

	<form class="signupForm" action="" method="post">

		<div class="container-wrapper">

			<h3 class="fieldset-title">
				I am interested in this type of projects...
			</h3>

			<?php 
				$engagedCitizenOrInvestor = 'engagedCitizen';
				include('components/checkboxes.php');
			?>

			<fieldset class="investmentType-fieldset">
				<legend class="fieldset-title">I am looking for...</legend>

				<div class="signupForm-fieldsetReplacer">

					<input id="investmentType-funding" class="investmentType-button investmentType-funding" type="radio" 
					name="investmentType" value="funding">
					<label class="signupForm-button" for="investmentType-funding">Funding</label>

					<input id="investmentType-sponsoring" class="investmentType-button investmentType-sponsoring" type="radio" 
					name="investmentType" value="sponsoring"> 
					<label class="signupForm-button" for="investmentType-sponsoring">Sponsoring</label>

					<input id="investmentType-volunteering" class="investmentType-button investmentType-volunteering" type="radio" 
					name="investmentType" value="volunteering" checked>
					<label class="signupForm-button" for="investmentType-volunteering">Volunteering</label>

				</div>

			</fieldset>


			<div class="select-group">

				<label for="address">Address</label>
				<input id="address" class="signupForm-input" type="text" placeholder="Enter address" name="address">

				<?php
					$states = array('Texas', 'Minessota');
					include('components/city-state.php');
				?>

				<div class="two-inputs">

					<div class="half-input-with-label">
						<label for="zipcode">Zip Code</label>
						<input class="signupForm-input" type="text" placeholder="Enter zip code" name="zipcode">
					</div>
					<div class="half-input-with-label">
						<button class="signupForm-button engagedCitizen-submit" type="submit">Submit</button>
					</div>
				</div>
			</div>

		</div>

	</div>

</form>


</main>

<?php require_once('footer.php') ?>
