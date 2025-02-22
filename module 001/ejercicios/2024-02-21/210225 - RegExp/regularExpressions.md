Ejercicios Expresiones 1
Crear las expresiones regulares que coincidan con los criterios que se indican. Si son posibles
varias expresiones para un mismo criterio, incluye todas.

- Construye una frase que tenga en varias palabras el patrón literal `/la/`.
    - La lámpara lame la luz
    - Las abejas polinizan las flores en la montaña
- Patrón que coincida con _no_, _noo_ o _nooo_.
    - `/no+/`
- Patrón que coincida con _n_ o _no_.
    - `/n*o{1, 1}/`
- Una palabra cualquiera con un número intercalado.
    - /Micro\dSoft/
- Una palabra cualquiera con un espacio en blanco intercalado.
    - `/Micro\b Soft/`
- Una palabra cualquiera con un espacio en blanco, salto de tabulación o salto de línea
intercalado (usar el carácter que permite todas las opciones a la vez).
    - `/\w+\s\w+/`
- Patrón que coincida con la palabra apple.
    - `/apple/`
- Patrón que coincida con las palabras apple, appple y apppple.
    - `/ap{2,}le/`
- Patrón que coincida con las palabras Ana y Ala.
    - `/A[nl]a/`
- Un patrón de coincidencia con una palabra de 2 letras que termine en una “e”, y
empiece por “a”, “h”, “l” o “r”
    - /^[ahlr][e]$/
- Un patrón para obtener cualquier conjunto de caracteres que empiecen por una de
stas letras: j, k, l, m, n, ñ, o, p, y tenga a continuación los caracteres 123.
- Una expresión que coincida con una palabra que termine por x, y o z, y empiece por
oordenadas.
- Un patrón coincida con cualquiera de las siguientes palabras: informe 1, informe 2 onforme 3.
- Crear una expresión que coincida con las palabras casa o pasa.
- Un patrón para obtener cualquiera de estas palabras: capa o copa.
- Patrón para una fecha como 12-07-2023.
- Patrón para un pin con 4 caracteres alfanumérico