<?php 
//10. Imprimir los números pares del 1 al 100
?> 
<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 1; $x <= 100; $x++) {
   if($x %2==0)
  echo "The number is: $x <br>";
}
?>  

</body>
</html>