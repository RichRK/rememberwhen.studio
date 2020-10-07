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

	$name = validationLogic( $_POST["name"] );
	$email =  validationLogic( $_POST["email"] );
	$message = validationLogic( $_POST["message"] );

	// Pass these validated strings to the connection function.

	connection( $name, $email, $message );
}




// We initiate a connection to the MySQL server using PDO.
// POST values are accessed and inserted into a SQL statement.

function connection( $name, $email, $message ) {

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

	// We're using prepared statements to prevent SQL injections.

	$sql = 'INSERT INTO contact (

		name,
		email,
		message

		) VALUES (

		:name,
		:email,
		:message

	)';

	$bindings = [

		':name' => $name,
		':email' => $email,
		':message' => $message
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
	$domainEmail = "contact@forms.rememberwhen.studio";
	$subject= "New message!";

	$body = "

	<html>
	<head>
	<title>Message from the rememberwhen.studio contact form</title>
	</head>
	<body>

	<p>It's been saved to the database where it can be viewed.</p>

	<p>This email originated from \"https://rememberwhen.studio/contact/\".</p>

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