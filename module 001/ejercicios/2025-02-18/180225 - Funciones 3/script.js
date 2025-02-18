// Funciones 3

// Ejercicio 2.
// • Introduce por teclado el precio de 5 productos distintos usando un bucle for.
// • Crea una función que calcule el subtotal (total sin el IVA), y el total a pagar (total con un
// 16 % de IVA), por los 5 productos.
// • Muestra por pantalla ambos resultados con un mensaje relacionado

function prices() {
  const IVA = 1.16; // IVA del 16%
  let subtotal = 0;
  for (let i = 0; i < 5; i++) {
    // let product = prompt("Introduce el producto");
    let simplePrice = parseFloat(prompt("Introduce el precio del producto"));
    // let taxedPrice = simplePrice * IVA;
    subtotal += simplePrice
    // document.write(
    //   `El precio del producto ${product} es ${simplePrice}€, más impuestos sería ${taxedPrice}€<br>`
    // );
  }
  let total = subtotal * IVA;
  document.write(`El subtotal de todos los productos es ${subtotal}€ y el total es ${total.toFixed(2)}€<br>`);
}

prices();
