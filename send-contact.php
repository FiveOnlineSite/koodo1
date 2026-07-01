<?php
require_once __DIR__ . '/includes/mailer.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$location = trim($_POST['location'] ?? '');
$forWhom = trim($_POST['for_whom'] ?? '');
$message = trim($_POST['message'] ?? '');

$allowedForWhom = ['family', 'business', 'individual'];

$isValid = $name !== ''
    && preg_match('/^[0-9+\-\s()]{7,15}$/', $phone)
    && filter_var($email, FILTER_VALIDATE_EMAIL)
    && in_array($forWhom, $allowedForWhom, true)
    && mb_strlen($message) >= 10;

if (!$isValid) {
    header('Location: contact.php?sent=0');
    exit;
}

$subject = 'New Contact Form Submission from ' . $name;
$body = koodo_mail_table([
    'Name' => $name,
    'Phone' => $phone,
    'Email' => $email,
    'Location' => $location !== '' ? $location : '—',
    'For Whom' => ucfirst($forWhom),
    'Message' => $message,
]);

$sent = koodo_send_mail($subject, $body, $email, $name);

header('Location: contact.php?sent=' . ($sent ? '1' : '0'));
exit;
