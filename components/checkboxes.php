<fieldset>
	<legend class="fieldset-title <?= $engagedCitizenOrInvestor; ?>">select all</legend>

	<div class="fieldsetReplacer-checkboxes <?= $engagedCitizenOrInvestor; ?>">

		<?php if($engagedCitizenOrInvestor === 'engagedCitizen') { ?>
		<div class="checkbox-wrapper">
			<input id="parks" type="checkbox" name="projects" value="parks">
			<label for="parks">Parks</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="public-health" type="checkbox" name="projects" value="public-health">
			<label for="public-health">Public Health</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="care-services" type="checkbox" name="projects" value="care-services">
			<label for="care-services">Care Services</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="housing" type="checkbox" name="projects" value="housing">
			<label for="housing">Housing</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="schools" type="checkbox" name="projects" value="schools">
			<label for="schools">Schools</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="climate-change" type="checkbox" name="projects" value="climate-change">
			<label for="climate-change">Climate Change</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="ngos" type="checkbox" name="projects" value="ngos">
			<label for="ngos">NGOs</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="college" type="checkbox" name="projects" value="college">
			<label for="college">College</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="recycling" type="checkbox" name="projects" value="recycling">
			<label for="recycling">Recycling</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="sports" type="checkbox" name="projects" value="sports">
			<label for="sports">Sports</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="public-spaces" type="checkbox" name="projects" value="public-spaces">
			<label for="public-spaces">Public Spaces</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="clean-water" type="checkbox" name="projects" value="clean-water">
			<label for="clean-water">Clean Water</label>
		</div>

		<?php } else { ?>

		<div class="checkbox-wrapper">
			<input id="ppp" type="checkbox" name="projects" value="ppp">
			<label for="ppp">PPP</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="hospitals" type="checkbox" name="projects" value="hospitals">
			<label for="hospitals">Hospitals</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="transportation" type="checkbox" name="projects" value="transportation">
			<label for="transportation">Transportation</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="housing" type="checkbox" name="projects" value="housing">
			<label for="housing">Housing</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="education" type="checkbox" name="projects" value="education">
			<label for="education">Education</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="urban-development" type="checkbox" name="projects" value="urban-development">
			<label for="urban-development">Urban Development</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="water" type="checkbox" name="projects" value="water">
			<label for="water">Water</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="Green projects" type="checkbox" name="projects" value="Green projects">
			<label for="Green projects">Green Projects</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="water-and-recycling" type="checkbox" name="projects" value="water-and-recycling">
			<label for="water-and-recycling">Water & Recycling</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="energy" type="checkbox" name="projects" value="energy">
			<label for="energy">Energy</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="public-spaces" type="checkbox" name="projects" value="public-spaces">
			<label for="public-spaces">Public Spaces</label>
		</div>

		<div class="checkbox-wrapper">
			<input id="fire-and-police" type="checkbox" name="projects" value="fire-and-police">
			<label for="fire-and-police">Fire & Police</label>
		</div>
		<?php } ?>

	</div>

</fieldset>