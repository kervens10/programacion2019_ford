<?php

require_once 'conexion.php';
if (isset($_GET['id'])){
$id = $_GET['id'];
$sql= "SELECT id, name, link, price FROM cartas WHERE id = $id";

$carta =$conexion->query($sql)->fetch(); 

if(!$carta){
die("esta carta no existe");
  }
}
//incluir la vista  
require_once 'vistas/ver_cartas.html.php';


?>