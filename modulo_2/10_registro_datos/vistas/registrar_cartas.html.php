<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
     crossorigin="anonymous">
    <title>Registro de Cartas</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="cold-md-5">
    <!--Formulario de Registro-->
    <form method="post">

    <h1>Registro de Cartas</h1>
<a href="lista_cartas.php">Ver lista de cartas</a>
<hr> 

    <div class="form-group">
    <input type="text" name ="name" class="form-control"placeholder="Put Your Name">
    <small class="text" name="No puede ser vacio" class="form-control"></small>
    </div>

<div class="form-group">
    <input type="url" name ="link" class="form-control"placeholder="Put Your Link">
    </div>

<div class="form-group">
    <input type="number" name ="prices" class="form-control"placeholder="Put Your Prices">
    </div>


<div class="form-group">
    <button type="submit" name="save" class="btn btn-primary">Save</button>
    </div>



    </form>
    <?php
if(isset($error)){
 echo "<div>$error</div>";


}

    ?>
    </div>
    </div>
    </div>
</body>
</html>