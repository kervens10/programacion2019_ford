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

 <h1>This page is for searching Things</h1>
 <h2>Search right here !!!!</h2>
    <div class="container">
    <div class="row">
    <div class="col-md-5">
    <form method="get">

    <div class ="form-group">
    <input type="text" class="form-control" name="busca"placeholder="Que desea buscar">
     </div>

 <button type="submit" name="Busqueda" class="btn btn-primary">Busqueda</button>


    </div>
    </form>
    </div>
     <?php
 //echo"<pre>";
// print_r($_POST);
//echo"</pre>";
if ( isset($_GET['Busqueda']) ) {
    echo "Busqueda ";

     //almacenar los datos 
    $Busqueda = $_GET['busca'];

    echo "<div class='col-md-4 alert alert-success'>
    Resultados que coinciden con  $Busqueda
    </div>";
 
}





  ?>
    </div>
  </div>
</body>
</html>