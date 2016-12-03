<?php
/*Author: Alex Ball
 *This page allows contacts to be added to a database. This database is
 *used to show a list of contacts on the contacts page.
 *
 *This page is dependant on:
 *includes/functions.php
 *includes/contact-form-validation.php
 *includes/portfolio-header.html
 *../secure-includes/portfolio-contacts-database-connection.php
 *../secure-includes/portfolio-add-contact.php
 *includes/contact-form-main.php
 *includes/portfolio-footer.html
 */

//This part enables errors.
ini_set(‘display_errors’, 1);
error_reporting(E_ALL);

//list of functions
require('includes/functions.php');

//If this is the first time the page is viewed, then
//only the contact form will be shown, and the title of
//the page will just be Contact Form.
$title = 'Alex Ball\'s Portfolio - Contact Form';
$header = 'Add a Contact';
$submitted = false;

//submissions are assumed valid until found invalid.
$successfulSubmission = true;

//check if a submission was made.
if (isset($_POST['submit']))
{
	$submitted = true;
	
	//initially setting variables to empty strings.
	$contactFormFName = '';
	$contactFormLName = '';
	$contactFormEmailAddress = '';
	$contactFormPhoneNumber = '';
	$contactFormCompany = '';
	$contactFormJobTitle = '';
	$contactFormDateMet = '';
	$contactFormWhereMet = '';
	$contactFormNotes = '';
	
	//submission validation and information variable assignment.
	require('includes/contact-form-validation.php');
	
	//if a submission was made, AND the submission is valid,
	//then this page will show a summary and link to the
	//contacts page, and the title will be
	//Contact Submission Successful.
	if ($successfulSubmission)
	{
		$title = 'Alex Ball\'s Portfolio - Contact Submission Successful';
		//$header = 'Contact Information Submitted';
	}
}


?>

<!DOCTYPE HTML>
<!--
	Author: Alex Ball
	This website is meant to represent my project portfolio.
	This form allows for contacts to be added to the table on the contacts page.
	
	template attribution:
		Alpha by HTML5 UP
		html5up.net | @n33co
		Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	end attribution
-->



<html>
	<head>
		<title><?php print($title); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		
		<!-- My stylesheet -->
		<link rel="stylesheet" href="includes/portfolio.css" />
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Page Header -->
			<header id="header">
				<?php @include('includes/portfolio-header.html'); ?>
			</header> <!-- End Header -->
			
			<!-- Main -->
			<section id="main" class="container">
				<!-- Content Header -->
				<header>
					<h2><?php print($header); ?></h2>
				</header> <!-- End Content Header -->
				
				<?php
				//Summary print and add contact to database
				//if a submission was made and was valid.
				if ($submitted && $successfulSubmission)
				{
					print('<div class="box">');
					
					//add user to database.
					require('../secure-includes/portfolio-contacts-database-connection.php');
					require('../secure-includes/portfolio-add-contact.php');
					
					//summary print.
					print('<h3>Summary of successful contact submission information:</h3>');
					print("<p><strong>First name:</strong> $contactFormFName</p>");
					print("<p><strong>Last name:</strong> $contactFormLName</p>");
					print ("<p><strong>Email address:</strong> $contactFormEmailAddress</p>");
					if (!empty($contactFormPhoneNumber))
					{
						print("<p><strong>Phone number:</strong> $contactFormPhoneNumber</p>");
					}
					if (!empty($contactFormCompany))
					{
						print("<p><strong>Company:</strong> $contactFormCompany</p>");
					}
					if (!empty($contactFormJobTitle))
					{
						print("<p><strong>Job title:</strong> $contactFormJobTitle</p>");
					}
					if (!empty($contactFormDateMet))
					{
						print('<p><strong>Date met:</strong> ' . date("m-d-Y", strtotime($contactFormDateMet)) . '</p>');
					}
					if (!empty($contactFormWhereMet))
					{
						print("<p><strong>Where met:</strong> $contactFormWhereMet</p>");
					}
					if (!empty($contactFormNotes))
					{
						print("<p><strong>Notes:</strong> $contactFormNotes</p>");
					}
					
					//link to the contacts list
					print('<p><a href="contacts.php" class="button">Check contacts list</a></p>');
					
					print('</div>');
				}
				
				//display the form
				require('includes/contact-form-main.php');
				?>
			</section> <!-- End Main -->

			<!-- Page Footer -->
			<?php @include('includes/portfolio-footer.html'); ?> <!-- End Footer -->

		</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/jquery.scrollgress.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>

	</body>
</html>