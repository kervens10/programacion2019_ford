<?php

require_once'conexion.php';

if (isset($_POST['delete'])){
$id = $_POST['id'];

$sql = "DELETE FROM cartas WHERE id = $id";

$eliminado = $conexion->exec($sql);

if ($eliminado){

echo "eliminado";


} else{
    echo "No eliminado"; 
}

header("Location:lista_cartas.php");
exit;

}


?>