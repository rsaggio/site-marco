<?php
	$especific_css[] = 'signup-investor';
	require_once('header.php');
?>

<main class="container">
	<h2 class="page-title">Welcome !</h2>

	<p class="title-paragraph">You're almost done! Now I just need a little more information, so we can better attend your needs.</p>

	<form class="signupForm" action="" method="post">
		
		<div class="container-wrapper">

			<h3 class="fieldset-title fieldset-title-withInputs">
				I am 
				<input class="input-insideText insideText-age" type="text" name="client-age">
				years old, my zipcode is 
				<input class="input-insideText insideText-zipcode" type="text" name="client-zipcode">
				, and I am interessed in...
			</h3>

			<?php
				$engagedCitizenOrInvestor = 'investor';
				include('components/checkboxes.php');
			?>

			<div class="select-group">
				<label for="signupForm-select" class="signupForm-select-label">I am willing to invest</label>
				<select id="signupForm-select" class="signupForm-input" name="wantsToInvest">
					<option value="" disabled selected>Please select an option</option>
					<option value="option-example1">Education</option>
					<option value="option-example2">Health</option>
					<option value="option-example3">Streets</option>
				</select>

				<label for="signupForm-select" class="signupForm-select-label">I expect to have a return of</label>
				<select id="signupForm-select" class="signupForm-input" name="wantsToInvest">
					<option value="" disabled selected>Please select an option</option>
					<option value="option-example1">Education</option>
					<option value="option-example2">Health</option>
					<option value="option-example3">Streets</option>
				</select>

				<label for="early-incomeIs">My early income is</label>
				<input id="early-incomeIs" class="signupForm-input" type="text" placeholder="Enter ammount" name="early-income">

				<label for="signupForm-select" class="signupForm-select-label">Have you invested in collaborative financing?</label>
				<select id="signupForm-select" class="signupForm-input" name="wantsToInvest">
					<option value="" disabled selected>Please select an option</option>
					<option value="option-example1">Education</option>
					<option value="option-example2">Health</option>
					<option value="option-example3">Streets</option>
				</select>

				<label for="signupForm-select" class="signupForm-select-label">Does having an impact in your country through investment  is important for you?</label>
				<select id="signupForm-select" class="signupForm-input" name="wantsToInvest">
					<option value="" disabled selected>Please select an option</option>
					<option value="option-example1">Education</option>
					<option value="option-example2">Health</option>
					<option value="option-example3">Streets</option>
				</select>
			</div>

			<button class="signupForm-button investor" type="submit">Submit</button>

		</div>

	</form>


</main>

<?php require_once('footer.php') ?>