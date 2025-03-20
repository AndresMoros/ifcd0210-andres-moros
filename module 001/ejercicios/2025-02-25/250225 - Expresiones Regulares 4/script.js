// Ejercicio 1. 
// Crea una página Web con el siguiente párrafo para cargarlo después en una variable.

// ‘Estas memorias USB se han convertido en el sistema de almacenamiento y transporte personal de datos más utilizado, desplazando en este uso a los tradicionales disquetes y a los CD. Se pueden encontrar en el mercado fácilmente memorias USB de 1, 2, 4, 8, 16, 32, 64, 128, 256, 512 GB, y hasta 1 TB (1024 GB). Las memorias USB con capacidades más altas pueden aún estar, por su precio, fuera del rango del "consumidor doméstico". Esto supone, como mínimo, el equivalente a 180 CD de 700 MB o 91000 disquetes de 1440 KiB aproximadamente.’ 

// Obtener: 
// • Primer número que aparezca. 
// • Primera letra mayúscula. 
// • Posición inicial de la palabra USB. 
// • Primer número de 3 cifras que empiece por 2. 
// • Posición de la primera ocurrencia de un texto encerrado entre dobles comillas. 

// Crear los patrones que permitan encontrar las coincidencias y muestra sus posiciones por pantalla.

document.write(`<h2>Ejercicio 1</h2>`)

const text = `Estas memorias USB se han convertido en el sistema de almacenamiento y transporte personal de datos más utilizado, desplazando en este uso a los tradicionales disquetes y a los CD. Se pueden encontrar en el mercado fácilmente memorias USB de 1, 2, 4, 8, 16, 32, 64, 128, 256, 512 GB, y hasta 1 TB (1024 GB). Las memorias USB con capacidades más altas pueden aún estar, por su precio, fuera del rango del "consumidor doméstico". Esto supone, como mínimo, el equivalente a 180 CD de 700 MB o 91000 disquetes de 1440 KiB aproximadamente.`

const findNum = /\d/;
const findCapital = /[A-Z]/
const findUSB = 'USB';
const find2XX = /2[0-9]{2}/
const findQuotes = /"[^"]*"/

document.write(
    `
    <p>
    ${text}
    </p>
    <p>
    El primer número que aparece es ${text.match(findNum)}
    </p>
    <p>
    la primera letra mayúsculas que aparece es ${text.match(findCapital)}
    </p>
    <p>
    La posición inicial de USB es ${text.indexOf(findUSB)}
    </p>
    <p>
    El primer número de 3 cifras que empiece por 2 es ${text.match(find2XX)}
    </p>
    <p>
    La posición de la primera ocurrencia de un texto encerrado entre dobles comillas ${text.search(findQuotes)}
    </p>
    `
)
document.write("<hr>")

// -------------------------------

// Ejercicio 2.
// • Almacenar en una variable la siguiente frase:
//      - “A buen entendedor, pocas palabras bastan”.
// • Usando el método search (), mostrar un mensaje que diga si incluye o no la palabra entendedor.

const phrase = 'A buen entendedor, pocas palabras bastan'
const word = 'entendedor'

document.write(`<h2>Ejercicio 2</h2>`)
document.write(`<p>La frase es: ${phrase}</p>`)


document.write(phrase.search(word) >= 0 ? `Sí, contiene "${word}"` : `No, contiene "${word}"`)

document.write("<hr>")

// -------------------------------

// Ejercicio 3.
// • Reemplaza todos los unos de la siguiente frase por el número 1.
// -     “uno dos uno tres uno cuarenta uno doscientos diez uno mil”
// • Mostrar el resultado por pantalla incluyendo la frase original y la nueva frase con el contenido cambiado

document.write(`<h2>Ejercicio 3</h2>`)
document.write(`uno dos uno tres uno cuarenta uno doscientos diez uno mil`);
document.write('<br>')
document.write(`${'uno dos uno tres uno cuarenta uno doscientos diez uno mil'.replace(/uno/g, '1')}`)
document.write("<hr>")

// -------------------------------

// Ejercicio 4.
// • Reemplaza todos los espacios en blanco con un guion en la frase siguiente:
//      - “JavaScript es un lenguaje de guiones interpretado.”
// • Muestra por pantalla la frase original y la frase con el resultado final tras realizar la operación de reemplazo.
// • Da la vuelta al ejercicio, ahora a la misma frase con guiones como separador de palabras, cámbiales éstos por espacios en blanco

document.write(`<h2>Ejercicio 4</h2>`)
document.write(`JavaScript es un lenguaje de guiones interpretado.`);
document.write('<br>')
document.write(`${'JavaScript es un lenguaje de guiones interpretado.'.replace(/[ ]/g, '-')}`)
document.write('<br>')
document.write('JavaScript-es-un-lenguaje-de-guiones-interpretado.')
document.write('<br>')
document.write(`${'JavaScript-es-un-lenguaje-de-guiones-interpretado.'.replace(/-/g, ' ')}`)
document.write("<hr>")