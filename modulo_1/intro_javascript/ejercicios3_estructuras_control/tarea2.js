//Ejercios 2 //
/*Hacer un programa */

var num1 = prompt("Dgite el primero  numero");
var num2 = prompt("Dgite el segundro  numero");

// Proceso y salida //  
alert(` las operaciones son los siguientes 
1-suma
2-resta
3-Multiplicacion
4-division
 
  `)

var operacion = parseInt(prompt("Digite que operacion desea hacer"));
//condiciones //
//suma//

if (operacion == 1) {
    var suma = num1 + num2;
    console.log(suma);
}

//resta//

if (operacion == 2) {
    var resta = num1 - num2;
    console.log(resta);
}

//Multiplicacion//

if (operacion == 3) {
    var Multiplicacion = num1 * num2;
    console.log(Multiplicacion);
}

//division//

if (operacion == 4) {
    var division = num1 / num2;
    console.log(division);
}
