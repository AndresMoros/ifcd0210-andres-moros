let morningCount = 0;
let afternoonCount = 0;
let nightCount = 0;

let morningAges = 0;
let afternoonAges = 0;
let nightAges = 0;

let morningMedian = 0;
let afternoonMedian = 0;
let nightMedian = 0;

for (let i = 0; i < 20; i++) {
  let turn = prompt("Cual es tu turno").toLowerCase();
  if (turn == "mañana") {
    let age = parseInt(prompt("Cual es tu edad"));
    morningAges += age;
    morningCount++;
  } else if (turn == "tarde") {
    let age = parseInt(prompt("Cual es tu edad"));
    afternoonAges += age;
    afternoonCount++;
  } else if (turn == "noche") {
    let age = parseInt(prompt("Cual es tu edad"));
    nightAges += age;
    nightCount++;
  } else {
    break;
  }
}

morningMedian = parseFloat(morningAges / morningCount).toFixed(1);
afternoonMedian = parseFloat(afternoonAges / afternoonCount).toFixed(1);
nightMedian = parseFloat(nightAges / nightCount).toFixed(1);

document.write(
  `
    Los alumnos de la mañana suman ${morningCount} y su edad media es ${morningMedian}
    <br><br>
    Los alumnos de la tarde suman ${afternoonCount} y su edad media es ${afternoonMedian}
    <br><br>
    Los alumnos de la noche suman ${nightCount} y su edad media es ${nightMedian}
    <br><br>
    `
);

if (morningMedian > afternoonMedian && morningMedian > nightMedian) {
  document.write("Los alumnos de la mañana tienen el mayor promedio de edad");
} else if (afternoonMedian > morningMedian && afternoonMedian > nightMedian) {
  document.write("Los alumnos de la tarde tienen el mayor promedio de edad");
} else if (nightMedian > morningMedian && nightMedian > afternoonMedian) {
    document.write("Los alumnos de la noche tienen el mayor promedio de edad")
} else {
    document.write("Todos los promedios son iguales")
}
