// Ejercicio Instrucciones repetitivas 5.
// Uso instrucción do…while.
// Ejercicio.
// Se desea realizar el censo municipal.
// Para ello se introduce por teclado los siguientes datos de los vecinos del municipio:
// • Número de DNI (sin letra).
// • Edad.
// • Sexo (“m” para masculino o “f” para femenino).
// Cuando se quiera terminar de introducir datos basta con teclear un 0 en el DNI.
// (Nota: Convertir el DNI a un número para poder evaluar si es o no un 0).
// Al terminar la introducción de datos, mostrar por pantalla las siguientes cantidades:
// • Total de personas censadas.
// • Total de hombres.
// • Total de mujeres.
// • Total de hombres en edad laboral.
// • Total de mujeres en edad laboral

let f = "Femenino";
let m = "Masculino";
let age = 0;
let mNum = 0;
let fNum = 0;
let adultM = 0;
let adultF = 0;

const MAX = 5;
let ppl = 0;
while (ppl >= MAX) {
  let dni = prompt("Introduce tu DNI (solo letras)");
  if (dni == false || dni.length == 0 || dni.length == 1) {
    let dni = parseInt(prompt("Introduce un DNI válido"));
  } else {
    parseInt(dni);
    let sex = prompt('¿Tu sexo es "Masculino" o "Femenino"?').toLocaleLowerCase;
    switch (sex) {
      case "femenino":
        fNum++;
        sex = "";
        break;
      case "masculino":
        mNum++;
        break;
      default:
        break;
    }
  }
}

// SUSPENDIDO DE MOMENTO