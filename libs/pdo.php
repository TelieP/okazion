<?php

try {
    $config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/okazion/upload/.env");
    $pdo = new PDO("mysql:dbname={$config['db_name']};host={$config['db_host']};charset=utf8mb4",  $config['db_user'], $config['db_password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Erreur: " . $e->getMessage();
}
