var nombreHotel = "Kerby G Hotel";
var ratingHotel = 12;
var habitacionesHotel = 23;
var reservacionesHotel = 13;
var TieneGymHotel = true;

console.log(nombreHotel);
console.log(ratingHotel);
console.log(reservacionesHotel);
console.log(habitacionesHotel);
console.log(TieneGymHotel);



var Hotel = {
    nombre: "Kerby G Hotel",
    rating: 12,
    habitaciones: 23,
    reservaciones: 13,
    TieneGym: true
}

console.log(Hotel.nombre);
console.log(Hotel.rating);
console.log(Hotel.reservaciones);
console.log(Hotel.habitaciones);
console.log(Hotel.TieneGym);

//Concatenar vs Template String //
console.log(`Welcome 
to paradise`);
console.log("Bienvenido al Hotel " + Hotel.nombre + " QUE tiene a lot of bitches " + Hotel.habitaciones );


console.log("El hotel tiene " + Hotel.reservaciones + " reservaciones ");
console.log(`El Hotel tiene ${Hotel.reservaciones} reservaciones`);

console.log("El hotel tiene " + Hotel.habitaciones + " habitaciones ");
console.log(`El Hotel tiene ${Hotel.habitaciones} habitaciones`);

console.log("El tiene " + Hotel.reservaciones + " reservaciones " + " de " + Hotel.habitaciones + " habitaciones ");
console.log(`El Hotel tiene ${Hotel.reservaciones} reservaciones ${Hotel.habitaciones} habitaciones `);

console.log("El hotel tiene " + (Hotel.habitaciones - Hotel.reservaciones) + " disponibles ");
console.log(`El Hotel tiene ${Hotel.habitaciones - Hotel.reservaciones}  disponibles `);


document.write(`<h1> Welcome to my World </h1> 
<p> Este Hotel es de ${Hotel.habitaciones} habitaciones </p>
<p>Actualmente tenemos ${Hotel.habitaciones} de las cuales ${Hotel.reservaciones} reservadas </p>
`);

