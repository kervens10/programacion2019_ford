<?php
session_start();
//Verificar si el usuario ya esta logeado  

if (isset($_SESSION['id_user'])){
header("Location: lista_cartas.php");
exit;

}

require_once 'conexion.php';

try {
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  // Buscar esos datos en la base de datos
  $sql = "SELECT id, nombre, usuario, contrasena FROM usuarios 
          WHERE usuario = '$username' ";
  $resultado = $conexion->query($sql)->fetch();

  if ($resultado) {
    // Comparar la contraseña encriptada
    if (! password_verify($password, $resultado->contrasena)) {
      throw new Exception("La contraseña no coincide");
    }
    // Iniciar sesion
    $_SESSION['id_user'] = $resultado->id;
    $_SESSION['name_user'] = $resultado->nombre;
    header("Location: registro_cartas.php");
    exit;
    
  } else {
    echo "No existe";
  }
}
catch(Exception $e){
    $error =[
        'codigo'=>$e->getCode();
        'mensaje'=>$e->getMessage();
    ]
}


// Incluir la vista
require_once 'vistas/login.html.php';