<?php
/**
 * services/send-email.php
 * Controller dengan PHPMailer + SMTP Gmail
 */

declare(strict_types=1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php'; 

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../pages/contact.php');
    exit;
}

if (!empty($_POST['website'])) {
    header('Location: ../pages/contact.php?status=success');
    exit;
}

function clean(string $value): string {
    return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
}

function strLength(string $value): int {
    return function_exists('mb_strlen') ? mb_strlen($value) : strlen($value);
}

$name    = isset($_POST['name'])    ? clean($_POST['name'])    : '';
$email   = isset($_POST['email'])   ? trim($_POST['email'])    : '';
$subject = isset($_POST['subject']) ? clean($_POST['subject']) : '';
$message = isset($_POST['message']) ? clean($_POST['message']) : '';

$isValid = true;
if ($name === '' || strLength($name) > 100) $isValid = false;
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $isValid = false;
if ($subject === '' || strLength($subject) > 150) $isValid = false;
if ($message === '' || strLength($message) > 2000) $isValid = false;

if (!$isValid) {
    header('Location: ../pages/contact.php?status=error');
    exit;
}

$mail = new PHPMailer(true);

try {
    
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    
    $mail->Username   = 'legendprimeee@gmail.com'; 
    $mail->Password   = 'pqwe wzzv nhvd himl'; 
    
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('legendprimeee@gmail.com', 'Sistem Web Ecoloop'); 
    
    $mail->addAddress('legendprimeee@gmail.com', 'Tim Riset Kembali'); 
    
    $mail->addReplyTo($email, $name); 

    $mail->isHTML(false); 
    $mail->Subject = "[Pesan Website] " . $subject;
    
    $emailBody  = "Ada pesan baru dari halaman form kontak website Ecoloop:\n\n";
    $emailBody .= "Nama    : $name\n";
    $emailBody .= "Email   : $email\n";
    $emailBody .= "Subjek  : $subject\n";
    $emailBody .= "Pesan   :\n$message\n";
    
    $mail->Body = $emailBody;

    $mail->send();
    header('Location: ../pages/contact.php?status=success');
    
} catch (Exception $e) {
    header('Location: ../pages/contact.php?status=error');
}
exit;