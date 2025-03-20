let lang, math, phys, total;

lang = parseFloat(prompt("Nota de Castellano", "0"));
math = parseFloat(prompt("Nota de Matemáticas", "0"));
phys = parseFloat(prompt("Nota de Física", "0"));

total = Math.round((lang + math + phys) / 3);

// if...else method

// if (total) {
//   if (total == 9 || total == 10) {
//     document.write("Sobresaliente");
//   } else if (total == 8 || total == 7) {
//     document.write("Notable");
//   } else if (total == 6) {
//     document.write("Bien");
//   } else if (total == 5) {
//     document.write("Suficiente");
//   } else if (total <= 4) {
//     document.write("Suspenso");
//   } else if (total > 10) {
//     document.write("Rango de notas no válido");
//   }
// } else {
//   document.write("El alumno no ha realizado los exámenes");
// }

switch (total) {
  case 10:
  case 9:
    document.write("Sobresaliente");
    break;
  case 8:
  case 7:
    document.write("Notable");
    break;
  case 6:
    document.write("Bien");
    break;
  case 5:
    document.write("Suficiente");
    break;
  case 4:
  case 3:
  case 1:
    document.write("Suspenso");
    break;
  case 0:
    document.write("El alumno no ha realizado los exámenes");
    break;
}

// console.log(total)
