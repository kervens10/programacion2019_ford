// obtener Los elementos
var h1 = document.querySelector("h1");
var p = document.querySelector("p");
var a = document.querySelector("a");
var hr = document.querySelector("hr");
var body = document.querySelector("body");
var button = document.querySelector("button");
var claro = document.querySelector(".claro");
var inter = document.querySelector(".inter");

var modoOscuroActivado = false;


function interCambia() {
    if (modoOscuroActivado) {
        modoClaro();
    } else {
        modoOscuro();
    }
}

function modoOscuro() {
    h1.style.color = "white";
    p.style.color = "white";
    a.style.color = "white";
    hr.style.borderColor = "white";
    button.style.backgroundColor = "lightblue";

    body.style.backgroundColor = "#353535";

    modoOscuroActivado = true;
    inter.textContent = "Cambiar a Modo Claro";
}

function modoClaro() {
    h1.style.color = "black";
    p.style.color = "black";
    a.style.color = "red";
    hr.style.borderColor = "blue";
    button.style.backgroundColor = "black";
    button.style.Color = "white";

    body.style.backgroundColor = "white";
    modoOscuroActivado = false;
    inter.textContent = "Cambiar a Modo Oscuro";
}

button.addEventListener(`click`, modoOscuro);
claro.addEventListener(`click`, modoClaro);
inter.addEventListener(`click`, interCambia);