<?php

try{
$DB_HOST ="localhost";
$DB_NAME ="id10268836_app";
$DB_USER="id10268836_kervens";
$DB_PASS = "ragagann100";
$config = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

];
$conexion =new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME",$DB_USER,$DB_PASS,$config);
}catch(PDOException $pdo){
    echo $pdo->getMessage();
}

?>