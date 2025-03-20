// Ejercicio Arrays 1.
// Ejercicio 1.
// • Crea un Array vacío sin longitud.
// • Carga después en él los datos que quieras.
// • Muestra por pantalla los datos de 2 posiciones cualesquiera del Array.

let arr0 = new Array()
arr0[0] = 'potasio'
arr0[1] = 'plátano'

document.write(`<h1>Ejercicio 1</h1>`)
document.write(`El ${arr0[0]} contiene ${arr0[1]}`)
document.write(`<hr>`)

// -------------------------------

// Ejercicio 2.
// • Crea un Array vacío con 3 elementos de longitud.
// • Carga en él 3 números.
// • Muestra por pantalla los datos del Array.


let arr1 = new Array(3)

for(let i = 0; i < arr1.length; i++){
    arr1[i] = (Math.random() * 10).toFixed(2 );
}

document.write(`<h1>Ejercicio 2</h1>`)
document.write(`Los elementos del arr1 son ${arr1}`);
document.write(`<hr>`)

// -------------------------------

// Ejercicio 3.
// • Crea un Array y a la vez incluye como datos en él 7 colores.
// • Muestra los colores primero y último almacenados en el Array.

let arr2 = new Array('Rojo', 'Azul', 'Verde', 'Amarillo', 'Blanco', 'Negro', 'Morado');

document.write(`<h1>Ejercicio 3</h1>`)
for(let i = 0; i < arr2.length; i++){
    document.write(`El color ${arr2[i]} es el color número ${i + 1}<br>`);
}
document.write(`<hr>`)

// -------------------------------

// Ejercicio 4.
// • Crea un Array usando los corchetes [] y a la vez, almacena en él 5 valores distintos, tanto textos, como números.
// • Muestra el contenido completo del Array

let arr3 = ['Andrés', 21, 2003, 'Dark Souls', 'Programador']

document.write(`<h1>Ejercicio 4</h1>`)
document.write(arr3);
document.write(`<hr>`)
