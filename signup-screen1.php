<?php
	$especific_css[] = 'signup';
	require_once('header.php');
?>


<main class="container">
	<h2 class="page-title">Hi!</h2>

	<p class="title-paragraph">This is the step to change your life and your community. Please tell us about you, so we can better attend yout needs.</p>

	<form class="signupForm" action="" method="post">

		<fieldset>
			<legend class="fieldset-title">I am...</legend>
			
			<div class="signupForm-fieldsetReplacer">
				
				<input id="clientType-investor" class="clientType-investor" type="radio" name="clientType" value="investor" checked>
				<label class="signupForm-button" for="clientType-investor">Investor</label>

				<input id="clientType-engagedCitizen" class="clientType-engagedCitizen" type="radio" name="clientType" value="engaged-citizen"> 
				<label class="signupForm-button" for="clientType-engagedCitizen">Engaged Citizen</label>

				<input id="clientType-privateSponsor" class="clientType-privateSponsor" type="radio" name="clientType" value="private-sponsor">
				<label class="signupForm-button" for="clientType-privateSponsor">Private Sponsor</label>

				<input id="clientType-publicSponsor" class="clientType-publicSponsor" type="radio" name="clientType" value="public-sponsor">
				<label class="signupForm-button" for="clientType-publicSponsor">Public Sponsor</label>

			</div>

		</fieldset>

		<div class="container-wrapper">
			<fieldset class="signupForm-personalInfo">

				<input class="signupForm-input input-half" type="text" placeholder="First name" name="personalInformation-firstName"><!--
				--><input class="signupForm-input input-half" type="text" placeholder="Last name" name="personalInformation-lastName">

				<input class="signupForm-input" type="email" placeholder="Email" name="personalInformation-email">

				<input class="signupForm-input" type="password" placeholder="Password (8 characters min. with at least 1 number and 1 letter" name="personalInformation-password">
				<input class="signupForm-input" type="password" placeholder="Password confirmation" name="personalInformation-passwordConfirmation">

			</fieldset>

			<fieldset class="hearAboutUs-fieldset">

				<legend class="hearAboutUs-fieldset-legend">How did you hear about us?</legend>
				<select class="signupForm-input" name="hear-aboutUs">
					<option value="" disabled selected>Please select an option</option>
					<option value="option-example1">Option example1</option>
					<option value="option-example2">Option example2</option>
					<option value="option-example3">Option example3</option>
				</select>
				
			</fieldset>

			<div class="submit-or-login">
				<span class="already-member">
					Already a member?
					<a href="#">Sign in here!</a>
				</span>
				<button class="signupForm-button standard-button" type="submit">Create account</button>
			</div>
		</div>

	</form>


</main>

<?php require_once('footer.php') ?>