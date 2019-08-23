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
    <div class="row">
    <div class="col-md-5">
    <form method="get">

    <div class ="form-group">
     <label for="num1"><h4>num1</h4></label>
    <input type="number" class="form-control" name="num1"placeholder="Que desea buscar">
     </div>


    <div class ="form-group">
     <label for="num2"><h4>num2</h4></label>
    <input type="number" class="form-control" name="num2"placeholder="Que desea num2">
     </div>


 <button type="submit" name="suma" class="btn btn-primary">suma</button>


    </div>
    </form>

         <?php
 //echo"<pre>";
// print_r($_POST);
//echo"</pre>";
if ( isset($_GET['suma']) ) {
    echo "suma ";

    echo "</prep>";
    print_r($_POST);
    
     //almacenar los datos 
    $num1 = $_GET['num1'];
    $num2= $_GET['num2'];
    $suma =$num1 + $num2;


    echo "<div class='col-md-4 alert alert-success'>
    La Suma de $num1 y $num2 es  $suma
    </div>";
 
}



  ?>
    </div>

    </div>
  </div>
</body>
</html>