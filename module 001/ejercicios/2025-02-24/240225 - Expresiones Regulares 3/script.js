// Ejercicio 1.
// • Crear una instancia del objeto RegExp para definir el siguiente patrón:
// /[t|c]asa([sr])?/gi.
// • Crear un script que muestre por pantalla las respuestas a las siguientes preguntas:
// o ¿incluye búsqueda global?
// o ¿Hace o no hace distinción entre mayúsculas y minúsculas?
// o ¿Busca coincidencias en varias líneas?
// o ¿Qué modificadores incluye?
// o ¿Qué patrón se está utilizando?
// • Probar el patrón con una palabra cualquiera para confirmar una coincidencia, pero sin
// crear una variable para almacenar dicha palabra
document.write(`<h2>Ejercicio 1</h2>`);
const RegExp_1 = new RegExp(/[t|c]asa([sr])?/, "gi");

document.write(
  `
    <p>¿RegExp_1 incluye búsqueda global? ${RegExp_1.global}</p>
    <p>¿RegExp_1 hace o no hace distinción entre mayúsculas y minúsculas? ${
      RegExp_1.ignoreCase
    }</p>
    <p>¿RegExp_1 busca coincidencias entre líneas? ${RegExp_1.multiline}</p>
    <p>RegExp_1,¿qué modificadores incluye? ${RegExp_1.flags}</p>
    <p>RegExp_1,¿ qué patrón utiliza? ${RegExp_1.source}$</p>
    <p>Resultado de probar RegExp_1 con la palabra "tasa": ${RegExp_1.test(
      "tasa"
    )}</p>
    `
);
document.write(`<hr>`);

// --------------------

// Ejercicio 2.
// • Crea una instancia del objeto RegExp para definir un patrón que encuentre coincidencias
// en las palabras “MASTICAR”, “Máster” y “masaje”

document.write(`<h2>Ejercicio 2</h2>`);

const RegExp_2 = new RegExp(/^m[áa]s\w+/, "gi");
// const RegExp_2 = new RegExp(/[m][a]*[á]*s\w+/, 'gi')

document.write(
  `
    <p>
        Resultado de probar RegExp_2 en "MASTICAR": ${RegExp_2.test("MASTICAR")}
    </p>
    <p>
        Resultado de probar RegExp_2 en "Máster": ${RegExp_2.test("Máster")}
    </p>
    <p>
        Resultado de probar RegExp_2 en "masaje": ${RegExp_2.test("masaje")}
    </p>
    `
);

document.write(`<hr>`);

// --------------------

// Ejercicio 3.
// • Dada la expresión regular de JavaScript /^[A-C]\w+\ses\s\w+/, indicar cuáles de las
// siguientes frases coinciden con ella.
// • Mostrar por pantalla un mensaje evaluando cada expresión con el método test () del
// objeto RegExp y obteniendo como resultado “true” o “false” si existe o no coincidencia.
// • Frases a evaluar:
// o Juan es guapo
// o Ana no es fea
// o Ana deja de ser guapa
// o Ana es guapa
// o No es ahora
// o Ahora es no
// o Ana ya es guapa
// • En caso afirmativo, ¿qué parte o partes son las que coinciden con la expresión

document.write(`<h2>Ejercicio 3</h2>`);

const phrases = [
  "Juan es guapo",
  "Ana no es fea",
  "Ana deja de ser guapa",
  "Ana es guapa",
  "No es ahora",
  "Ahora es no",
  "Ana ya es guapa",
];

const RegExp_3 = /^[A-C]\w+\ses\s\w+/;

for(let i = 0; i < phrases.length; i++) {
    document.write(
        `
        <p>
            Resultado de evaluar "${phrases[i]}" con RegExp_3: ${RegExp_3.test(phrases[i])}
        </p>
        `
    )
}

document.write('<hr>')

// --------------------

// Ejercicio 4. 
// • Introducir una hora por teclado. 
// • El formato de entrada debe ser hh:mm:ss o hh:mm. 
// • Validar dicha hora usando el método test(). 
// • Mostrar un mensaje por pantalla de indique que, según el formato especificado, la hora introducida es correcta o no

document.write(`<h2>Ejercicio 4</h2>`);

const regexTime = /^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$/;

const time = prompt('Introduce la hora actual en formato hh:mm o hh:mm:ss')

document.write(`La hora: ${time} es ${regexTime.test(time) ? 'Correcta' : 'Incorrecta'}`)

// Explicación:

// ^([01]?[0-9]|2[0-3]) horas: 00-23
// :[0-5][0-9] minutos: 00-59
// (:[0-5][0-9])? segundos opcionales:
// El ? hace que todo el grupo (:[0-5][0-9]) sea opcional
// Si está presente, valida segundos entre 00-59
// $ fin de la cadena

document.write('<hr>')

// Ejercicio 5. 
// • Modifica el ejercicio 4 para que cuando la hora introducida sea incorrecta, el programa 
// obligue a volver a introducirla hasta que se escriba correctamente.