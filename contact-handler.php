<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed.']);
    exit;
}

// Honeypot spam check
if (!empty($_POST['website'])) {
    echo json_encode(['status' => 'success', 'message' => 'Thank you! Your inquiry has been received.']);
    exit;
}

// Verify CSRF Token
$token = $_POST['csrf_token'] ?? '';
if (empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $token)) {
    http_response_code(403);
    echo json_encode(['status' => 'error', 'message' => 'Security token mismatch. Please reload the page.']);
    exit;
}

// Sanitize & Validate Inputs
$name    = trim(strip_tags($_POST['name'] ?? ''));
$email   = trim($_POST['email'] ?? '');
$company = trim(strip_tags($_POST['company'] ?? ''));
$country = trim(strip_tags($_POST['country'] ?? ''));
$phone   = trim(strip_tags($_POST['phone'] ?? ''));
$subject = trim(strip_tags($_POST['subject'] ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));

if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['status' => 'error', 'message' => 'Please provide your name, a valid email address, and your message.']);
    exit;
}

// Save inquiry to log file
$logEntry = sprintf(
    "[%s] Name: %s | Email: %s | Company: %s | Country: %s | Phone: %s | Subject: %s | Message: %s\n",
    date('Y-m-d H:i:s'),
    $name,
    $email,
    $company ?: 'N/A',
    $country ?: 'N/A',
    $phone ?: 'N/A',
    $subject ?: 'General Inquiry',
    str_replace(["\r", "\n"], ' ', $message)
);

file_put_contents(__DIR__ . '/inquiries.log', $logEntry, FILE_APPEND | LOCK_EX);

echo json_encode([
    'status'  => 'success',
    'message' => 'Thank you, ' . htmlspecialchars($name) . '! We have received your inquiry and our export team will reply as soon as possible.'
]);
