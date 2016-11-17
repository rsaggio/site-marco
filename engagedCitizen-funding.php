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

					<label for="typeOfFunding" class="signupForm-select-label">Which type of funding are you interested in participating?</label>
					<select id="typeOfFunding" class="signupForm-input" name="typeOfFunding">
						<option value="" disabled selected>Please select an option</option>
						<option value="option-example1">Education</option>
						<option value="option-example2">Health</option>
						<option value="option-example3">Streets</option>
					</select>

					<label for="funding-totalAmmount">The total amount I’m looking for to fund is….</label>
					<input id="funding-totalAmmount" class="signupForm-input" type="text" placeholder="Enter ammount" name="funding-totalAmmount">

			</div>	

			<fieldset class="investmentType-fieldset question">
				<legend class="fieldset-title">Are you interested in being a volunteer for social projects in your community?</legend>


				<div class="signupForm-fieldsetReplacer">
					<input id="investmentType-foundedProject" class="investmentType-button" type="radio" 
					name="hasFoundedProject" value="founded"> 
					<label class="signupForm-button" for="investmentType-foundedProject">Yes</label>

					<input id="investmentType-didntFoundProject" class="investmentType-button" type="radio" 
					name="hasFoundedProject" value="notFounded">
					<label class="signupForm-button" for="investmentType-didntFoundProject">No</label>
				</div>
			</fieldset>

			<fieldset class="investmentType-fieldset question">
				<legend class="fieldset-title">Are you interested in being a volunteer for social projects in your community?</legend>


				<div class="signupForm-fieldsetReplacer">
					<input id="investmentType-beVolunteer" class="investmentType-button" type="radio" 
					name="wantsToBeVolunteer" value="volunteer"> 
					<label class="signupForm-button" for="investmentType-beVolunteer">Yes</label>

					<input id="investmentType-dontBeVolunteer" class="investmentType-button" type="radio" 
					name="wantsToBeVolunteer" value="notVolunteer">
					<label class="signupForm-button" for="investmentType-dontBeVolunteer">No</label>
				</div>
			</fieldset>

			<button class="signupForm-button engagedCitizen" type="submit">Submit</button>

		</div>

	</form>


</main>

<?php require_once('footer.php') ?>