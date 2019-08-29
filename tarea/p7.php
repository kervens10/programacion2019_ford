<?php 
//09.Digitar un número y decir si es par impar.
?> 
<!DOCTYPE html>
<html>
<body>
 <div class ="form-group">
     <label for="impar"><h4> Digite un numero que sea Impar</h4></label>
      <input type="impa"  name="impar"  placeholder="Digite Un numero Impar"  class="form-control">
     </div>

     <div class="form-group">
<button name="Impar" class="btn btn-primary">it supposes to be an Impar number</button>
</form>
</div>


<?php  
   if (!($impar %2==0)){
  echo "The number  $impar es Impar  <br>";
}
?>  

</body>
</html>