<?php

try{
    if(isset($_POST['save'])){
        $name=$_POST['name'];
        $link = $_POST['link'];
        $precio= $_POST['prices'];

        //validaciones
        if (empty($name)) {

            throw new Exception ("The link is  empty");
        }

        if (empty($precio)){

            throw new Exception ("The price is empty");
        }
    }



} catch(Exception $e) {
    $error = $e->getMessage();

    $error = [
  'codigo' =>$e->getCode();


    ]

}

//Incluir la vista
require_once 'vistas/registrar_cartas.html.php';
?>