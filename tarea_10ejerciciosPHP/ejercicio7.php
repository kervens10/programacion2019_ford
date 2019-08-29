
<?php

//7 Digitar un número y mostrar qué día de la semana es. Validar que
// no se pueda digitar un número que no sea mayor que 7 o menor que 1.

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
    <h1 class="display-4">Dias de la semana</h1>
    <div class="row">

    <!--Formulario-->
    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="impa"><h4> Digite un numero que va a decir que dia es</h4></label>
    <input type="dia1"  name="dias"  placeholder="Digite  un numero que va a decir que dia es"  class="form-control">
     </div>



<div class="form-group">
<button name="dia" class="btn btn-primary"> El Dia es </button>
</form>
</div>




<!--resultado-->
    <div class="col-md-6">
    <?php
    if (isset($_POST['dia'])) {
         $dias=$_POST['dias'];
     if ($dias >=1 || $dias<=7)
       if ($dias==1){
               echo "<div>Es lunes </div>";
    }
 if ($dias==2){
               echo "<div>Es Martes </div>";
 }


  if ($dias==3){
               echo "<div>Es Miercoles </div>";
 }


  if ($dias==4){
               echo "<div>Es Jueves</div>";
 }


  if ($dias==5){
               echo "<div>Es Viernes </div>";
 }


 if ($dias==6){
               echo "<div>Es Sabado</div>";
 }

  if ($dias==7){
               echo "<div>Es Domingo </div>";
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