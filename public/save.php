<?php
session_start();

if (empty($_SESSION['auth'])) {
    http_response_code(403);
    exit('Nepřihlášen.');
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Metoda není povolena.');
}

$text = $_POST['text'] ?? '';
$file = __DIR__ . '/notice.txt';

if (file_put_contents($file, $text, LOCK_EX) === false) {
    http_response_code(500);
    exit('Chyba při zápisu do souboru.');
}

header('Location: admin.php?ok=1');
exit;
