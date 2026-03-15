<?php
/* submit.php - consultation page utility to process form submission */

/* only accept POST requests */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../consult.html');
    exit;
}

/* collect form data */
$name = trim($_POST['name']    ?? '');
$email = trim($_POST['email']   ?? '');
$phone = trim($_POST['phone']   ?? '');
$date = trim($_POST['date']    ?? '');
$message = trim($_POST['message'] ?? '');

/* validation */
$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required.';
}
if (empty($email)) {
    $errors[] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format.';
}
if (empty($message)) {
    $errors[] = 'Message is required.';
}

/* redirect back to form if validation fails */
if (!empty($errors)) {
    header('Location: ../consult.html');
    exit;
}

/* redirect to confirmation page on success */
header('Location: confirmation.html');
exit;
?>