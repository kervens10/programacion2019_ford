<?php

require_once 'conexion.php';
$ker= 'CREATE TABLE participantes(
 id INT UNSIGNED AUTO_INCREMENT,
 nombre  varchar(80),
 apellido varchar(80),
 PRIMARY KEY (id)
)';
$ker='INSERT INTO  participantes 
    (nombre,apellido)
    VALUES
    ("kervens","ford")';
$conexion->exec($ker);
?>