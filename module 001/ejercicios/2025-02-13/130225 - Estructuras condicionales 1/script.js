// Ejercicio 1.

// • Crea 2 variables y asigna a cada una un valor numérico introduciéndolos por teclado. Muestra un mensaje por pantalla si el primer número es mayor que es segundo. Otro diferente si ambos son iguales, y un tercer mensaje si el segundo número es mayor que el primero.

let num1 = parseInt(prompt("Introduce el primer número"));
let num2 = parseInt(prompt("Introduce el segundo número"));

if (num1 > num2) {
  document.write(`<p>${num1} es mayor que ${num2}</p>`);
} else if (num1 < num2) {
  document.write(`<p>${num1} es menor que ${num2}</p>`);
} else if (num1 == num2) {
  document.write(`<p>${num1} y ${num2} son iguales</p>`);
}

// ------------------

// Ejercicio 2.

// • Introducir por teclado un número entero y mostrar una leyenda que indique si dicho número es positivo, cero o negativo.

let plusOrLess = parseInt(prompt("Ingresa un número cualquiera"));

if (plusOrLess) {
  document.write(`<p>${plusOrLess} es positivo</p>`);
} else if (plusOrLess === 0) {
  document.write(`<p>${plusOrLess} es 0 </p>`);
} else if (plusOrLess < 0) {
  document.write(`<p>${plusOrLess} es negativo </p>`);
}

// ------------------

// Ejercicio 3.

// • Se introducen tres notas de un alumno por teclado.
// • Si la media aritmética es mayor o igual a 5 mostrar el mensaje “Aprobado”, en caso contrario, “Suspenso” • Cuando se cargue una nota, convertirla a un número real.

let lang, math, phys, total;

lang = parseInt(prompt("Nota de Castellano"));
math = parseInt(prompt("Nota de Matemáticas"));
phys = parseInt(prompt("Nota de Física"));

total = (lang + math + phys) / 3;

if (total >= 5) {
  document.write(`Aprobado`);
} else {
  document.write(`Suspenso`);
}

// ------------------

// Ejercicio 4.

// • Introducir tres números por teclado.
// • Si todos son iguales, mostrar por pantalla un mensaje junto con la suma del primero con el segundo y este resultado multiplicado por el tercero, en caso contrario se imprime por pantalla: “Los números no son iguales”.
// • Nota: para poder hacer cálculos los números deben ser números.

let amount1 = parseInt(prompt("Introduce la primera cantidad", ""));
let amount2 = parseInt(prompt("Introduce la segunda cantidad", ""));
let amount3 = parseInt(prompt("Introduce la tercera cantidad", ""));

if (amount1 === amount2 && amount2 === amount3 && amount1 === amount3) {
  document.write(
    `
        <br>
        <br>
        La operación es ${(amount1 + amount2) * amount3}
        `
  );
} else {
  document.write("<br><br>Los números no son iguales");
}
