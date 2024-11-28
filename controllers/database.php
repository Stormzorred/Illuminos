<?php
    $host = 'localhost';
    $db = 'flight_tickets';
    $user = 'admin';
    $pass = 'admin';
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Ошибка подключения: " . $e->getMessage());
    }
?>