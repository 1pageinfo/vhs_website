<?php

// Define some constants
define( "RECIPIENT_NAME", "VHS Engineering" );
define( "RECIPIENT_EMAIL", "contact@vhsengg.com" );


// Read the form values
$success = false;
$userName = isset( $_POST['username'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['username'] ) : "";
$LastName = isset( $_POST['lastname'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['lastname'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$Services = isset( $_POST['services'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['services'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Message:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $userName && $LastName && $senderEmail && $Services && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $subject = "New Contact Form Submission from " . $userName . " " . $LastName;
  $headers = "From: " . $senderEmail . "\r\n";
  $headers .= "Reply-To: " . $senderEmail . "\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  
  $msgBody = "<html><body>";
  $msgBody .= "<h2>New Contact Form Submission</h2>";
  $msgBody .= "<p><strong>Name:</strong> " . $userName . " " . $LastName . "</p>";
  $msgBody .= "<p><strong>Email:</strong> " . $senderEmail . "</p>";
  $msgBody .= "<p><strong>Services:</strong> " . $Services . "</p>";
  $msgBody .= "<p><strong>Message:</strong></p>";
  $msgBody .= "<p>" . nl2br($message) . "</p>";
  $msgBody .= "</body></html>";
  
  $success = mail( $recipient, $subject, $msgBody, $headers );

  //Set Location After Successsfull Submission
  header('Location: contact.html?message=Successfull');
}

else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: contact.html?message=Failed');	
}

?>

