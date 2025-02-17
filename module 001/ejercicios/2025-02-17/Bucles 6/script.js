// Ejercicios Instrucciones repetitivas 6.
// Uso de instrucción for.

// Ejercicio 1.
// • Crear un script que pida introducir 10 números.
// • Mostrar por pantalla la suma de los 5 últimos números introducidos.

// const MAX_NUMS = 10;
// let sum = 0;

// for (let i = 0; i < MAX_NUMS; i++) {
//   let num = parseInt(prompt("Introduce un número"));
//   if (i >= 5) {
//     sum += num;
//     console.log(sum)
//   }
// }
// document.write(sum)

// Ejercicio 2.
// • Utilizar la instrucción for.
// • Introducir una clave por teclado.
// • Sólo están permitidos 3 intentos.
// • Si la clave es correcta, mostrar el mensaje “Clave Correcta. Acceso Permitido”.
// • Si no se introduce la clave correcta tras el tercer intento, mostrar el mensaje
// “Clave Incorrecta. Acceso Denegado”.

// const MAX_ATTEMPS = 2;
// const PASSWORD = "zKiu17u3";
// let attemp = 0;
// for (let i = 0; i < MAX_ATTEMPS; i++) {
//   let user = prompt("Introduce la contraseña");
//   if (user !== PASSWORD) {
//     user = prompt(`${user} no es correcto, intenta de nuevo`);
//   } else {
//     document.write("Clave Correcto. Acceso Permmitido");
//     break;
//   }
// }

// Ejercicio 3.
// • Crea una variable de tipo contador.
// • Mientras el valor del contador sea menor o igual que 5, solicitar al usuario que
// introduzca un numero por pantalla.
// o Si el número introducido por el usuario es menor que 10, imprimir por
// pantalla: “El numero introducido es el” y el número introducido. Imprimir
// también por pantalla: “El valor del contador es” más el nombre del
// contador.
// o Si el número es mayor o igual a 10 mostrar el texto “Fin del programa” y
// salir del bucle.

let count;

for (let i = 0; i < 5; i++) {
  let user = parseInt(prompt("Escribe un número, si es mayor que 10"));
  if (user < 10) {
    document.write(`El número introducido es el ${user} <br>`);
    document.write(
      `El número del contador es ${i + 1} y el nombres es 'i' <br>`
    );
    console.log(`El número introducido es el ${user} <br>`);
    console.log(`El número del contador es ${i + 1} y el nombres es 'i' <br>`);
  } else {
    document.write(`El número introducido es el ${user} <br>`);
    document.write(
      `El número del contador es ${i + 1} y el nombres es 'i' <br>`
    );
    document.write("Fin del programa");
    break;
  }
}
