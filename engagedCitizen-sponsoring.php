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
					name="investmentType" value="funding" checked>
					<label class="signupForm-button" for="investmentType-funding">Funding</label>

					<input id="investmentType-sponsoring" class="investmentType-button investmentType-sponsoring" type="radio" 
					name="investmentType" value="sponsoring"> 
					<label class="signupForm-button" for="investmentType-sponsoring">Sponsoring</label>

					<input id="investmentType-volunteering" class="investmentType-button investmentType-volunteering" type="radio" 
					name="investmentType" value="volunteering">
					<label class="signupForm-button" for="investmentType-volunteering">Volunteering</label>

				</div>

			</fieldset>

			<div class="select-group">
			
				<label for="kindOfProject" class="signupForm-select-label">What kind of project?</label>
				<select id="kindOfProject" class="signupForm-input" name="kindOfProject">
					<option value="" disabled selected>Please select an option</option>
					<option value="option-example1">School</option>
					<option value="option-example2">College</option>
					<option value="option-example3">Something else</option>
				</select>

				<input id="projectName" class="signupForm-input" type="text" placeholder="Project name" name="projectName">

				<textarea class="textarea-input" name="projectDescription" placeholder="Please include a brief description of your project"></textarea>

				<label for="totalAmmount-lookingFor">The total amount I’m looking for is….</label>
				<input id="totalAmmount-lookingFor" class="signupForm-input" type="text" placeholder="Enter ammount" name="totalAmmount-lookingFor">

				<fieldset class="investmentType-fieldset question">
					<legend class="fieldset-title">Have you develope any social and/or civic project in your community ?</legend>


					<div class="signupForm-fieldsetReplacer">
						<input id="hasDevelopedProjectBefore" class="investmentType-button" type="radio" 
						name="developedProjectBefore" value="developed"> 
						<label class="signupForm-button" for="hasDevelopedProjectBefore">Yes</label>

						<input id="haventDevelopedProjectBefore" class="investmentType-button" type="radio" 
						name="developedProjectBefore" value="notDeveloped">
						<label class="signupForm-button" for="haventDevelopedProjectBefore">No</label>
					</div>
				</fieldset>

				<label for="howManyProjects-3years">How many projects have you done in the past three years?</label>
				<input id="howManyProjects-3years" class="signupForm-input" type="text" placeholder="Enter whole numbers only" name="howManyProjects-3years">

				<label for="need-volunteers">Do you need volunteers?</label>
				<input id="need-volunteers" class="signupForm-input" type="text" placeholder="Enter whole numbers only" name="need-volunteers">

				<fieldset class="investmentType-fieldset question">
					<legend class="fieldset-title">Partnership with Public Agencies</legend>


					<div class="signupForm-fieldsetReplacer">
						<input id="partnershipYes" class="investmentType-button" type="radio" 
						name="partnership" value="partnership-yes"> 
						<label class="signupForm-button" for="partnershipYes">Yes</label>

						<input id="partnershipNo" class="investmentType-button" type="radio" 
						name="partnership" value="partnership-no">
						<label class="signupForm-button" for="partnershipNo">No</label>
					</div>
				</fieldset>

				<label for="address">Address</label>
				<input id="address" class="signupForm-input" type="text" placeholder="Enter address" name="address">

				<?php
					$states = array('Texas', 'Minessota');
					include('components/city-state.php');
				?>

				<div class="input-left">
					<label for="zipcode">Zip Code</label>
					<input class="signupForm-input input-half" type="text" placeholder="Enter zip code" name="zipcode">
				</div>

				<?php include('components/agreement.php'); ?>

			</div>

			<button class="signupForm-button engagedCitizen" type="submit">Submit</button>

		</div>

	</form>

</main>

<?php require_once('footer.php') ?>