// Ejercicio 1.
// • Crea la clase Amigos usando la función constructora.
// • El objeto tendrá los siguientes atributos o propiedades: nombre, apellidos,  dirección y teléfono.
// • El objeto no tendrá métodos.
// • Crea 3 amigos (instancias) distintas a partir de la clase Amigos.
// • Mostrar por pantalla los datos de todas las instancias en un mensaje que incluya todas las propiedades.
// • Variar el ejercicio para crear versiones con o sin parámetros en el constructor y
// también, con y sin métodos internos que muestren los datos de cada objeto por
// pantalla.

// VARIANTE 1

function Amigo(nombre, apellidos, dir, tel){
    this.nombre = nombre;
    this.apellidos = apellidos;
    this.dir = dir;
    this.tel = tel;
}

let anais = new Amigo('Anais', 'Rojas', 'Madrid', 640987612);
let sergio = new Amigo('Sergio', 'Koksoquer', 'Fuelabrada', 648787612);
let anthony = new Amigo('Anthony', 'Cruz', 'Madrid', 640987612);

document.write('<h1>Ejercicio 1</h1>')
document.write(`Nombre completo: ${anais.nombre} ${anais.apellidos}. Dirreción: ${anais.dir}. Teléfono: ${anais.tel} <br><br>`);
document.write(`Nombre completo: ${sergio.nombre} ${sergio.apellidos}. Dirreción: ${sergio.dir}. Teléfono: ${sergio.tel} <br><br>`);
document.write(`Nombre completo: ${anthony.nombre} ${anthony.apellidos}. Dirreción: ${anthony.dir}. Teléfono: ${anthony.tel} <br><br>`);

document.write('<hr>')

// VARIANTE 2

function Friend(name, lastName, dir, tel){
    this.name = name;
    this.lastName = lastName;
    this.dir = dir;
    this.tel = tel;
    this.showData = () => document.write(`Nombre completo: ${name} ${lastName}. Dirreción: ${dir}. Teléfono: ${tel} <br><br>`)
}

let francisco = new Friend('Francisco', 'Moran', 'Madrid', 640900012);
let angel = new Friend('Angel', 'Lara', 'Mostoles ', 648787612);
let maro = new Friend('Maro', 'Lora', 'Cali', 640322612);

document.write('<h1>Ejercicio 1.1</h1>')
francisco.showData();
angel.showData();
maro.showData();
document.write('<hr>')

// Ejercicio 2.
// • Crea un clase u objeto prototípico llamado Viajes.
// • El objeto prototípico tendrá las propiedades: origen, destino, precio y
// transporte y el método datosViaje().
// • El método mostrará por pantalla con 3 instrucciones:
// o Los datos del origen y el destino.
// o El precio del viaje.
// o El modo de transporte para realizar el viaje.
// • Crear 2 instancias viajes del objeto prototípico Viajes.
// • Con ambas instancias llamar al método datosViaje(), para consultar sus datos.

document.write('<h1>Ejercicio 2</h1>')

function Viaje(origen, destino, precio, transporte) {
    this.origen = origen;
    this.destino = destino;
    this.precio = precio;
    this.transporte = transporte;
    this.datosViaje = () => {
        document.write(`Origen: ${this.origen}`)
        document.write(`<br>`)
        document.write(`Destino: ${this.destino}`)
        document.write(`<br>`)
        document.write(`Precio del viaje: ${this.precio}€`)
        document.write(`<br>`)
        document.write(`Método de transporte: ${this.transporte}`)
        document.write(`<br>`)
        document.write(`<br>`)
    }
}

const cancun = new Viaje('Madrid, España', 'Cancun', 1932.97, 'Avión')
const barcelona = new Viaje('Barcelona, España', 'Madrid, España', 43.71, 'Tren')
const vallecas = new Viaje('Vallecas, España', 'Barcelona, España', 90, 'Autobús')

cancun.datosViaje()
barcelona.datosViaje()
vallecas.datosViaje()

document.write('<hr>')