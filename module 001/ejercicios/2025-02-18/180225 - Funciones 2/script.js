// Ejercicio funciones 2
// Ejercicio 1.
// • Crea una función con retorno de datos y sin parámetros que eleve un número al
// cuadrado.
// • El número para usar en la potencia introdúcelo por teclado.
// • Muestra el resultado por pantalla.

function squareWithNoParam(){
    let num = parseInt(prompt('Introduce un número para elevarlo al cuadrado sin usar parámetros'));
    return document.write(`${num} al cuadrado es igual a ${Math.pow(num, 2)}`)
}



// Ejercicio 2.
// • Crea una función con retorno de datos y con parámetros que eleve un número al
// cuadrado.
// • El número para usar en la potencia introdúcelo por teclado.
// • Muestra el resultado por pantalla.

function squareWithParam(num = 0){
    return document.write(`${num} al cuadrado es igual a ${Math.pow(num, 2)}`)
}



squareWithNoParam()
document.write(`<br>`)
squareWithParam(parseInt(prompt('Introduce un número para elevarlo al cuadrado con parámetros')))