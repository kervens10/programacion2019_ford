
<?php

//6. Digitar el año de nacimiento e imprimir la edad actual

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
    <h1 class="display-4"> La edad actual</h1>
    <div class="row">

    <!--Formulario-->
    <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
     <label for="edad"><h4> el año de nacimiento</h4></label>
    <input type="eda"  name="edad"  placeholder="Digite  el año de nacimiento"  class="form-control">
     </div>



<div class="form-group">
<button name="age" class="btn btn-primary">The age </button>
</form>
</div>




<!--resultado-->
    <div class="col-md-6">
    <?php
    if (isset($_POST['age'])) {
        $edad=$_POST['edad'];

            // calcular La edad actual .
                $a = 2019-$edad;
                echo "<div> La edad actual : 2019- $edad = $a anos </div>";

    }
    ?>

    </div> 
    </div>
    </div>
    </form>
    </div>

</body>
</html>