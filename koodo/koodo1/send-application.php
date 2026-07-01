<?php
require_once __DIR__ . '/includes/mailer.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: career.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$position = trim($_POST['position'] ?? '');
$message = trim($_POST['message'] ?? '');

$isValid = $name !== ''
    && filter_var($email, FILTER_VALIDATE_EMAIL)
    && preg_match('/^[0-9+\-\s()]{7,15}$/', $phone)
    && $position !== '';

$maxSize = 5 * 1024 * 1024; // 5MB
$allowedExtensions = ['pdf', 'doc', 'docx'];
$allowedMimes = [
    'application/pdf',
    'application/msword',
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    'application/zip', // some .docx files are detected as zip containers
];

$resume = $_FILES['resume'] ?? null;
$resumeValid = false;
$resumeName = '';

if ($isValid && $resume && $resume['error'] === UPLOAD_ERR_OK && is_uploaded_file($resume['tmp_name'])) {
    $ext = strtolower(pathinfo($resume['name'], PATHINFO_EXTENSION));
    $mime = function_exists('finfo_open')
        ? finfo_file(finfo_open(FILEINFO_MIME_TYPE), $resume['tmp_name'])
        : $resume['type'];

    if (
        $resume['size'] > 0
        && $resume['size'] <= $maxSize
        && in_array($ext, $allowedExtensions, true)
        && in_array($mime, $allowedMimes, true)
    ) {
        $resumeValid = true;
        $resumeName = 'Resume - ' . $name . '.' . $ext;
    }
}

if (!$isValid || !$resumeValid) {
    header('Location: career.php?sent=0');
    exit;
}

$subject = 'New Job Application: ' . $position . ' — ' . $name;
$body = koodo_mail_table([
    'Name' => $name,
    'Email' => $email,
    'Phone' => $phone,
    'Position Applying For' => $position,
    'Message' => $message !== '' ? $message : '—',
]);

$sent = koodo_send_mail($subject, $body, $email, $name, [
    ['path' => $resume['tmp_name'], 'name' => $resumeName],
]);

header('Location: career.php?sent=' . ($sent ? '1' : '0'));
exit;
