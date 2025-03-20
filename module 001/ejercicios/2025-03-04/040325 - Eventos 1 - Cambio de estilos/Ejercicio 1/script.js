const parrafo_1 = document.getElementById("parrafo_1");

const changeFormat = (e) => {
    e.style.color == ('' | 'normal') ?
    e.style.cssText = 'color: #00c268;letter-spacing: 12px; font-size: 30px' :
    e.style.cssText = 'color: normal;letter-spacing: normal; font-size: normal';
}

// const changeFormat = () => {
//     parrafo_1.style.color == ('' | 'normal') ?
//     parrafo_1.style.cssText = 'color: #00c268;letter-spacing: 12px;font-size: 30px' :
//     parrafo_1.style.cssText = 'color: normal;letter-spacing: normal;font-size: normal';
// }

// parrafo_1.onclick = changeFormat;

parrafo_1.addEventListener('click', () => {
    changeFormat(parrafo_1)
})