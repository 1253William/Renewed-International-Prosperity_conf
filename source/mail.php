<?php 

	$to = "support@themexriver.com"; // this is your Email address
	$from  = $_POST['email']; // this is the sender's Email address
	$sender_name = $_POST['name'];
	$contact_subject = $_POST['subject'];
	$notes = $_POST['message'];

	$message = $sender_name . " has send the contact message. " .  $contact_subject . " is his / her contact subject. He / she worte the following... ". "\n\n" . $notes;


	$subject = "Form submission";

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);

?>















