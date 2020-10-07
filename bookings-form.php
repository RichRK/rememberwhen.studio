<?php

// Server details are defined as constants here.

define( 'HOST', 'localhost' );
define( 'USERNAME', 'remelppc_webfacing' );
define( 'PASSWORD', 'nuZSQvYvSUSRBveZU4XOwqDtAE1PZF' );
define( 'DATABASE', 'remelppc_rememberwhen' );

// Local server details:

// define( 'HOST', 'localhost' );
// define( 'USERNAME', 'root' );
// define( 'PASSWORD', '' );
// define( 'DATABASE', 'rememberwhentest' );

define( 'CHARSET', 'utf8' );




// Error reporting. Set 'display_errors' to 0 on a live server.

error_reporting( E_ALL );

ini_set( 'display_errors', 0 );




// Validate user input before proceeding.

validateUserInput();

function validateUserInput() {

	// Variables from POST are defined here.

	$primary_name = validationLogic( $_POST["name1"] );
	$partner_name =  validationLogic( $_POST["name2"] );
	$email = validationLogic( $_POST["email"] );
	$email2 = validationLogic( $_POST["email2"] );
	$phone = validationLogic( $_POST["phone"] );
	$day = validationLogic( $_POST["day"] );
	$month = validationLogic( $_POST["month"] );
	$year =  validationLogic( $_POST["year"] );
	$venue =  validationLogic( $_POST["venue"] );
	$venue2 =  validationLogic( $_POST["venue2"] );
	$misc = validationLogic( $_POST["miscellaneous"] );

	// Pass these validated strings to the connection function.

	connection( $primary_name, $partner_name, $email, $email2, $phone, $day, $month, $year, $venue, $venue2, $misc );
}




// We initiate a connection to the MySQL server using PDO.
// POST values are accessed and inserted into a SQL statement.

function connection( $primary_name, $partner_name, $email, $email2, $phone, $day, $month, $year, $venue, $venue2, $misc ) {

	$connection = new PDO(

		sprintf( 'mysql:host=%s;dbname=%s;charset=%s', HOST, DATABASE, CHARSET )

		, USERNAME
		, PASSWORD

		, [ 

		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_EMULATE_PREPARES => FALSE,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

		]
	);

	// We are using prepared statements to prevent SQL injections.

	$sql = 'INSERT INTO bookings (

		primary_name,
		partner_name,
		email,
		email2,
		phone,
		wedding_day,
		wedding_month,
		wedding_year,
		primary_venue,
		secondary_venue,
		misc_notes

		) VALUES (

		:primary_name,
		:partner_name,
		:email,
		:email2,
		:phone,
		:day,
		:month,
		:year,
		:venue,
		:venue2,
		:misc

	)';

	$bindings = [

		':primary_name' => $primary_name,
		':partner_name' => $partner_name,
		':email' => $email,
		':email2' => $email2,
		':phone' => $phone,
		':day' => $day,
		':month' => $month,
		':year' => $year,
		':venue' => $venue,
		':venue2' => $venue2,
		':misc' => $misc
	];

	$statement = $connection -> prepare( $sql );

	$executed = $statement -> execute( $bindings );

	$statement = NULL;

	sendNotificationEmail();

	echo 'success';
}




// Sends a notification email so I'm aware when someone has filled out the form.

function sendNotificationEmail() {

	$destinationEmail = "richardrking@pm.me";
	$domainEmail = "bookings@forms.rememberwhen.studio";
	$subject= "New booking!";

	$body = "

	<html>
	<head>
	<title>Message from the rememberwhen.studio bookings form</title>
	</head>
	<body>

	<p>It's been saved to the database where it can be viewed.</p>

	<p>This email originated from \"https://rememberwhen.studio/bookings/\".</p>

	</body>
	</html>";

	$headers = "From: forms.rememberwhen.studio <$domainEmail>\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1";

	mail( $destinationEmail, $subject, $body, $headers);
}




// Various data validation for cleanup and prevention of malicious attacks.

function validationLogic( $data ) {

	$data = trim( $data );
	$data = stripslashes( $data );
	$data = htmlspecialchars( $data, ENT_QUOTES );

	return $data;
}

?>