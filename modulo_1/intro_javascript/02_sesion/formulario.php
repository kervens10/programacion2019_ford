
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
 <div class="container">
    <h1 class="display-4"> The Form</h1>
    <div class="row">

 <div class="col-md-5">
    <form method="post">
    <div class ="form-group">
    <input type="text"  name="nombre" placeholder="nombre" class="form-control">
     </div>

        <div class ="form-group">
    <input type="text"  name="Url" placeholder="Url de un imagen" class="form-control">
     </div>

<div class="form-group">
<button name="Register" class="btn btn-primary">Register</button>
</form>
</div>

 <h1>This form have ford purpose to registre all name of all students in the University </h1>

<img src="371330_ford.jpg" alt="">





<div class="col-md-6">
    <?php
    if (isset($_POST['Register'])) {
        $datos=new stdClass();
          $datos->nombre=$_POST['nombre'];
           $datos->Url=$_POST['Url'];
           echo "<pre>"
    print_r($datos);
     echo "</pre>"
    }
    ?>

    </div> 
    </div>
    </div>
    </form>
    </div>
</body>
</html>