<?php
 session_start();

      echo "<pre>";
     print_r($_SESSION);
     echo "</pre>";
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Listado</title>
           <link rel="stylesheet" href="boostsrap.css">
        </head>
        <body>
            <div class="container">
            <div class='row'>
            <?php
            if(isset($_SESSION['publicaciones'])){
            foreach($_SESSION['publicaciones'] as $publicaciones){
            echo "<div class='col-md-4'>
            <img src='{$publicaciones->url}' class='img-thumbnail'>
           <p>{$publicaciones->nombre}</p> 
            </div>";
     }
     }
     ?>
            </div>
            </div>
        </body>
        </html>

        