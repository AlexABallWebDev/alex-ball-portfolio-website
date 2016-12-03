<?php
/*
 *Author: Alex Ball
 *This script defines several functions to be used in other pages/scripts.
 *
 *This script is intended to be included in:
 *contact-form.php
 *
 */

//functions

//clean removes whitespace and html tags.
function clean($text)
{
	$text = trim($text);
	//strip html tags, including php tags. preventing injection.
	$text = strip_tags($text);
	return $text;
}

//email validation function. checks for at least one period
//and exactly one at symbol.
function is_valid_email_address($email_address)
{
	//cleans, then removes illegal characters
	$email_address = clean($email_address);
	$email_address = filter_var($email_address, FILTER_SANITIZE_EMAIL);
	
	//if the email address is not valid, throw an error.
	if (!filter_var($email_address, FILTER_VALIDATE_EMAIL))
	{
		print '<p class="invalid_input">Invalid input: email address is invalid.</p>';
		return false;
	}
	else
	{
		return true;
	}
}

//phone number validation function; due to issues with validating phone
//numbers (dashes, international phone numbers, extensions) I decided
//to use simple validation; the number needs to be formatted as a 10
//digit number (no dashes/ext.). This is accomplished by checking for
//numbers with only 10 digit numbers.
function is_valid_phone_number($phone_number)
{
	//clean before validation
	$phone_number = clean($phone_number);
	
	//if the phone number is not valid, throw an error.
	if (!is_numeric($phone_number)
			|| (is_float($phone_number))
			|| (strlen($phone_number) != 10))
	{
		print '<p class="invalid_input">Invalid input: phone number is invalid.</p>';
		return false;
	}
	else
	{
		return true;
	}
}

//function for preparing data for the database. single quotation marks
//are added for SQL syntax when the value should not be null. This is done so that
//no column gets assigned the string "NULL" instead of NULL. Created for
//adding contact data to the database using the contact form page.
function prepare_db_data($cnxn, $data)
{
	if (empty($data))
	{
		$preparedData = 'NULL';
	}
	else
	{
		$preparedData = mysqli_real_escape_string($cnxn, $data);
		$preparedData = '\'' . $preparedData . '\'';
	}
	return $preparedData;
}
//end functions
