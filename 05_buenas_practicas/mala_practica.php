<?php
if (isset($_POST['verificar'])) {
    $edad =$_POST['edad'];

    if ($edad >=18){
         echo "<p>  </p>";
    } else {
        echo "<p>No puede ver este sitio </p>";
    }
        die;

}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>I Have two phones</h1>
    <form method="post">
    <input type="text" name="edad">
    <button type="submit" name="verificar">verificar</button>
    </form>
</body>
</html>