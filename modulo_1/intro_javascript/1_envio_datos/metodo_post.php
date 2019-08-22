<?php
var_dump($_POST);
var_dump($_FILES);


?>


<form method="post">
<input type="text" name="correo">
<input type="password" name="clave">
<br>
<input type="file" name="archivo">
<button type="submit">Enviar</button>

</form>