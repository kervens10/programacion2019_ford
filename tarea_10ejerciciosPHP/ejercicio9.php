
<?php
//9. Digitar un número y decir si es par impar.


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
    <h1 class="display-4">Impar</h1>
    <div class="row">

    <!--Formulario-->
    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="impa"><h4> Digite un numero que sea Impar</h4></label>
    <input type="impa"  name="impar"  placeholder="Digite  un numero que sea impar"  class="form-control">
     </div>



<div class="form-group">
<button name="impares" class="btn btn-primary">Impar</button>
</form>
</div>




<!--resultado-->
    <div class="col-md-6">
    <?php
    if (isset($_POST['impares'])) {
        $impar=$_POST['impar'];
         if (!($impar %2==0)){
 echo "<div> El numero es Impar : $impar </div>";
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