


<?php
$sendTo = "info@creative-energysolutions.com";
$subject = "Quote requested from Creative Energy Solutions";


$headers = "From: " . $_POST["name"];
$headers .= "<" . $_POST["email"] . ">\r\n";
$headers .= "Reply-To: " . $_POST["email"] . "\r\n";
$headers .= "Return-Path: " . $_POST["email"];

$message = "NAME: ". $_POST["name"] . "\r\n";
$message .= "EMAIL: ". $_POST["email"] . "\r\n";
$message .= "PHONE: ". $_POST["phone"] . "\r\n";


mail($sendTo, $subject, $message, $headers);
?>
