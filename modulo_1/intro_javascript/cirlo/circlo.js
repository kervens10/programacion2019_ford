/*
//1

var num1 = parseInt(prompt("Digite un numero "));
while(num1 <0 ){
var num1 = parseInt(prompt("Digite un numero "));
}
var num2 = parseInt(prompt("Digite un numero "));
while (num2 < 0) {
    var num2 = parseInt(prompt("Digite un numero "));
}

var resultado = num1 + num2;
alert(`La suma es ${num1} + ${num2} = ${resultado}`);




//2
var edad = parseInt(prompt("Digite un edad "));

while(edad < 18 || edad > 25 ){
    edad = parseInt(prompt("digite un numero entre 18 - 25"));
}
alert(`La suma es ${edad}`);


//3
var er = parseInt(prompt("Digite un edad "));

while ( !(er < 70 || er > 99)) {
    er = parseInt(prompt("No puede digitar este numero "));
}
alert(`La edad es ${er}`);

//4
var pin = prompt("Digite el pin ");
alert(pin.length);

while(pin.length !== 4){
    var pin = prompt("Digite el pin que tenga 4 Pin ");
}
alert(`El Pin es ${pin}`);
*/
/*
//5

var monto = parseInt(prompt("digite un monto para abrir esta cuenta"));

while (!(monto >= 600 )) {
  var monto = parseInt(prompt("tu no  puedes abrir la cuenta"));
}
console.log(`You was successful,you have a montant of ${monto} pesos`);


var mont = parseInt(prompt("digite tu edad"));

while (!(mont >= 18)) {
    var mont = parseInt(prompt("Tu no puedes entrar en INFOTEP"));
}
console.log("Tu puedes entrar porque tu tienes 18 anos");



var contrasena = prompt("Digite tu contrasena ");
alert(contrasena.length);

while (contrasena.length < 8) {
    var contrasena = prompt("Debe tener  8 caracteres ");
}
alert(`La contrasena es valida`);


var num3 = parseInt(prompt("Digite un numero "));
while (num3 %2==0) {
    var num3 = parseInt(prompt("Digite solomante un numero impares "));
}
console.log("Gracias es un numero impares");




do{
 var num4 = parseInt(prompt("Digite un numero que sea negativo"));
}
while (num4 > 0);

//9
do {
    var num5 = parseInt(prompt("Digite un numero que sea positivo y pares"));
}
while (num5 < 0 || !(num5%2==0));
*/

do {
    var num10 = prompt("El primero contrasena debe ser igual al segundo");
    var num11 = prompt("El segundo debe ser igual al primero");
}
while (!(num10 ===num11));
console.log("they are match together");
document.write(`<h1>they are match together</h1>`);

