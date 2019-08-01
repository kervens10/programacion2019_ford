alert("Welcome to my page ");

/*
1 Operaciones matematicas
2 imprimir las variables sin valores
3 Declarar variables sin valor,colocamos var y el nombre de la variable
cuanto un variable no tiene valor,Javascript nos muestra undefined (no definido)
4-Asignarle un valor a las variables usando los operadores matematicos
nota: Cuando ya declaramos variables,no es necesario volver a declararlas para asignarle un valor
Esto no lo hacemos porque ya esta declarada
var suma= 1+1;
que es declarar una variable?
Esto nos dara el siguiente Error
Uncaught ReferenceError: potencia is not defined
at script.js: 26
para solucionarlo,declaramos la variable
 */
var potencia;
 var suma;
var resta;
var multiplicacion;
var division;

console.log(suma);
console.log(resta);
console.log(multiplicacion);
console.log(division);


console.log(potencia);

/*operaciones sin variable*/
console.log("---Operaciones sin variable");
console.log(1+1);//suma
console.log(1 - 1);//resta
console.log(2 * 5);//mul
console.log(10/ 2);//div

console.log("---Operaciones con variable");
suma = 1+1 ;
resta = 2- 1;
multiplicacion= 1 * 1;
division = 10 /2;

console.log(suma);
console.log(resta);
console.log(multiplicacion);
console.log(division);


/*Ingresado por el usuario*/

prompt("Digita tu nombre");
prompt("Digita tu cuidad");
prompt("Digita tu edad");

//ingresado y almacenado //

var nombre;
var cuidad;
var edad;

alert("Ahora vamos a pedirte tus datos. Es 100% seguro");

nombre = prompt("Digite tu nombre");
cuidad = prompt("digite tu ciudad");
edad = prompt("digite tu edad");

console.log (nombre);
console.log(cuidad);
console.log(edad);

alert(nombre);
alert(cuidad);
alert(edad);

document.write(nombre);
document.write(cuidad);
document.write(edad);







