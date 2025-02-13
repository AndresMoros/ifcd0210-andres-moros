// Ejercicio 1.

// • Introduce por teclado tu contraseña y repítela de nuevo.
// • Compara ambas entradas y, si las contraseñas coinciden, mostrar por pantalla
// un mensaje alusivo, si no, no hacer nada.

// const PASS = 'clavesegura123';
// let userInput = prompt('Introduce la contraseña')

// if(userInput !== PASS) {
//     document.write(`${userInput} no es la contraseña`)
// } else {
//     document.write(`Contraseña correcta`)
// }

// --------------------

// Ejercicio 2.

// • Introduce por teclado el tipo de vehículo que conduces.
// • Si es una moto o un coche muestra le mensaje: o "El vehículo que conduces consume combustibles fósiles o es eléctrico."
// • Si es una bicicleta muestra el mensaje: o "Montar en bicicleta es saludable y no contamina."
// • Si no conduces ningún vehículo de los anteriormente mencionados. o “Desconocido”.
// • Nota. Atención a la distinción entre mayúsculas y minúsculas.

// let vehicle = prompt("Introduce qué vehículo dices").toLowerCase();

// switch (vehicle) {
//   case "coche":
//   case "moto":
//   case "carro":
//     document.write(
//       "El vehículo que conduces consume combustibles fósiles o es eléctrico."
//     );
//     break;
//   case "bici":
//   case "bicicleta":
//     document.write("Montar en bicicleta es saludable y no contamina.");
//     break;
//   default:
//     document.write("Desconocido");
// }

// --------------------

// Ejercicio 3.

// • Introduce por teclado un número entero.
// • Mostrar por pantalla un mensaje diciendo si el número introducido es par o es impar.

let num = parseInt(prompt('Introduce un número para indicar si es par o impar', ''));

if(parseInt(num % 2) === 0) {
    document.write(`${num} es par`)
} else if (parseInt(num % 2) > 0) {
    document.write(`${num} es impar`)
} else {
    document.write(`No has introducido nada`)
}

// --------------------

