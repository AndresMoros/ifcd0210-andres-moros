// Ejercicio 1.
// • Crear un Array e introducir 3 números en él.
// • Mostrar por pantalla los 3 números introducidos.
// • Mostrar por pantalla los 3 números multiplicados.

const arr0 = [2, 9, 32];

document.write(`<h1>Ejercicio 1</h1>`);
document.write(`Los números son ${arr0}`);
document.write(`<br>`);
document.write(
  `Los números multiplicados por si mismos son ${arr0.map((e) => e * e)}`
);
document.write(`<hr>`);

// Ejercicio 2.
// • Utilizando el Array anterior:
//      o Mostrar por pantalla un mensaje que indique cuál de los 3 es el número mayor.
//      o Si hay 2 iguales y son los mayores, mostrar su valor.
//      o Si los 3 son iguales indicarlo también.

document.write(`<h1>Ejercicio 1</h1>`);
document.write(`Los números son ${arr0}`);
document.write(`<br>`);
if (arr0[0] > arr0[1] && arr0[0] > arr0[2]) {
  document.write(`El mayor es ${arr0[0]}`);
}
if (arr0[1] > arr0[0] && arr0[1] > arr0[2]) {
  document.write(`El mayor es ${arr0[1]}`);
}
if (arr0[2] > arr0[1] && arr0[2] > arr0[0]) {
  document.write(`El mayor es ${arr0[2]}`);
}
if (arr0[2] === arr0[1] && arr0[2] === arr0[0]) {
  document.write(`Todos valen lo mismo: ${arr0[0]}`);
}
// document.write(`El número más grande es ${Math.max(...arr0)}`)
document.write(`<br>`);
document.write(`<hr>`);

// Ejercicio 3.
// • Crear un Array e introducir en él por teclado los nombres de los continentes.
// • Crear otro Array con 5 números.
// • Copiar ambos Arrays en otros 2 nuevos.
// • Concatena ambos Arrays copia en un array nuevo y utiliza este último a partir de ahora.
// • Mostrar el contenido del Array nuevo ordenado.
// • Confirma que el Array concatenado incluye el continente Europa.
// • Añadir la Antártida al final del Array.
// • ¿Cuántos elementos tiene este array?
// • Mostrar todos los elementos de Array usando un bucle for.

const CONTINENTS = new Array(5);
const sites = ['América','Africa', 'Asia', 'Europa', 'Océania']
const NUMS = [1, 2, 3, 4, 5]
for(let i = 0; i < CONTINENTS.length; i++){
  CONTINENTS[i] = sites[i]
}
let continentes = CONTINENTS.slice()
let numeros = NUMS.slice()

let definitivo = continentes.concat(numeros).sort();

// Ejercicio 4.
// • Crea los Arrays A, B y C vacíos, pero con el mismo tamaño.
// • Carga números en los Arrays A y B usando un bucle.
// • Introduce en el Array C la suma de los números de los Arrays A y B en sentido
// inverso, es decir, el primer elemento del Array A con el último de array B, y así
// sucesivamente, usando también en este caso otro bucle.
// • Muestra el contenido de cada Array en una línea.

let a = new Array(5);
let b = new Array(5);
let c = new Array(5);

for (let i = 0; i < a.length; i++) {
  a[i] = parseInt(prompt('Introduce un número para el array "a"', ""));
  b[i] = parseInt(prompt('Introduce un número para el array "b"', ""));
}

for (let i = 0; i < c.length; i++) {
  c[i] = a[i] + [...b].reverse()[i];
}

// let d = a.length - 1;
// for(let i = 0; i < c.length; i++){
//   c[i] = a[i] + b[d];
//   d--
// }

// for(let i = 0; i < c.length; i++){
//     c[i] = a[i] + b[b.length - 1 - i]
// }
document.write(a);
document.write(`<br>`);
document.write(b);
document.write(`<br>`);
document.write(c);
