document.write("<h1>Ejercicio 1</h1>");
// Ejercicio 1.
// • Crea un objeto literal denominado cliente.
// • A la vez que se crea el objeto, define sus propiedades e introduce valores en ellas.
// • Incluye las siguientes propiedades:
//  o Nombre, apellidos, dirección, telefono, numeroCuenta y formaPago.
// • No hay métodos.
// • Una vez creado, y con valores en cada propiedad, accede a éstos para mostrarlos por pantalla con un mensaje asociado.

const cliente = {
  nombre: "Andrés",
  apellido: "Moros",
  dir: "Móstoles, Madrid",
  numCuenta: 8802134123,
  formaPago: "Efectivo",
};
document.write(`
    El nombre completo del cliente es ${cliente.nombre} ${cliente.apellido}, vive en ${cliente.dir}, con número de cuenta ${cliente.numCuenta}. Pagó con ${cliente.formaPago}
    `);
document.write("<hr>");
// ----------------------------------
document.write("<h1>Ejercicio 2</h1>");
// Ejercicio 2.
// • Crea un objeto literal vacío con el nombre de casa.
// • Tras crearlo, define las siguientes propiedades cargando en cada una un dato:
// o tipo, numeroHabitaciones, metrosCuadrados.
// • No hay métodos.
// • Una vez creado, y con valores en cada propiedad, accede a éstos para mostrarlos por pantalla con un mensaje asociado.

let casa = {};

casa.tipo = "Rural";
casa.numHabitantes = 6;
casa.mCuadrados = 54;

document.write(`
    La casa es de tipo ${casa.tipo}, en ella viven ${casa.numHabitantes} siendo de ${casa.mCuadrados}`);

document.write("<hr>");
// ----------------------------------
document.write("<h1>Ejercicio 3</h1>");
// Ejercicio 3.
// • Crea un objeto literal denominado movil1.
// • A la vez que se crea el objeto, define sus propiedades y métodos.
// • Incluye las siguientes propiedades:
//      - marca, modelo y precio.
// • Crea el método mostrarDatos(), cuya función será mostrar por pantalla la marca, modelo y precio de teléfono.
// • Ejecutar el métodos mostrarDatos().

const movil1 = {
  marca: "Apple",
  modelo: "iPhone 6",
  precio: 102,
  mostrarDatos: () =>
    document.write(
      `El teléfono es marca ${movil1.marca}, modelo ${movil1.modelo}. Precio ${movil1.precio} €`
    ),
};

movil1.mostrarDatos();

document.write("<hr>");
// ----------------------------------
document.write("<h1>Ejercicio 4</h1>");
// Ejercicio 4.
// • Crea un objeto literal empleados.
// • Una vez creado, añade contenido a las siguientes propiedades:
//      - nombre, apellidos, categoría, añoAlta y sueldo.
// • Crea el método calcularAntiguedad(), cuya función será calcular los años que lleva el trabajador en la empresa desde su alta hasta el año actual.
// • Ejecutar el método calcularAntiguedad().
// • Mostrar por pantalla un mensaje que incluya el nombre, apellidos y los años que lleva el empleado contratado

let empleados = {
  nombre: "Jesus",
  apellido: "Araujo",
  categoria: "Desarrollador",
  añoAlta: 2018,
  sueldo: 1380,
  calcularAntiguedad: (currentYear) =>
    `La antiguedad es de ${currentYear - empleados.añoAlta} años`,
  mostrarDatos: () =>
    document.write(`
        Nombre: ${empleados.nombre}
        <br>
        Apellido: ${empleados.apellido}
        <br>
        Categoria: ${empleados.categoria}
        <br>
        Incorporación: ${empleados.añoAlta} (${empleados.calcularAntiguedad(2025)})
        <br>
        Sueldo: ${empleados.sueldo}€
        <br>
        `),
};
empleados.mostrarDatos();
document.write(empleados.calcularAntiguedad(2025))
document.write("<hr>");
