// Ejercicio 1.
// - Mostrar los múltiplos de 12 hasta el valor 500.
// - Debe aparecer en pantalla la serie 12-24-36, etc.
// - Cada número en una línea distinta

// let count = 0;

// while(count <= 500) {
//     document.write(`count ahora vale ${count}<br>`)
//     count += 12;
// }
// document.write(`Final del bucle ${count}`)

// Ejercicio 2.

// - Realiza una cuenta atrás empezando por el 10 y acabando en el 0.
// - Muestra por pantalla el mensaje “Contando…..” y añade el número correspondiente para realizar la cuenta atrás.
// - Cada número en una línea distinta

// let count = 10;

// while (count >= 0) {
//   document.write(`count ahora vale ${count}<br>`);
//   count--;
// }
// document.write(`Final del bucle ${count}`);

// Ejercicio 3

// Escribe los números pares del 0 a 20 en líneas diferentes

// let count = 0;

// while (count <= 20) {
//   document.write(`count ahora vale ${count}<br>`);
//   count+= 2;
// }
// document.write(`Final del bucle ${count}`);

// Ejercicio 4

// - Suma los 30 primero números.
// - Mostrar el valor parcial de la variable contadora y el número de vuelta.
// - Muestra solo la suma total con un mensaje como el siguiente: “La suma total de los 30 primeros números es”

let count = 0;
let acc = 0;
while (count <= 30) {
  document.write(`acc ahora vale ${acc}<br>`);
  count++
  acc+= count;
}
document.write(`Final del bucle ${acc}`);