<div class="two-inputs">
	<div class="half-input-with-label">
		<label for="city">City</label>
		<input id="city" class="signupForm-input" type="text" placeholder="Enter city" name="city">
	</div>
	<div class="half-input-with-label">
		<label for="state">State</label>
		<select id="state" class="signupForm-input" name="state">
			<option value="" disabled selected>Please select an option</option>
			<?php foreach ($states as $state) { ?>
				<option value="<?= $state; ?>"><?= $state; ?></option>
			<?php }?>
		</select>
	</div>
</div>