// Ejercicio funciones 1.
// Ejercicio 1.
// • Crea una función que sume 5 números y muestra el resultado de la suma por pantalla.
function sumWithAllParameters(n1, n2, n3, n4, n5) {
    return document.write(`
        La suma de los números ${n1}, ${n2}, ${n3}, ${n4}, ${n5} es ${n1 + n2 + n3 + n4 + n5}
        <br>
        `);
}
sumWithAllParameters(2, 4, 5, 6, 7);
// -------------
// Ejercicio 2.
// • Modifica el ejercicio una para que los 2 últimos parámetros (2 últimos números en la
// suma), sean opcionales.
// • Prueba la función con sus 5 parámetros (5 valores numéricos).
// • Prueba la función con sólo los 3 primeros parámetros (sólo 3 valores numéricos).

// -------------
function sumWithOptinalParameter(n1, n2, n3, n4 = 5, n5 = 1) {
    return document.write(`
        La suma de los números ${n1}, ${n2}, ${n3}, ${n4}, ${n5} con solo tres definidos es ${n1 + n2 + n3 + n4 + n5}
        <br>
        `);
}
sumWithOptinalParameter(2, 3, 5)
sumWithOptinalParameter(2, 3, 5, 1, 1)

// ------------
// Ejercicio 3.
// • Crea una función que eleve un número al cubo.
// • Muestra el resultado por pantalla.

function cube(num) {
    let cube = num ** 3;
    return document.write(`
        ${num} al cubo es igual a ${cube}
        <br>
        `);
}
cube(9)