// • Crea un objeto denominado Círculos.
// • A partir de él, crea 3 círculos (instancias) de 3, 8 y 12 metros de radio.
// • El objeto contendrá una propiedad, el radio y 3 métodos para:
// o calcula el diámetro, sabiendo que éste es dos veces el radio.
// o calcula la circunferencia mediante la fórmula: 2 * PI * radio.
// o calcula el área del círculo, mediante la multiplicación de PI por el radio
// al cuadrado.
// • El valor de PI cárgalo en una constante y utiliza el radio como parámetro del
// objeto.
// • Los métodos, además de las operaciones, mostrarán un mensaje por pantalla
// con el cálculo realizado similar a éste: El diámetro/área/circunferencia de un
// círculo de radio … es … .
// • Ejecuta los 3 métodos para los 3 círculos.
// • Como alternativa, prueba:
// o En lugar del valor de PI como constante, usa la propiedad PI del objeto
// Math de JavaScript.
// o La función pow (base, exponente) del objeto Math para calcular el área
// del círculo.

function Circulo(radio) {
    this.radio = radio;
    this.diametro = () => this.radio * 2;
    this.circunferencia = () => (2 * Math.PI * this.radio).toFixed(2);
    this.area = () => Math.pow((Math.PI * this.radio), 2).toFixed(2)
    this.showSpecs = () => {
        document.write(`El diámetro de un círulo de radio ${this.radio}m es ${this.diametro()}m`)
        document.write(`<br>`)
        document.write(`La circunferencia de un círulo de radio ${this.radio}m es ${this.circunferencia()}`)
        document.write(`<br>`)
        document.write(`El área de un círulo de radio ${this.radio}m es ${this.area()}`)
        document.write(`<br><br>`)
    } 
}

const circulo3 = new Circulo(3)
const circulo8 = new Circulo(8)
const circulo12 = new Circulo(12)

circulo3.showSpecs()
circulo8.showSpecs()
circulo12.showSpecs()