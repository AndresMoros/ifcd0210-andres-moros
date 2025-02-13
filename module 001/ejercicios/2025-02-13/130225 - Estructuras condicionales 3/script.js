// Ejercicio 1.

// De un trabajador se introduce por pantalla su sueldo y los años de antigüedad.
// Mostrar por pantalla el sueldo total incrementado según las siguientes condiciones:
// • Si el sueldo es inferior a 1.200,00 euros y su antigüedad es igual o superior a 10 años, aplicar al sueldo un aumento del 10 %.
// • Si el sueldo es inferior a 1.200,00 pero su antigüedad es menor a 10 años, elincremento será del 5 %.
// • Si el sueldo es mayor o igual a 1.200,00, independientemente de la antigüedad,mostrar el sueldo sin cambios.
// Notas:
// • Considerar el sueldo como número real y la antigüedad como entero.
// • Incluir mensajes de salida por pantalla junto con el sueldo que cobrará el trabajador.

// let salary, age;
// const BASE = 1200.0;

// salary = parseFloat(prompt("Introduce tu sueldo"));
// age = parseInt(prompt("Introduce tu antigüedad"));

// if (salary < BASE && age >= 10) {
//   document.write(
//     `Su sueldo con el aumento del 10% es ${(salary = salary * 1.1)}`
//   );
// } else if (salary < BASE && age <= 9) {
//   document.write(
//     `Su sueldo con el aumento del 5% es ${(salary = salary * 1.05)}`
//   );
// } else if (salary >= BASE) {
//     document.write(
//         `Su sueldo es ${(salary)}`
//       );
// }

//-------------------------


// Ejercicio 2

// Introducir por pantalla 3 números que se correspondan con un día, un mes y un año, y evaluar las siguientes condiciones:
// • Si la fecha introducida está comprendida entre el 26 y el 31 de diciembre mostrar el mensaje “La Navidad ya pasó”.
// • Si el día es el 25 y el mes el 12, mostrar por pantalla el mensaje “Es Navidad”.
// • Para cualquier otra fecha, mostrar “Todavía no es Navidad”

let day = parseInt(prompt("Introduce el día de hoy"));
let month = parseInt(prompt("Introduce el presente mes"));
let year = parseInt(prompt("Introduce el año actual"));

if (day >= 26 && day <= 31 && month == 12) {
  document.write("La Navidad ya pasó");
} else if (day == 25 && month == 12) {
  document.write("Es Navidad");
} else {
  document.write("Todavia no es navidad");
}
