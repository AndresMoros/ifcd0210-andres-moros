// Ejercicio 1.
// • Calcula el módulo o resto de la división por 2 de los números 30 y 55.
// • Muestra por pantalla el valor de ambos módulos
// let moduleOne, moduleTwo;

moduleOne = 30 % 2;
moduleTwo = 55 % 2;

document.write(
  `
    <h3>
    Ejercicio 1
    </h3>
    <p>
    El módulo entre 2 de 30 es ${moduleOne}
    <br>
    El módulo entre 2 de 55 es ${moduleTwo}
    <br>
    </p>
    <hr>
    `
);

// ------------------------------------------

// Ejercicio 2.
// Dadas las variables de tipo entero con valores A = 5, B = 3 y C = -12, indicar si la evaluación de
// estas expresiones mostraría como resultado verdadero o falso.
// • A > 3
// • A > C
// • A < C
// • B < C
// • B != C
// • A == 3
// • A * B == 15
// • A * B == -30
// • C / B < A
// • C / B == -10
// • C / B == -4
// • A + B + C == 5
// • (A+B == 8) && (A-B == 2)
// • (A+B == 8) || (A-B == 6)
// • A > 3 && B > 3 && C < 3
// • A > 3 && B >= 3 && C < -3
// Crea un script donde declares estas variables. Asígnales los valores mencionados y muestra por
// pantalla el valor de verdad que tiene cada una de las expresiones indicadas. ¿Coincide lo que
// se muestra con pantalla con lo que tú esperarías que se mostrara?

const A = 5;
const B = 3;
const C = 12;

document.write(
  `
    <h3>
    Ejercicio 2
    </h3>
    <p>
    Es A > 3: ${A > 3 ? "Sí" : "No"}
    <br>
    Es A > C: ${A > C ? "Sí" : "No"}
    <br>
    Es A < C: ${A < C ? "Sí" : "No"}
    <br>
    Es B < C: ${B < C ? "Sí" : "No"}
    <br>
    Es B != 3: ${B != 3 ? "Sí" : "No"}
    <br>
    Es A == 3: ${A == 3 ? "Sí" : "No"}
    <br>
    Es A * B == 15: ${A * B == 15 ? "Sí" : "No"}
    <br>
    Es A * B == -30: ${A * B == -30 ? "Sí" : "No"}
    <br>
    Es C / B < A: ${C / B < A ? "Sí" : "No"}
    <br>
    Es C / B == -10: ${C / B == -10 ? "Sí" : "No"}
    <br>
    Es A + B + C == 5: ${A + B + C == 5 ? "Sí" : "No"}
    <br>
    (A+B == 8) && (A-B == 2): ${A + B == 8 && A - B == 2}
    <br>
    (A+B == 8) || (A-B == 6): ${A + B == 8 || A - B == 6}
    <br>
    A > 3 && B > 3 && C < 3: ${A > 3 && B > 3 && C < 3}
    <br>
    A > 3 && B >= 3 && C < -3: ${A > 3 && B >= 3 && C < -3}
    </p>
    <hr>
    `
);

// ------------------------------------------

// Ejercicio 3.
// • Crea la variable a y asígnale el valor 20.
// • Crea la variable b y carga en ella la palabra “texto”.
// • Crea la variable c y no la inicialices.
// • Ahora comprueba el tipo de dato que tiene cada una mostrando éste por pantalla de forma directa, o a través de una variable.

let a = 20;
let b = "texto";
let c;

document.write(
  `
    <h3>
    Ejercicio 3
    </h3>
    <p>
    El tipo de la variable a es: ${typeof a}
    <br>
    El tipo de la variable b es: ${typeof b}
    <br>
    El tipo de la variable c es: ${typeof c}
    <br>
    </p>
    <hr>
    `
);

// ------------------------------------------

// Ejercicio 4.
// • Crea la variable DNI y carga en ella el valor “123456789M”.
// • Pregunta ahora por el contenido de la variable DNI y, si el valor es el mismo que contiene la variable, muestra el mensaje “DNI correcto”, en caso contrario, “DNI incorrecto”.
// • Para ver ambos resultados cambia el valor de la condición.

const DNI = "123456789M";
let testDni =
  prompt("Ingresa el valor de DNI", "") === DNI
    ? "DNI correcto"
    : "DNI incorrecto";
document.write(
  `
    <h3>
    Ejercicio 4
    </h3>
    <p>
    ${testDni}
    </p>
    <hr>
    `
);
