<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body background="371330_ford.jpg">

 <h1>Welcome to Haiti Cherie</h1>
 <h2>Registrate para ver mas !!!!</h2>
    <div class="container">
    <div class="row">
    <div class="col-md-5">
    <form method="post">

    <div class ="form-group">
     <label for="Nombre"><h4>Nombre</h4></label>
    <input type="text" class="form-control" name="nombre"placeholder="Digite tu nombre">
     </div>
    

     <div class ="form-group">
     <label for="Edad"><h4>Edad</h4></label>
    <input type="text" class="form-control" name="edad"placeholder="Digite tu edad">
     </div>
   

 <div class ="form-group">
  <label for="Email"><h4>Email</h4></label>
    <input type="Email" class="form-control" name="Email"placeholder="Digite tu Email">
     </div>



 <div class ="form-group">
  <label for="Password"><h4>Password</h4></label>
    <input type="password" class="form-control" name="password"placeholder="Digite tu password">
     </div>

 <button type="submit" name="registrar" class="btn btn-primary">enviar</button>


    </div>
    </form>
    </div>
     <?php
 //echo"<pre>";
// print_r($_POST);
//echo"</pre>";
if ( isset($_POST['registrar']) ) {
    echo "presionaste el boton";

     //almacenar los datos 
    $nombre = $_POST['nombre'];
      $Email = $_POST['Email'];

    echo "<div class='col-md-4 alert alert-success'>
    Gracias por registrarte $nombre
    <p>Se ha enviado un codigo de confirmacion 
    al correo <b>$Email</b>
    </p>
    </div>";
 
}





  ?>
    </div>
  </div>
</body>
</html>