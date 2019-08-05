//Informacion del sitio web//

var sitioWeb= {

    titulo: "Los Caballeros",
    subtitulo: "Diseno y Desarrollo web",
    color: "Blue",
    tieneLogo: true,
    creador: " by kervens",
    ano: 2019,
    servicio: "livrazon a domicilio "
    
}

alert(sitioWeb.titulo);
alert(sitioWeb.subtitulo);
alert(sitioWeb.color);
alert(sitioWeb.tieneLogo);
alert(sitioWeb.creador);
alert(sitioWeb.ano);
alert(sitioWeb.servicio);







// Informacion del sitio web
var sitioWeb = {
    titulo: "Bienvendios a Kerf007",
    subtitulo: "Diseño y Desarrollo Web",
    color: "azul",
    tieneLogo: false,
    creador: "Kervens Ford",
    año: 2019,
    servicios: "Creación de Sitios Web by kervens"
}

// Cambiar el titulo a la pagina
document.title = sitioWeb.titulo + " - " + sitioWeb.subtitulo;

// Mostrar informacion del sitio en la pagina
var h1 = document.querySelector("#info");

console.log(h1);

h1.innerHTML = "Sitio web creado por " + sitioWeb.creador + " en el año " + sitioWeb.año;