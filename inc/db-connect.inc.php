<?php
$host = getenv('DB_HOST') ?: 'host';
$db   = getenv('DB_NAME') ?: 'dbname';
$user = getenv('DB_USER') ?: 'user';
$pass = getenv('DB_PASS') ?: 'password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

return $pdo;
