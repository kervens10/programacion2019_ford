
<?php

//3. Calcular la distancia recorrida (Buscar formula de la distancia)

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
    <div class="container">
    <h1 class="display-4">La Distancia</h1>
    <div class="row">

    <!--Formulario-->
    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="Rapidez"><h4>Rapidez</h4></label>
    <input type="rapide"  name="rapidez"  placeholder="Digite la Rapidez"  class="form-control">
     </div>


  <div class ="form-group">
     <label for="altura"><h4> El tiempo</h4></label>
      <input type="tiemp"  name="tiempo"  placeholder="Digite el tiempo"  class="form-control">
     </div>




<div class="form-group">
<button name="distancia" class="btn btn-primary"> La Distancia </button>
</form>
</div>




<!--resultado-->
    <div class="col-md-6">
    <?php
    if (isset($_POST['distancia'])) {
        $rapidez=$_POST['rapidez'];
          $tiempo=$_POST['tiempo'];

            // calcular La distancia .
                $distanci = $rapidez * $tiempo;
                echo "<div>Resultado de la Distancia es : $rapidez * $tiempo = $distanci metro/segundo </div>";

    }
    ?>

    </div> 
    </div>
    </div>
    </form>
    </div>

</body>
</html>