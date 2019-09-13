<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver cartas</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

<div class="container">
        <div class="row">
            <div class="col-md-5">
         </div>
          <img src="<?= $carta['name']; ?>">
         </div>
            </div>
            </div>
</div>

<div class="container">
        <div class="row">
            <div class="col-md-5">
            <h1 class="display-3"><?= $carta['name']; ?></h1>
            <p class="alert-success"><?= $carta['price']; ?></p>
             <p>esto es una descripcion</p>
             </div>
         </div>
            </div>
            </div>
</div>
</body>
</html>