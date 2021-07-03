<?php
    $to = "dineshkaru28@gmail.com";
    $from = $_REQUEST['name'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $wphone = $_REQUEST['wphone'];
    $city = $_REQUEST['city'];
    $date = $_REQUEST['date'];
    $describing = $_REQUEST['describing'];
    $investment = $_REQUEST['investment'];
    $program = $_REQUEST['program'];
    $qualification = $_REQUEST['qualification'];
    $offer = $_REQUEST['offer'];
    $sponsor = $_REQUEST['sponsor'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a message from your Fast Forwarding Immigration.";

    $logo = 'images/logo.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$from}</td>";
	$body .= "<td style='border:none;'><strong>Phone:</strong> {$phone}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$email}</td>";
	$body .= "</tr>";
	$body .= "<tr>";
	$body .= "<td style='border:none;'><strong>Whatsapp number:</strong> {$wphone}</td>";
	$body .= "<td style='border:none;'><strong>City:</strong> {$city}</td>";
	$body .= "<td style='border:none;'><strong>Date:</strong> {$date}</td>";
	$body .= "</tr>";
	$body .= "<tr>";
	$body .= "<td style='border:none;'><strong>Select the option describing you:</strong> {$describing}</td>";
	$body .= "<td style='border:none;'><strong>Your Investment Plan?:</strong> {$investment}</td>";
	$body .= "<td style='border:none;'><strong>Program you are opting:</strong> {$program}</td>";
	$body .= "</tr>";
    $body .= "<tr>";
	$body .= "<td style='border:none;'><strong>Do you have an offer letter?</strong> {$offer}</td>";
	$body .= "<td style='border:none;'><strong>You hold any sponsorship*:</strong> {$sponsor}</td>";
	$body .= "<td style='border:none;'><strong>Latest Qualification*:</strong> {$qualification}</td>";

	$body .= "</tr>";		
	$body .= "<tr><td></td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);
   header('Location: thankyou.html');
exit();
 ?>