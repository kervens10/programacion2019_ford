<?php
require_once 'conexion.php';

$sql ='SELECT id, name, link, price FROM cartas ORDER BY id DESC';


//Ejecutar el query y traer todos los datos
$datos=$conexion->query($sql)->fetchAll();


//buscar
if (isset($_GET['buscar'])){

 $busqueda =$_GET['busqueda'];

 $sql = "SELECT id, name, link, price FROM cartas WHERE name LIKE '%$busqueda%'";



 $datos=$conexion->query($sql)->fetchAll();


}


// Incluir la vista
require_once 'vistas/lista_cartas.html.php';