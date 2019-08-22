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
    <input type="text" class="form-control" name="sumar"placeholder="Suma algunos numeros">
     </div>

      <div class ="form-group">
    <input type="text" class="form-control" name="sumar1"placeholder="Suma1 numeros">
     </div>

 <button type="submit" name="sumas" class="btn btn-primary">sumas</button>



    </div>
    </form>
    </div>
     <?php
 //echo"<pre>";
// print_r($_POST);
//echo"</pre>";
if ( isset($_GET['suma']) ) {
    echo "suma";

     //almacenar los datos 
    $suma = $_GET['sumar'];
     $suma1 = $_GET['sumas'];

    echo "<div class='col-md-4 alert alert-success'>
   El resulta do es   $suma1 +  $suma = $suma1
    </div>";
 
}





  ?>
    </div>
  </div>
</body>
</html>