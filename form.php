<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'joshuavillorin.com/assignment5-villorin-joshua' // Put you mail domain here
	,
	'Joshua Villorin Portfolio' // Put your site name / form name here
	,
	'Villorin.J@ufl.edu' // Where will the form notification be sent?
	,
	'noreply@joshuavillorin.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
