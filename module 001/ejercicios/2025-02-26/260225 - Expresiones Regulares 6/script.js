// Cabe mencionar que los siguientes ejercicios eran de caracter opcional, por lo que los hice con mi conocimiento actual en JavaScript intentando mantenerlos lo más limpios posible

// Ejercicio 1.
//  Pedir a un usuario que introduzca por teclado una frase.
//  Si la frase incluye la palabra “hola” mostrar por pantalla el mensaje “La frase escrita incluye la palabra hola”, y si no, que aparezca el mensaje “La frase escrita no incluye la palabra hola”.

document.getElementById('btn_1').addEventListener('click', () => document.getElementById('res_1').innerText = (/^hola$/i.test(document.getElementById('regex').value) ? 'La frase escrita incluye la palabra "hola"' : 'La frase escrita no incluye la palabra "hola"'))

// Ejercicio 2.
//  Pedir a un usuario que introduzca las coordenadas de una ubicación por teclado.
//  Las coordenadas deben tener el siguiente formato: 999,999.
//  Si el usuario las ha introducido correctamente indicárselo con el mensaje
// “Coordenadas introducidas correctamente”, si no, que aparezca el mensaje “Las coordenadas introducidas son incorrectas”.

document.getElementById('btn_2').addEventListener('click', () => document.getElementById('res_2').innerText = (/^\d{3},\d{3}$/i.test(document.getElementById('cords').value) ? 'Coordenadas introducidas correctamen' : 'Las coordenadas introducidas son incorrectas'))

// - Ejercicio 3
// - Carga en una variable la siguiente frase: “JavaScript es un lenguaje de programación de secuencias de comandos”
// - Busca ahora todas las coincidencias de la palabra “de” y cárgalas en un array.
// - ¿Cuántas coincidencias han aparecido?
// - Muestra todas ellas por pantalla usando un bucle for.
// - Para almacenar la frase crea una instancia de la clase String.
// - Usa una variable para almacenar el patrón

document.getElementById('btn_3').addEventListener('click', () => {
    const regex_2 = /de/g;
    const phrase = document.getElementById('phrase').innerText;
    const phraseArr = phrase.match(regex_2);
    document.getElementById('res_3.1').innerHTML = `La cantidad de coincidencias es ${phraseArr.length}<br>`
    for(let i = 0; i < phrase.match(regex_2).length; i++) {
        document.getElementById('res_3.2').innerHTML += `La ocurrencia número ${i + 1} es '${phraseArr[i]}'<br>`
    }
} 
)

// Ejercicio 4.
// - Crea un objeto vacío de tipo String.
// - Carga en el objeto el siguiente texto: “La capital”.
// - Reemplaza la palabra “La”, por la palabra “El”.
// - Muestra por pantalla tanto el texto original, como el texto modificado.

let chain = new String('')
chain = 'La capital'

document.getElementById('btn_4').addEventListener('click', () => document.getElementById('res_4').innerText = chain.replace('La', 'El'))

// Ejercicio 6.
//  Crea 2 subcadenas a partir de la cadena: “No tener pelos en la lengua”.
//  La primera que contenga la frase “No tener”, y la segunda, la frase “en la lengua”.
//  Carga ambas subcadenas en un array y luego muestra por pantalla sólo la segunda.
//  Tanto la cadena original como el patrón a usar, cárgalos en 2 variables distintas

const str_1 = 'No tener pelos'
const str_2 = 'en la lengua'

const completeStr = [str_1, str_2]

document.getElementById('btn_5').addEventListener('click', () => document.getElementById('res_5').innerText = completeStr[1]);