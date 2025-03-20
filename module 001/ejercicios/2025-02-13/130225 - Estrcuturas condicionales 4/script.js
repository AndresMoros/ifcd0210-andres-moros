// Ejercicio 1.
// Introducir por pantalla el color de una de las luces de un semáforo y, según sea éste,
// mostrar por pantalla los siguientes mensajes:
// • Si el color introducido es el rojo: “Alto”.
// • En caso de que el color sea el ámbar: ”Precaución”.
// • Y si es el verde: “Adelante”.
// • En cualquier otro caso: “Color Incorrecto”.
// • Nota: Tener en cuenta la distinción mayúsculas-minúsculas, y entre palabras
// acentuadas o no.

// let red = "Alto";
// let yellow = "Precaución";
// let green = "Adelante";

// let entry = prompt("Introduce los colores de un semáforo", "").toLowerCase();

// switch (entry) {
//   case "rojo":
//     document.write(`El color rojo significa: ${red}`);
//     break;
//   case "ambar":
//     document.write(`El color ambar significa: ${yellow}`);
//     break;
//   case "verde":
//     document.write(`El color rojo significa: ${green}`);
//     break;
//   default:
//     document.write("No haz introducido un color válido");
//     break;
// }

// -------------------------------

// Ejercicio 2.
// • Solicitar la introducción por pantalla de alguna de estas palabras: casa, coche,
// sol, luna, amigo.
// • Según la palabra introducida mostrar ésta traducida al inglés. Es decir, si se
// escribe “casa” debe mostrarse la palabra “house” en la página.
// • Tener en cuenta que el usuario puede escribir la palabra en minúsculas o en
// mayúsculas.
// • Si se introduce una palabra distinta a alguna de éstas, que aparezca el mensaje:
// “No hay traducción disponible para la palabra” + palabra.

let house = "house",
  car = "car",
  sun = "sun",
  moon = "moon",
  friend = "friend";

let word = prompt(
  "Introduce una palabra para ver su traducción al inglés",
  ""
).toLowerCase();

switch (word) {
  case "casa":
    document.write(`La palabra ${word} en inglés es ${casa}`);
    break;
  case "coche":
  case "carro":
  case "automovil":
  case "automóvil":
    document.write(`La palabra ${word} en inglés es ${car}`);
    break;
  case "sol":
    document.write(`La palabra ${word} en inglés es ${sun}`);
    break;
  case "luna":
    document.write(`La palabra ${word} en inglés es ${moon}`);
    break;
  case "amigo":
  case "amiga":
    document.write(`La palabra ${word} en inglés es ${friend}`);
    break;
    default:
    document.write(`Aún no contamos con una traducción para ${word}`)
}
