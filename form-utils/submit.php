<?php
/* submit.php - consultation page utility to processes form submission */

/* only accept POST requests */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../consult.php');
    exit;
}

/* collecting form data */
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$date = trim($_POST['date'] ?? '');
$message = trim($_POST['message'] ?? '');

/* validation */
$errors = [];
if (empty($name)) {
    $errors[] = "Name is required.";
}
if (empty($email)) {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}
if (empty($message)) {
    $errors[] = "Message is required.";
}

// if there are validation errors, redirect back to form with error messages 
if (!empty($errors)) {
    header('Location: ../consult.html');
    exit;
}

/* build email */
$to      = 'test@email.com'; // dummy email for site (fill in with actual email when site is deployed)
$subject = "New Consultation Request — $name";

$body  = "You have a new consultation request.\n\n";
$body .= "Name:    $name\n";
$body .= "Email:   $email\n";
$body .= "Phone:   " . ($phone ?: 'Not provided') . "\n";
$body .= "Date:    " . ($date  ?: 'Not specified') . "\n";
$body .= "\nMessage:\n$message\n";

$headers  = "From: noreply@redesignstaging.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

/* send the email (mail()only works on live server, not localhost) */
if (mail($to, $subject, $body, $headers)) {
    header('Location: confirmation.html');
    exit;
} else {
    header('Location: ../consult.html?error=1');
    exit;
}
?>