
<?php

//4. Calcular la hipotenusa de un triangulo

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
     <label for="cateto1"><h4>cateto1</h4></label>
    <input type="cate"  name="cateto1"  placeholder="Digite el cateto1"  class="form-control">
     </div>


  <div class ="form-group">
     <label for="cateto2"><h4> cateto2</h4></label>
      <input type="catet"  name="cateto2"  placeholder="Digite el cateto2"  class="form-control">
     </div>




<div class="form-group">
<button name="hipotenusa" class="btn btn-primary"> hipotenusa</button>
</form>
</div>




<!--resultado-->
    <div class="col-md-6">
    <?php
    if (isset($_POST['hipotenusa'])) {
        $cateto1=$_POST['cateto1'];
          $cateto2=$_POST['cateto2'];

            // calcular e imprimir la hipotenusa.
                $hipo = $cateto1 * $cateto2;
                echo "<div> Calcula  de la hipotenusa es : $cateto1 * $cateto2 = $hipo </div>";

    }
    ?>

    </div> 
    </div>
    </div>
    </form>
    </div>

</body>
</html>