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
    <h1 class="display-4">promedio</h1>
    <div class="row">

    <!--Formulario-->
    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="numero1"><h4>numero1</h4></label>
    <input type="number"  name="numero1"  placeholder="Digite el numero1"  class="form-control">
     </div>


  <div class ="form-group">
     <label for="numero2"><h4>numero2</h4></label>
      <input type="number"  name="numero2"  placeholder="Digite el numero2" class="form-control">
     </div>



  <div class ="form-group">
     <label for="numero3"><h4>numero3</h4></label>
      <input type="number"  name="numero3"  placeholder="Digite el numero3"  class="form-control">
     </div>


  <div class ="form-group">
     <label for="numero4"><h4>numero4</h4></label>
      <input type="number"  name="numero4"  placeholder="Digite el numero4"  class="form-control">
     </div>


<div class="form-group">
<button name="promedio" class="btn btn-primary">promedio</button>
</form>
</div>




<!--resultado-->
    <div class="col-md-6">
    <?php
    if (isset($_POST['promedio'])) {
        $numero1=$_POST['numero1'];
          $numero2=$_POST['numero2'];
          $numero3=$_POST['numero3'];
          $numero4=$_POST['numero4'];

            // promedio
                $suma=$numero1 +$numero2 +$numero3 + $numero4 ;
                $suma1=$suma/4;
                echo "<div>Resultado de la promedio es : $suma/4 = $suma1 </div>";

    }
    ?>

    </div> 
    </div>
    </div>
    </form>
    </div>

</body>
</html>