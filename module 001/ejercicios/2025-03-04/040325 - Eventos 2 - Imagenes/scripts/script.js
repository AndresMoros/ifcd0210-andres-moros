// EJERCICIO 1

// Crea un script con las funciones necesarias que permitan que, al pasar por encima de la imagen con el ratón sin pulsar sobre ella, ésta sea sustituida por la imagen denominada activada.jpg, y la salir con el ratón de la imagen, vuelva a  mostrarse la primera

const change = (e) => {
    const currentPic = document.getElementById(`${e.id}`).src
    if(currentPic.match(/atenuada/)) {
        e.src = "img/activada.jpg"
    } else {
        e.src = "img/atenuada.jpg"
    }
}

document.getElementById("img").addEventListener("mouseover", (e) => change(e.target))
document.getElementById("img").addEventListener("mouseout", (e) => change(e.target))

// EJERCICIO 2

const changeIco = (e) => {
    const defaultPics = ['actualizar', 'check', 'mas'];
    const icons = document.querySelectorAll(".imagen-cambiante");
    const el = document.getElementById(`${e.id}`);
    let currentPic = el.src;
    if(currentPic.match(defaultPics[0]) && el.id == icons[0].id) {
        el.src = 'img/cancelar.ico'
    } else if(currentPic.match(/cancelar/) && el.id == icons[0].id){
        el.src = 'img/actualizar.ico'
    }
    // -----------
    if(currentPic.match(defaultPics[1]) && el.id == icons[1].id) {
        el.src = 'img/deshacer.ico'
    } else if (currentPic.match(/deshacer/) && el.id == icons[1].id) {
        el.src = 'img/check.ico'
    }
    // -----------
    if(currentPic.match(defaultPics[2]) && el.id == icons[2].id) {
        el.src = 'img/flecha.ico'
    } else if(currentPic.match(/flecha/) && el.id == icons[2].id){
        el.src = 'img/mas.ico'
    }
    // -----------
    // if(currentPic//)
}

document.querySelector("#img1").addEventListener("mouseover", (e) => changeIco(e.target))
document.querySelector("#img1").addEventListener("mouseout", (e) => changeIco(e.target))

document.querySelector("#img2").addEventListener("mouseover", (e) => changeIco(e.target))
document.querySelector("#img2").addEventListener("mouseout", (e) => changeIco(e.target))

document.querySelector("#img3").addEventListener("mouseover", (e) => changeIco(e.target))
document.querySelector("#img3").addEventListener("mouseout", (e) => changeIco(e.target))