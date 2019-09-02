<?php

require_once 'conexion.php';

try {
    // Guardar los datos
    if (isset($_POST['guardar'])) {
        $nombre = $_POST['name'];
        $url = $_POST['link'];
        $precio = $_POST['price']; 

        // Validaciones
        if (empty($nombre)) {
            throw new Exception("El nombre no puede estar vacio", 1);
        }

        if (empty($usuario)) {
            throw new Exception("El link no puede estar vacio", 2);
        }

        if (empty($contrasena)) {
            throw new Exception("El precio no puede estar vacio", 3);
        }
        //verificar si el usuario existe en la base de datos
        $sql ="SELECT id, name FROM cartas WHERE name LIKe '%$usuario'";
        $datos2 = $conexion->query($sql)->fetchAll();

         if (count ($datos2) > 0){
             throw new Exception("YA existe este usuario . Elija otro",1);
         }

        // Insertar     
        $sql = "INSERT INTO users
                (name, username, password)
                VALUES
                (\"$nombre\", \"$usuario\", \"$contrasena\")";

        $resultado = $conexion->exec($sql);

        if ($resultado) {
            header("location:login.php");
            exit;
        } else {
            $mensaje = "No se pudieron guardar los datos";
        }

        echo $mensaje;

    }    

} catch(Exception $e) {
    
    $error = [
        'codigo' => $e->getCode(),
        'mensaje' => $e->getMessage()
    ];

}

// Incluir la vista
require_once 'vistas/registro_cartas1.html.php';