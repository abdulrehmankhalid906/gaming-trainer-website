<?php

session_start();

require 'dbconfig.php';

if (!isset($_GET['file']) || !isset($_GET['id'])) {
    die("Invalid request.");
}

$file = basename($_GET['file']);
$id = (int)$_GET['id'];
$filepath = "data/" . $file;

if (!file_exists($filepath)) {
    die("File not found.");
}

$stmt = $con->prepare("UPDATE trainers SET download_count = download_count + 1 WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filepath));
readfile($filepath);
exit;
