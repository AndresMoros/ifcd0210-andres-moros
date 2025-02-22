// • Crea un Array para cargar en él 8 datos.
// • Introduce en él, datos de distintos tipos usando un bucle for.
// • Muestra por pantalla el contenido usando:
// o Un bucle for.
// o Un bucle for… in.
// o Un bucle for…of.
// o La función forEach()
const values = ["Gato", 42, true, null, 3.14, "Montaña", undefined, false];

document.write(`<h2>Bucle for</h2>`);

for (let i = 0; i < values.length; i++) {
  document.write(`El valor ${values[i]} está en el índice ${i}<br>`);
}
document.write(`El array tiene ${values.length} elementos`);

document.write(`<hr>`); // SEPARACION

document.write(`<h2>Bucle for...in</h2>`);

for (let i in values) {
  document.write(`El valor ${values[i]} está en el índice ${i}<br>`);
}
document.write(`El array tiene ${values.length} elementos`);

document.write(`<hr>`); // SEPARACION

document.write(`<h2>Bucle for...of</h2>`);

for (let i of values) {
  document.write(`El valor ${i} está en el índice ${values.indexOf(i)}<br>`);
}
document.write(`El array tiene ${values.length} elementos`);

document.write(`<hr>`); // SEPARACION

document.write(`<h2>Bucle Array.forEach()</h2>`);

values.forEach((el, i) => document.write(`El valor ${el} está en el índice ${i}<br>`));

document.write(`El array tiene ${values.length} elementos`);