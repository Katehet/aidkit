<?php

$host = 'localhost';
$db = 'aidkit';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
} catch (PDOException $e) {
    echo 'Ошибка соединения с базой данный '.$e->getMessage();
}