const changeFormat = (e) => {
    if (e.style.fontFamily === 'Verdana, serif') {
        // Restaurar al estado original
        e.style.color = '';
        e.style.textDecoration = '';
        e.style.textTransform = '';
        e.style.fontFamily = '';
    } else {
        // Aplicar los nuevos estilos
        e.style.color = '#faffd7';
        e.style.textDecoration = 'underline';
        e.style.textTransform = 'uppercase';
        e.style.fontFamily = 'Verdana, serif';
    };
}
document.querySelector('h1').addEventListener('mouseover', (e) => {
  changeFormat(e.target)
})
document.querySelector('h1').addEventListener('mouseout', (e) => {
  changeFormat(e.target)
})