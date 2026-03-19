<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: appl.php');
    exit;
}

$name    = trim($_POST['name']    ?? '');
$phone   = trim($_POST['phone']   ?? '');
$email   = trim($_POST['email']   ?? '');
$age     = trim($_POST['age']     ?? '');
$message = trim($_POST['message'] ?? '');

if (empty($name) || empty($phone)) {
    header('Location: appl.php?error=1');
    exit;
}

$name  = str_replace(["\r", "\n"], ' ', $name);
$phone = str_replace(["\r", "\n"], ' ', $phone);
$email = str_replace(["\r", "\n"], ' ', $email);
$age   = str_replace(["\r", "\n"], ' ', $age);

$date = date('d.m.Y H:i:s');
$entry  = "------------------------------------------------------------\n";
$entry .= "Дата:     $date\n";
$entry .= "Имя:      $name\n";
$entry .= "Телефон:  $phone\n";
$entry .= "Email:    $email\n";
$entry .= "Возраст:  $age\n";
$entry .= "Сообщение:\n$message\n";
$file = __DIR__ . '/applications.txt';
if (file_put_contents($file, $entry, FILE_APPEND | LOCK_EX) === false) {
    header('Location: appl.php?error=1');
    exit;
}

header('Location: ../contacts.php?sent=1');
exit;