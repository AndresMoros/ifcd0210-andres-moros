// Ejercicio 1
let p0 = document.getElementById("p0");
// Añade al párrafo “p0” la frase: “Terminología básica”
// p0.innerText = 'Terminología Básica'

// Añade ahora al párrafo “p0” la frase: “Terminología básica”, como un párrafo más pintado de verde.
p0.innerHTML += `<p style="color:green">Terminología básica</p>`;

// Sustituye ahora el párrafo “p0” por el párrafo: “Éste no es el párrafo original”, pintado también de azul.
p0.innerHTML = `<p>Este no es el párrafo original</p>`;
p0.style.color = "blue";

// ----------------------

// Ejercicio 2

// Carga todos los párrafos en un array

let pElements = document.querySelectorAll("p");

// Muéstralos por pantalla.

for (let i = 0; i < pElements.length; i++) {
  document.getElementById(
    "respuesta2"
  ).innerHTML += `${pElements[i].outerHTML}`;
}

// Pinta de color naranja el fondo de todos los párrafos cargados y pon todos en negrita a partir de aquí
let newP = document.querySelectorAll("#respuesta2 p");

for (let i = 0; i < newP.length; i++) {
  newP[i].style.cssText = "background:orange;font-weight:bold";
}

// Añade a todos los párrafos la frase “Fin del párrafo ‘número’ ”, sustituyendo ‘número’ por el número de orden que tenga cada párrafo.

for (let i = 0; i < newP.length; i++) {
  newP[i].textContent += ` | Fin del párrafo ${i + 1}`;
}

// Cambia todos los párrafos por la frase "Párrafo nuevo ‘número’", sustituyendo ‘número’ por el número de orden que tenga cada párrafo

for (let i = 0; i < newP.length; i++) {
  newP[i].textContent = `Párrafo número ${i + 1}`;
}

// ----------------------

// Erjecicio 3

// Muestra un cuadro de diálogo en el que, al pulsar en Aceptar, se realizarán unas acciones distintas a las que se ejecutarán si se pulsa en Cancelar

let answer; // = confirm('Escoge una de las opciones');

document.getElementById("btn").addEventListener("click", () => {
  // e.preventDefault();
  answer = confirm("Escoge una de las opciones");
  if (answer) {
    // Acciones para aceptar:
    // - Añade al texto del título “h1” la frase: “HTML, HTTP y URL.”.
    // - Muestra el nuevo texto con la fuente Calibri y color violeta
    document.getElementById("h1").textContent = "HTML, HTTP y URL";
    document.getElementById("h1").style.cssText =
      "color: violet; font-family: Calibri";
  } else {
    document.getElementById("h1").textContent =
      "Este contenido está incompleto, se modificará en los próximos días";
    document.getElementById("h1").style.cssText =
      "color: red; font-family: Comic Sans MS";
  }
});

// if(answer) {
//     // Acciones para aceptar:
//     // - Añade al texto del título “h1” la frase: “HTML, HTTP y URL.”.
//     // - Muestra el nuevo texto con la fuente Calibri y color violeta
//     document.getElementById('h1').textContent = "HTML, HTTP y URL"
//     document.getElementById('h1').style.cssText = "color: violet; font-family: Calibri"
// } else {
//     document.getElementById('h1').textContent = "Este contenido está incompleto, se modificará en los próximos días"
//     document.getElementById('h1').style.cssText = "color: red; font-family: Comic Sans MS"
// }