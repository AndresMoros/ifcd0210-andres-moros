// Ejercicio 1.
// • Crear un patrón para buscar grupos de tres letras que tengan una vocal en medio.
// • Buscar coincidencias de dicho patrón en la siguiente frase:
//      o “En un lugar de La Mancha, de cuyo nombre no quiero acordarme”
// • Si se encuentran coincidencias, almacenarlas en un array.
// • Mostrar por pantalla el número de coincidencias encontradas.
// • Mostrar por pantalla el contenido del array utilizando un bucle for.
document.write('<h2>Ejercicio 1</h2>')

const RegExp_1 = /[^aáeéiíoóuú\s][aáeéiíoóuú][^aáeéiíoóuú\s]/g

const phrase1 = `En un lugar de La Mancha, de cuyo nombre no quiero acordarme`;
document.write(phrase1)
document.write('<br>')

document.write(`La cantidad de coincidencias es: ${phrase1.match(RegExp_1).length}`);
document.write('<br>')
for(let i = 0; i < phrase1.match(RegExp_1).length;i++){
    document.write(`La coincidencia número ${i + 1} es: ${phrase1.match(RegExp_1)[i]}`)  
    document.write('<br>')
}
document.write('<hr>')

// -------------------------------

// Ejercicio 2.
// • En la siguiente frase hay incluidas las edades además de los nombres de varias personas:
// o “Juan 23 Eva 34 Pepe 28 Cristina 24 Rosa 37 Luis Miguel 40”
// • Crear un patrón para almacenar sólo las edades en un array.
// • Mostrar por pantalla el número de coincidencias encontradas.
// • Mostrar por pantalla todas las edades contenidas en el array usando un bucle for.

document.write('<h2>Ejercicio 2</h2>')

const RegExp_2 = /\d\d/g

const phrase2 = 'Juan 23 Eva 34 Pepe 28 Cristina 24 Rosa 37 Luis Miguel 40'
document.write(phrase2)
document.write('<br>')

document.write(`La cantidad de edades encontradas es: ${phrase2.match(RegExp_2).length}`);
document.write('<br>')
for(let i = 0; i < phrase2.match(RegExp_2).length;i++){
    document.write(`La coincidencia número ${i + 1} es: ${phrase2.match(RegExp_2)[i]}`)  
    document.write('<br>')
}
document.write('<hr>')

// -------------------------------

