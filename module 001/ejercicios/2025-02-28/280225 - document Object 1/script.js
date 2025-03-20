// Ejercicio 1 ---------------------------------------------------
let socios = [];
// Gener aun array con posiciones vacias para la posteriro asignación de valores

for (let i = 0; i < document.querySelectorAll("#lista-uno li").length; i++) {
  socios[i] = document.querySelectorAll("#lista-uno li")[i].textContent;
  // En cada vuelta del bucle se asigna a la posición i de socios el valor del texto del elemento i en el NodeList
}
document.getElementById("ejercicio").innerHTML = `
  El número de socios es: ${socios.length}<br>
  El orden original de los socios es ${[...socios].join(", ")}<br>
  El orden inverso de los socios es ${[...socios].reverse().join(", ")}<br>
  En orden alfabético es ${[...socios].sort().join(", ")}<br>
  `;
// Se usa el operador spread (...) para no alterar el array 'socios' original

// Ejercicio 2 ---------------------------------------------------

let hombres = [];
// Crea un array vacío
for (let i = 0; i < document.querySelectorAll(".hombre").length; i++) {
  hombres[i] = document.querySelectorAll(".hombre")[i].textContent;
  // En cada iteración se aplica el valor del NodeList original en hombres
}

let mujeres = [];
// Crea un array vacío
for (let i = 0; i < document.querySelectorAll(".mujer").length; i++) {
  mujeres[i] = document.querySelectorAll(".mujer")[i].textContent;
  // En cada iteración se aplica el valor del NodeList original en mujeres
}
document.getElementById("ejercicio2").innerHTML = `
La cantidad de socios hombres es: ${hombres.length}<br>
La cantidad de socias mujeres es: ${mujeres.length}<br>
Socios hombres ordenados: ${hombres.sort().join(", ")}<br>
Socios mujeres ordenadas: ${mujeres.sort().join(", ")}<br>
`;
// Mostrar resultado en pantalla

// Ejercicio 3 ---------------------------------------------------

let elements = document.querySelectorAll('[id$="1"]');
document.getElementById(
  "ejercicio3"
).innerHTML = `La cantidad de elementos es: ${elements.length}<br>`;
for (let i = 0; i < elements.length; i++) {
  document.getElementById("ejercicio3").innerHTML += `
  El elemento número ${[i + 1]} es: ${elements[i].innerHTML}
  <br>
  `;
}
