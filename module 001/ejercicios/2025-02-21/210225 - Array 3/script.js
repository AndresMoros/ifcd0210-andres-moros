// Ejercicio1.
//  Crear un array que almacene los 6 nombres de los socios de un club.
//  Los elementos deben introducirse por pantalla.
//  Después de introducir todos los elementos, usar métodos del objeto Array para
// mostrar por pantalla la siguiente información:
// o los nombres de los socios tal y como se han introducido.
// o el número socios que hay.
// o el nombre de los socios ordenados por orden alfabético.
// o el nombre de los socios en orden inverso al introducido

let partners = new Array('Cola', 'Andres', 'Anais', 'Sergio', 'Pespsi')
// for(let i = 0; i < partners.length; i++){
//     partners[i] = prompt('Nombre del socio');
// }

document.write(
    `
    <h1>Ejercicio 1</h1>
    <p>
    Los socios son: ${[...partners].join(', ')}
    </p>
    <p>
    En total son: ${partners.length}
    </p>
    <p>
    En orden alfabético serían: ${[...partners].sort().join(', ')}
    </p>
    <p>
    En orden inverso al original serían: ${[...partners].reverse().join(', ')}
    </p>
    <hr>
    `
)

// Ejercicio2.
//  Crea un array con el nombre de clasificaciones.
//  Introduce en el array los siguientes concursantes en el mismo orden.
// o Rosa, Luis Miguel, Cristina, Eugenia, Carmen, José.
//  Ésta es la clasificación actual de los participantes en un concurso, muéstrala por pantalla.
//  El concurso continúa, y se van modificando las posiciones anteriores, por lo que hay que cambiar en el array lo siguiente:
// o Eugenia adelanta a Cristina.
// o José es descalificado y se elimina del concurso.
// o Detrás de Rosa y Luis Miguel se clasifican dos nuevos concursantes:
// Inma y Ángel, en ese orden.
// o Hay una nueva participante, que pasa a encabezar la clasificación: Lola.
// o Muestra la clasificación actualizada y comprueba que se ha hecho
// correctamente.
document.write('<h1>Ejercicio 2</h1>')
let clasificaciones = ['Rosa', 'Luis Miguel', 'Cristina', 'Eugenia', 'Carmen', 'José']

document.write(`La clasificación actual de los concursantes es: ${[...clasificaciones].join(', ')}<br>`);

document.write('Eugenia adelanta a Cristina')

clasificaciones.splice(2, 1, 'Eugenia')
clasificaciones.splice(3, 1, 'Cristina')
// ["Rosa", "Luis Miguel", "Eugenia", "Cristina", "Carmen", "José"]
clasificaciones.pop();
// ["Rosa", "Luis Miguel", "Eugenia", "Cristina", "Carmen"]
clasificaciones.splice(2, 0, 'Inma', 'Ángel');
// [ "Rosa", "Luis Miguel", "Inma", "Ángel", "Eugenia", "Cristina", "Carmen" ]
clasificaciones.unshift('Lola')
// [ "Lola", "Rosa", "Luis Miguel", "Inma", "Ángel", "Eugenia", "Cristina", "Carmen" ]
document.write(`<br><br>`)
document.write(`Las posiciones finales son: ${[...clasificaciones].join(', ')}`)

