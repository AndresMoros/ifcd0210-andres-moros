// Obtención de nombre y apellido del usuario

let nombre, apellido;

nombre = prompt('Escribe tu nombre');
apellido = prompt('Escribe tu apellido')

let nombreCompleto = `${nombre} ${apellido}`

// Solicitud de edad de usuario

let edad = prompt('Escribe tu edad');

let año = 2025 - parseInt(edad);

document.write(`
    <p>
    Nombre completo: ${nombreCompleto}
    </p>
    <p>
    Año de nacmiento: ${año}
    </p>
    
    `)