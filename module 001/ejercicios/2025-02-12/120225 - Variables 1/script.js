// Declaración de variables para valores
let x, e, y;
x = 10;
e = 21;
y = 1;

// Declaración de variables para operar las variables

let SUM, RES, MUL, DIV;

SUM = x + y + e;
RES = e - y - x;
MUL = x * y;
DIV = e / x;

document.write(`
    <p>El valor de la variable x es ${x}
    <br>
    El valor de la variable e es ${e}
    <br>
    El valor de la variable y es ${y}
    <br>
    </p>
    <!-- Operaciones con las variables -->
    <p>La suma de todas las viables es ${SUM}
    <br>
    La resta de todas las variables es ${RES}
    <br>
    Multiplicar x * y es igual a ${MUL}
    <br>
    Dividir e * x es igual a ${DIV}
    <br>
    </p>
    `);

// Declaración de variables dni y letra_dni

let dni = 64098241
let letra_dni = 'Z'

const DNI = letra_dni + dni;

document.write(`
    <p>La letra del DNI es ${letra_dni}
    <br>
    El número del DNI es ${dni}
    </p>
    <!-- Operaciones con las variables -->
    <p>El DNI completo es ${DNI}
    </p>
    `);