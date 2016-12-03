<?php
/*
 *Author: Alex Ball
 *This script validates the data from contact-form.php
 *The $successfulSubmission variable will be set to false if
 *there are any issues with the data.
 *
 *This script is intended to be included in:
 *contact-form.php
 *
 *This script is dependent on:
 *functions.php
 */

/*
	print('<pre>');
	print_r($_POST);
	print('</pre>');
	
	$_POST list of variables
	[contactFormFName] =>
	[contactFormLName] => 
	[contactFormEmailAddress] => 
	[contactFormCompany] => 
	[contactFormJobTitle] => 
	[contactFormPhoneNumber] => 
	[contactFormDateMet] => 
	[contactFormWhereMet] => 
	[contactFormNotes] => 
	[submit] => Submit Contact Information
*/

//fname validation. fname is required, so submission fails if empty.
if (empty($_POST['contactFormFName']))
{
	$successfulSubmission = false;
}
else
{
	$contactFormFName = clean($_POST['contactFormFName']);
}

//lname validation. lname is required, so submission fails if empty.
if (empty($_POST['contactFormLName']))
{
	$successfulSubmission = false;
}
else
{
	$contactFormLName = clean($_POST['contactFormLName']);
}

//email validation. email is required, so submission fails if empty
//OR the email address is not valid (no @ or period in the address).
if (empty($_POST['contactFormEmailAddress']))
{
	$successfulSubmission = false;
}
//if not empty, but not valid, assign variable anyway for form stickyness
else if (!is_valid_email_address($_POST['contactFormEmailAddress']))
{
	$successfulSubmission = false;
	$invalidContactFormEmailAddress = true;
	//clean and remove illegal characters.
	$contactFormEmailAddress = clean($_POST['contactFormEmailAddress']);
	$contactFormEmailAddress = filter_var($contactFormEmailAddress, FILTER_SANITIZE_EMAIL);
}
else
{
	$contactFormEmailAddress = clean($_POST['contactFormEmailAddress']);
	$contactFormEmailAddress = filter_var($contactFormEmailAddress, FILTER_SANITIZE_EMAIL);
}

//as the following data are not required, most of them are just assigned
//to a variable here if they are not empty. WhereMet is validated
//against spoofing, since it is a dropdown list.

//Phone number; I used to validate this, but decided that I would rather
//allow flexible phone number formats, so I just use phone number as a string.
if (!empty($_POST['contactFormPhoneNumber']))
{
	$contactFormPhoneNumber = clean($_POST['contactFormPhoneNumber']);
}

//company
if (!empty($_POST['contactFormCompany']))
{
	$contactFormCompany = clean($_POST['contactFormCompany']);
}

//job title
if (!empty($_POST['contactFormJobTitle']))
{
	$contactFormJobTitle = clean($_POST['contactFormJobTitle']);
}

//date met
if (!empty($_POST['contactFormDateMet']))
{
	$contactFormDateMet = clean($_POST['contactFormDateMet']);
}

//where met; validation to make sure that the selected location (if any)
//is actually on the form dropdown list.
if (isset($_POST['contactFormWhereMet']) && $_POST['contactFormWhereMet'] != 'not selected')
{
	$contactFormValidLocations = array('School', 'Meetup', 'Tech Club', 'Pokemon Event', 'Other');
	//if spoofing has occurred, then this submission is invalid.
	if (!in_array($_POST['contactFormWhereMet'], $contactFormValidLocations))
	{
		$successfulSubmission = false;
		$invalidContactFormWhereMet = true;
	}
	else
	{
		$contactFormWhereMet = $_POST['contactFormWhereMet'];
	}
}

//notes
if (!empty($_POST['contactFormNotes']))
{
	$contactFormNotes = clean($_POST['contactFormNotes']);
}
