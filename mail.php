<?php

	$emailTo = ar.rihamahamed99.gmail.com; // Enter your email for feedbacks here

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: ".$_POST['email']."\r\n";

	if (!isset($_POST['subject'])) {
		$subject = "Contact form message"; // Enter your subject here
	} else {
		$subject = $_POST['subject'];
	}

	reset($_POST);

	$body = "";
	$body .= "<p><b>Name: </b>".$_POST['name']."</p>";
	$body .= "<p><b>Email: </b>".$_POST['email']."</p>";
	$body .= "<p><b>Message: </b>".$_POST['message']."</p>";

	if( mail('".$emailTo."','".$body."', '".$headers."') ){
		$mail_sent = true;
	} else {
		$mail_sent = false;
	}
	if(!isset($resp)){
		echo json_encode($mail_sent);
	}
?>
