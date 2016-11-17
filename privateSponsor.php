<?php
	$especific_css[] = 'privateSponsor';
	require_once('header.php')
?>


<main class="container">
	<h2 class="page-title">Welcome !</h2>

	<p class="title-paragraph">You're almost done! Now I just need a little more information, so we can better attend your needs.</p>

	<form class="signupForm" action="" method="post">

		<div class="container-wrapper">

			<h3 class="fieldset-title">
				Contact
			</h3>

			<div class="select-group">

				<input class="signupForm-input" type="text" placeholder="Your organization" name="organization">

				<input class="signupForm-input" type="text" placeholder="Your title" name="title">

				<input class="signupForm-input" type="text" placeholder="Phone number" name="phone-number">

				<?php
					$states = array('Texas', 'Minessota');
					include('components/city-state.php');
				?>

				<h3 class="fieldset-title">
					Project Information
				</h3>

				<select id="project-type" class="signupForm-input" name="project-type">
					<option value="" disabled selected>Please select an option</option>
					<option value="option-example1">Education</option>
					<option value="option-example2">Health</option>
					<option value="option-example3">Streets</option>
				</select>

				<fieldset class="investmentType-fieldset">

					<div class="signupForm-fieldsetReplacer fieldsetReplacer-privateSponsor">
						
						<input id="investmentType-funding" class="somePrivateProject-information-button investmentType-funding" type="radio" 
						name="somePrivateProject-information" value="greenfield">
						<label class="signupForm-button" for="investmentType-funding">Greenfield</label>

						<input id="investmentType-sponsoring" class="somePrivateProject-information-button investmentType-sponsoring" type="radio" 
						name="somePrivateProject-information" value="brownfield"> 
						<label class="signupForm-button" for="investmentType-sponsoring">Brownfield</label>

						<input id="investmentType-volunteering" class="somePrivateProject-information-button investmentType-volunteering" type="radio" 
						name="somePrivateProject-information" value="mix">
						<label class="signupForm-button" for="investmentType-volunteering">Mix</label>

					</div>

				</fieldset>

				<input class="signupForm-input" type="text" placeholder="Project name" name="project-name">

				<textarea class="textarea-input" name="project-description" id="project-description" placeholder="Please include a brief description of your project"></textarea>

				<h3 class="fieldset-title">
					Financing Information
				</h3>

				<select class="signupForm-input" name="amount-intended-raise">
					<option value="" disabled selected>Amount intended to raise</option>
					<option value="option-example1">100</option>
					<option value="option-example2">1000</option>
					<option value="option-example3">10000</option>
					<option value="option-example3">100000</option>
					<option value="option-example3">1000000</option>
				</select>

				<select class="signupForm-input" name="type-securities">
					<option value="" disabled selected>Type of securities</option>
					<option value="option-example1">Education</option>
					<option value="option-example2">Health</option>
					<option value="option-example3">Streets</option>
				</select>

				<fieldset class="investmentType-fieldset">

					<div class="signupForm-fieldsetReplacer fieldsetReplacer-privateSponsor">
						
						<input id="financingType-borrow" class="somePrivateProject-information-button financingType-funding" type="radio" 
						name="financingType" value="funding" checked>
						<label class="signupForm-button" for="financingType-borrow">Borrow</label>

						<input id="financingType-refinance" class="somePrivateProject-information-button financingType-sponsoring" type="radio" 
						name="financingType" value="sponsoring"> 
						<label class="signupForm-button" for="financingType-refinance">Refinance</label>

						<input id="financingType-mezzanine" class="somePrivateProject-information-button financingType-volunteering" type="radio" 
						name="financingType" value="mezzanine">
						<label class="signupForm-button" for="financingType-mezzanine">Mezzanine</label>

					</div>

				</fieldset>

				<select class="signupForm-input" name="financing-structure">
					<option value="" disabled selected>Financing structure</option>
					<option value="option-example1">Structure 1</option>
					<option value="option-example2">Structure 2</option>
					<option value="option-example3">Structure 3</option>
				</select>

				<input class="signupForm-input" type="text" placeholder="Desired financing closing date	(optional)" name="closing-date">

				<textarea class="textarea-input" name="project-description" id="project-description" placeholder="Please include a brief description of your project"></textarea>

				<?php include('components/agreement.php'); ?>

			</div>

			<button class="signupForm-button privateSponsor-submit" type="submit">Submit</button>

		</div>

	</form>

</main>

<?php require_once('footer.php') ?>