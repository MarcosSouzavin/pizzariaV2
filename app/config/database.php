<?php

require_once __DIR__ . '/env.php';

loadEnv(__DIR__ . '/../../.env');

$host = $_ENV['DB_HOST'] ?? '127.0.0.1';
$port = $_ENV['DB_PORT'] ?? '3306';
$db   = $_ENV['DB_NAME'] ?? 'pizzaria';
$user = $_ENV['DB_USER'] ?? '';
$pass = $_ENV['DB_PASS'] ?? '';

$dsn = "mysql:host={$host};port={$port};dbname={$db};charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die('Erro ao conectar com o banco de dados.');
}