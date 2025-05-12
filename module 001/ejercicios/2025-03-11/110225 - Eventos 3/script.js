const buttons = document.querySelectorAll("button");
const nameInput = document.getElementById("name");
const comprobarNombre = (str) => {
    output = document.getElementById("output-name");
    output.innerText = ''
    const regex = /\w{5,30}/
    if (!regex.test(str)) {
        output.innerText = "¡Formato de texto incorrecto! Escribe tu nombre de nuevo"
    } else {
        output.innerText = "¡Formato de texto correcto! Los datos serán enviados."
    }
}

nameInput.addEventListener('blur', (e) => {
    if (e.target.id == 'name') {
        comprobarNombre(document.getElementById('name').value)
    }
})

document.forms[0].elements['form_1-btn'].addEventListener('click', (e) => {
    e.preventDefault();
    output = document.getElementById("output-name");
    output.innerText = 'Datos enviados'
});

document.forms[0].elements['form_1-btn'].addEventListener('click', (e) => {
    e.preventDefault();
    output = document.getElementById("output-name");
    output.innerText = 'Datos enviados'
});