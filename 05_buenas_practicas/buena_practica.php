<?php

$mensaje = "";
 
if (isset($_POST['verificar'])) {
    $edad =$_POST['edad'];

    if ($edad >=18){
     $mensaje ="<p>Motherfucker </p>";
    } else {
        echo "<p>No puede ver este sitio </p>";
        die;
}
 }

 require_once 'edad.html';
