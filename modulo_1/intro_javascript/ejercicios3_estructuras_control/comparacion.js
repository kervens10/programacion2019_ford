/*var ker = {
    nombre: ford,
     edad : 23,
     estacasado:true
}
if (kerv) {
    
} else {
    
}
*/
/* Operaciones Aritmeticos //
console.log(2 + 3 -1 );
console.log(4 * 3 / 2);
console.log(11 % 3 ** 2);
*/
var numero1  = parseInt ( prompt ("Digite 1 numeros "));
var numero2 =  parseInt ( prompt("Digite 2 numeros "));

var suma = (numero1) +(numero2);
var resta = (numero1) - (numero2);
var multiplicacion = (numero1) * (numero2);
var division = (numero1) / (numero2);
var residuo = (numero1) % (numero2);
var potencia =  (numero1) ** (numero2);
var mayor = (numero1) > (numero2);
var menor = (numero1) < (numero2);
var mayor_que = (numero1) >= (numero2);
var menor_que = (numero1) <= (numero2);


 if (numero1 > numero2) {
     console.log("mayor");
     document.write(`<h1> es mayor </h1>`);
 } else {
     console.log("menor");
       document.write(`<h1> ganster </h1>`);
 }
 if (numero1 >= numero2) {
     console.log("mayor o que");
      document.write(`<h1> pale cho </h1>`);
 } else {
     console.log("menoro o que");
      document.write(`<h1> Nou pa pale anpil </h1>`);

 }

 if (numero1 == numero2) {
       console.log("igual");
        document.write(`<h1> mwen pa byen avew ou santi pipi </h1>`);
 } else {
     console.log("no es igual");
      document.write(`<h1 > Al vole non tifi </h1>`);
 }

 console.log(suma);
 console.log(resta);
 console.log(multiplicacion);
 console.log(division);
 console.log(residuo);
 console.log(potencia);
 console.log(mayor);
 console.log(menor);
 console.log(mayor_que);
 console.log(menor_que);


