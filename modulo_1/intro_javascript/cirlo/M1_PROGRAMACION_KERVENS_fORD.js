// Es para mostrar  el nombre del autor  al principio de la ejecución del programa.
alert("Soy El autor Kervens Ford");
//digite el nombre del usuario
var nombre = prompt("Digite tu nombre Ahi por favor!");

//digite el edad del usuario
//solo puede ingresar edad de 1 a 120 anos.


     var edad = prompt("Digite tu edad Ahi por favor que sea de 1 hasta 120 anos !");
 while (edad > 120 || edad < 1){
     edad = prompt("Por favor, Por favor No quiere habla demasiado!!Digite tu edad Ahi por favor!, Por favor deber ser una edad de 1 hasta 120 anos");
 }
 document.write(`<h1>El edad es de ${edad} Anos: De acuerdo a los condiciones</h1>`);


//digite un numero pide por el usuario
var num1 = parseInt(prompt(" Por favor,digite El primero numero!"));
//digite un otro numero pide por el usuario
var num2 =parseInt(prompt("Por favor,digite el segundo numero!"));

//Valida que el usuario solo pueda digita las opciónes de un listado con las 4 operaciones básicas 


var opcion = parseInt(prompt(" Por favor,digite El opcion que tu desea!"));
while (opcion > 4 || opcion < 1) {
    opcion = parseInt(prompt(`Opcion Invalida.Elija opciones con las 4 operaciones.
1.Suma
2.Resta
3. Multiplicación
4.Division`));
}

//condicion para  realizar la suma
if (opcion==1) {
    var Suma = num1 + num2;
    document.write(`“La suma de ${num1} y ${num2}  es igual a ${Suma}“`);
} 
//condicion para  realizar la resta
if (opcion == 2) {
var Resta = num1 - num2;
document.write(`“La Resta de ${num1} y ${num2}  es igual a ${Resta}“`);
}
//condicion para  realizar la Multiplicacion
if (opcion==3){
var Multiplicación = num1 * num2;
document.write(`“La Multiplicacion de ${num1} y ${num2}  es igual a ${Multiplicación}“`);
}
//condicion para realizar la Division
if (opcion==4 ){
    //condicion que si el segundo numero (num2) es zero
  if (num2==0) {
      document.write(`No puede realizar este calculo por que el segundo numero es ${num2} ! 
       ,No hay numero que va a salir  un resultado cuanto esta diviciendo entre  cero
      `);
  } else {
      var División = num1 / num2;
      document.write(`“La Division de ${num1} y ${num2}  es igual a ${División}“`);
  }
}
