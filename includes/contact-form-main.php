<?php
/*
 *Author: Alex Ball
 *This partial page is the form for the contact-form.php page.
 *This form is sticky, and will maintain information in its
 *fields if there is an invalid submission.
 *
 *This script is intended to be included in:
 *contact-form.php
 *
 */
?>
<div class="box">
	<h3>Enter contact information</h3>
	<p>Required information is marked with an asterisk: <span class="required-asterisk">*</span></p>
	
	<!--  Form area   -->
	<!--novalidate attribute set in order to prevent html5 validation.-->
	<!--intentionally ommitting the action attribute; this results in submitting to the same page.-->
	<form class="form-horizontal" novalidate="novalidate" method="post">
		<!-- Contact Fname and Lname (Required Information) -->
		<div class="row uniform 50%">
			<div class="6u 12u(mobilep)">
				<label for="contactFormFName">First Name<span class="required-asterisk">*</span></label>
				<?php //error message if fname is empty
				if ($submitted && empty($contactFormFName))
				{
					print('<p class="form-error">First Name field cannot be empty.</p>');
				}
				?>
				<input type="text" id="contactFormFName" name="contactFormFName" maxlength="30" placeholder="First Name"
						<?php if (!$submitted) { print('autofocus="autofocus" '); } ?>value="<?php
						if (!empty($contactFormFName))
						{
							print($contactFormFName);
						} ?>" />
			</div>
			<div class="6u 12u(mobilep)">
				<label for="contactFormLName">Last Name<span class="required-asterisk">*</span></label>
				<?php //error message if lname is empty
				if ($submitted && empty($contactFormLName))
				{
					print('<p class="form-error">Last Name field cannot be empty.</p>');
				}
				?>
				<input type="text" id="contactFormLName" name="contactFormLName" maxlength="30" placeholder="Last Name"
						value="<?php
						if (!empty($contactFormLName))
						{
							print($contactFormLName);
						} ?>" />
			</div>
		</div> <!-- End Contact Fname and Lname (Required Information) -->
		
		<!-- Contact Email Address (Required Information) and Phone Number -->
		<div class="row uniform 50%">
			<div class="6u 12u(mobilep)">
				<label for="contactFormEmailAddress">Email Address <span class="required-asterisk">*</span></label>
				<?php //error message for if email is empty or invalid.
				if ($submitted && empty($contactFormEmailAddress))
				{
					print('<p class="form-error">Email Address field cannot be empty.</p>');
				}
				else if ($submitted && isset($invalidContactFormEmailAddress))
				{
					print('<p class="form-error">Invalid email address. Valid email addresses contain an
								@ symbol and at least one period. (example: professional@example.com)</p>');
				}
				?>
				<input type="email" id="contactFormEmailAddress" name="contactFormEmailAddress" maxlength="50"
						placeholder="Email Address" value="<?php
						if (!empty($contactFormEmailAddress))
						{
							print($contactFormEmailAddress);
						} ?>" />
			</div>
			<div class="6u 12u(mobilep)">
				<label for="contactFormPhoneNumber">Phone Number</label>
				<input type="text" id="contactFormPhoneNumber" name="contactFormPhoneNumber" maxlength="30"
						placeholder="0123456789" value="<?php
						if (!empty($contactFormPhoneNumber))
						{
							print($contactFormPhoneNumber);
						} ?>" />
			</div>
		</div> <!-- End Contact Email Address (Required Information) and Phone Number -->
		
		<!-- Contact Company and Job Title -->
		<div class="row uniform 50%">
			<div class="6u 12u(mobilep)">
				<label for="contactFormCompany">Company</label>
				<input type="text" id="contactFormCompany" name="contactFormCompany" maxlength="50"
						placeholder="Company" value="<?php
						if (!empty($contactFormCompany))
						{
							print($contactFormCompany);
						} ?>" />
			</div>
			<div class="6u 12u(mobilep)">
				<label for="contactFormJobTitle">Job Title</label>
				<input type="text" id="contactFormJobTitle" name="contactFormJobTitle" maxlength="50"
						placeholder="Job Title" value="<?php
						if (!empty($contactFormJobTitle))
						{
							print($contactFormJobTitle);
						} ?>" />
			</div>
		</div> <!-- End Contact Company and Job Title   -->
		
		<div class="row uniform 50%"> <!-- Contact Date Met   -->
			<div class="12u">
				<label for="contactFormDateMet">Date Met</label>
				<input type="date" id="contactFormDateMet" name="contactFormDateMet" value="<?php
						if (!empty($contactFormDateMet))
						{
							print($contactFormDateMet);
						} ?>" />
			</div>
		</div> <!-- End Contact Date Met   -->
		
		<!-- Contact Where Met -->
		<div class="row uniform 50%">
			<div class="12u">
				<div class="select-wrapper">
					<label for="contactFormWhereMet">Where Met</label>
					<?php //error checking for spoofing here.
					if ($submitted && isset($invalidContactWhereMet))
					{
						print('<p class="form-error">Invalid location.</p>');
					}
					?>
					<select id="contactFormWhereMet" name="contactFormWhereMet">
						<option value="not selected">- Click here to select where the contact was met -</option>
						<option value="School" <?php
								if (!empty($contactFormWhereMet) && $contactFormWhereMet == 'School')
								{
									print('selected="selected"');
								} ?>>School</option>
						<option value="Meetup" <?php
								if (!empty($contactFormWhereMet) && $contactFormWhereMet == 'Meetup')
								{
									print('selected="selected"');
								} ?>>Meetup</option>
						<option value="Tech Club" <?php
								if (!empty($contactFormWhereMet) && $contactFormWhereMet == 'Tech Club')
								{
									print('selected="selected"');
								} ?>>Tech Club</option>
						<option value="Pokemon Event" <?php
								if (!empty($contactFormWhereMet) && $contactFormWhereMet == 'Pokemon Event')
								{
									print('selected="selected"');
								} ?>>Pokemon Event</option>
						<option value="Other" <?php
								if (!empty($contactFormWhereMet) && $contactFormWhereMet == 'Other')
								{
									print('selected="selected"');
								} ?>>Other</option>
					</select>
				</div>
			</div>
		</div> <!-- End Contact Where Met -->
		
		<!-- Contact Notes -->
		<div class="row uniform 50%">
			<div class="12u">
				<label for="contactFormNotes">Notes</label>
				<textarea name="contactFormNotes" id="contactFormNotes"  maxlength="500"
						placeholder="Notes" rows="3"><?php
						if (!empty($contactFormNotes))
						{
							print($contactFormNotes);
						} ?></textarea>
			</div>
		</div> <!-- End Contact Notes -->
		
		<!-- Submit Button -->
		<div class="row uniform">
			<div class="12u">
				<ul class="actions">
					<li><input type="submit" value="Submit Contact Information" name="submit" /></li>
				</ul>
			</div>
		</div> <!-- End Submit Button -->
	</form> <!-- End form area   -->
</div>