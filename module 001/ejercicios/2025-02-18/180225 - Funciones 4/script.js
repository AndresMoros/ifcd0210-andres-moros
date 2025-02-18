// Ejercicio funciones 5.
// Ejercicio 1.
// • Crea una función flecha sin parámetros que pida por teclado (pantalla), el nombre de
// un producto y su precio.
// • Las variables para almacenar ambos datos pueden locales o globales.
// • Muestra por pantalla ambos datos en una misma instrucción de salida.
// • La función no retorna ningún valor.

// const showProduct = () => {
//   let name = prompt("Introduce el nombre del producto");
//   let price = prompt("Introduce el precio del producto");
//   document.write(`El producto es: ${name} y el precio es ${price}`);
// };

// showProduct();

// Ejercicio 2.
// - Crea una función anónima con parámetros que pida un número por teclado.
// - Si el número es mayor de 200 auméntalo un 10%.
// - En caso contrario redúcelo un 10%.
// - En uno u otro caso, muestra por pantalla el número introducido y su valor incrementado o decrementado.
// - La función no debe devolver ningún valor.

const checkNum = function(num) {
    parseInt(num)
    let newNum = 0
  if (num > 200) {
    newNum = num * 1.1;
  } else {
    newNum = num * 0.9;
  }
  document.write(`El número original es ${num} y su valor modificado es ${newNum}`);
};

checkNum(prompt('Mete un numero mano'))
