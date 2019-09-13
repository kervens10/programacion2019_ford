<?php

try {
    $DB_HOST = "localhost";
    $DB_NAME = "app";
    $DB_USER = "root";
    $DB_PASS = "";
    $config = [
       3=>2,
       //19=>5,
    ];
    $conexion = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS, $config);
    
} catch(PDOException $pdo) {
    die($pdo->getMessage());
}