
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
    <div class="container">
    <h1 class="display-4">Un triángulo</h1>
    <div class="row">

    <!--Formulario-->
    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="base"><h4>LA Base</h4></label>
    <input type="bas"  name="base"  placeholder="Digite la base"  class="form-control">
     </div>


  <div class ="form-group">
     <label for="altura"><h4> La altura</h4></label>
      <input type="altura"  name="altura"  placeholder="Digite la altura"  class="form-control">
     </div>




<div class="form-group">
<button name="hipotenusa" class="btn btn-primary"> hipotenusa</button>
</form>
</div>




<!--resultado-->
    <div class="col-md-6">
    <?php
    if (isset($_POST['hipotenusa'])) {
        $base=$_POST['base'];
          $altura=$_POST['altura'];

            // calcular e imprimir la hipotenusa.
                $hipo = $base * $altura;
                echo "<div>Resultado de la hipotenusa es : $base * $altura = $hipo </div>";

    }
    ?>

    </div> 
    </div>
    </div>
    </form>
    </div>

</body>
</html>