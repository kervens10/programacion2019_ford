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
    <h1 class="display-4">Calculadora</h1>
    <div class="row">

    <!--Formulario-->
    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="numero1"><h4>numero1</h4></label>
    <input type="number"  name="numero1" value="." class="form-control">
     </div>


  <div class ="form-group">
     <label for="numero2"><h4>numero2</h4></label>
     </div>
    </div>

<div class="form-group">
<label for="">Operacion</label>
<br>
<input type="radio" name="opcion" value="1">suma
<input type="radio" name="opcion" value="2">Resta
<input type="radio" name="opcion" value="3">Multiplicacion
<input type="radio" name="opcion" value="4">Division
</div>

<div class="form-group">
<button name="calcular" class="btn btn-primary">Calcular</button>
</form>
</div>




<!--resultado-->
    <div class="col-md-6">
    <?php
    if (isset($_POST['calcular'])) {
        $numero1=$_POST['numero1'];
          $numero2=$_POST['numero2'];
            $opcion=$_POST['opcion'];

            // proceso
            if ($opcion==1){
                $suma=$numero1 +$numero2;
                echo "<div>Resultado de la suma. $numero1 + $numero2 = $suma </div>";
            }


   if ($opcion==2){
                $resta=$numero1 -$numero2;
                echo "<div>Resultado de la resta. $numero1 - $numero2 = $resta </div>";
            }


   if ($opcion==3){
                $multiplicacion=$numero1 *$numero2;
                echo "<div>Resultado de la multiplicacion . $numero1 * $numero2 = $multiplicacion </div>";
            }



          if ($opcion==4){
                $division=$numero1 /$numero2;
                echo "<div>Resultado de la division. $numero1 / $numero2 = $division</div>";
            }  

    }
    ?>

    </div> 
    </div>
    </div>
    </form>
    </div>

</body>
</html>