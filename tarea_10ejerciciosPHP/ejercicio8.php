
<?php

//8. Digitar un número y mostrar qué mes del año es. Validar que no
 //se pueda digitar un número que no sea mayor que 12 o menor que 1.

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
    <h1 class="display-4">Los Meses del Anos</h1>
    <div class="row">

    <!--Formulario-->
    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="me"><h4> Digite un numero que va a decir que mes es</h4></label>
    <input type="mess"  name="meses"  placeholder="Digite  un numero que va a decir que mes es"  class="form-control">
     </div>



<div class="form-group">
<button name="mess" class="btn btn-primary"> El Mes es </button>
</form>
</div>




<!--resultado-->
    <div class="col-md-6">
    <?php
    if (isset($_POST['mess'])) {
         $meses=$_POST['meses'];
     if ($meses >=1 || $meses<=12)
       if ($meses==1){
               echo "<div>Es January </div>";
    }
 if ($meses==2){
               echo "<div>Es february </div>";
 }


  if ($meses==3){
               echo "<div>Es march </div>";
 }


  if ($meses==4){
               echo "<div>Es April</div>";
 }


  if ($meses==5){
               echo "<div>Es May </div>";
 }


 if ($meses==6){
               echo "<div>Es June</div>";
 }

  if ($meses==7){
               echo "<div>Es jully </div>";
 }



  if ($meses==8){
               echo "<div>Es August </div>";
 }

  if ($meses==9){
               echo "<div>Es September</div>";
 }

   if ($meses==10){
               echo "<div>Es Octuber </div>";               
 }



  if ($meses==11){
               echo "<div>Es November </div>";
 }

  if ($meses==12){
               echo "<div>Es Dicember </div>";
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