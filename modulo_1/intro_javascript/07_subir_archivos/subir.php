<?php

if (isset($_POST['subir'])) {

  /*  echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    */
    if (isset($_FILES ['archivo']) &&  ($_FILES['archivo']['error'])==0){
        $nombre= $_FILES['archivo']['name'];
        $nombre_tmp=$_FILES['archivo']['tmp_name'];
        $tamano=$_FILES['archivo']['size'];

        if (is_uploaded_file($nombre_tmp)){
              echo "Hemos recibido el archivo";
        }
     else{
        echo "No se pudo recibir el archivo";
    }

    }
    else{
        echo "No se ha enviado un archivo";
    }

}
//incluir la vista
require_once 'archivo.html.php';
?>