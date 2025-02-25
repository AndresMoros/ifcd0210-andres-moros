# Ejercicios Expresiones 3

Crear las expresiones regulares que coincidan con los criterios que se indican. Si son posibles
varias expresiones para un mismo criterio, incluye todas.

1. Patrón que muestre coincidencias con todas las palabras que empiecen por “j”.
	- `/j[A-Za-z]{1,}/gm`
2. Patrón que muestre coincidencias con todas las palabras que empiecen por “buenos”.
	- `/\bbuenos(?!\w+)/gm`
3. Patrón que muestre coincidencias con todas las palabras que terminen en “s”.
	- `/\w+s\b/gm`
4. Patrón que muestre coincidencias con todas las palabras que terminen en “dez”.
	- `/\w{1,}(dez)/g`
5. Patrón que incluya “Castilla” y a continuación “La Mancha”.
	- `/(Castilla)\b (La\b Mancha)/g`
6. Patrón que incluya “Castilla” y a continuación “-León” pero no “La Mancha”. (Incluir ambas opciones).
	- `/Castilla|(-León)|Castilla(?! La Mancha)/g`
7. Escribe un patrón que cuya primer carácter sea cualquier letra minúscula, la segunda cualquier vocal minúscula acentuada y a partir de la segunda, cualquier letra minúscula o mayúscula.
	- `/^[a-z][áéíóú][A-Za-z]$/`
8. Escribe un patrón que cuya primera palabra sea cualquier letra minúscula, la segunda cualquier vocal minúscula acentuada y, a partir de la segunda, 4 dígitos en número de 2 a 7.
	- `/^[a-z][áéíóú][2-7]{4}$/`
9. Escribe un patrón empiece por 3 dígitos cualesquiera, el cuarto sea cualquier vocal minúscula acentuada y, a partir de la cuarta, otros 3 dígitos cualesquiera.
	- `/^[0-9]{3}[áéíóú][0-9]{3}$/`
10. Escribe un patrón para las palabras “vaca” o “baca”, escritas indistintamente en mayúsculas o minúsculas.
	- `/[b|v]aca/i`
11. Con el siguiente patrón /.a.o/i con cuál de las siguientes palabras habría coincidencia: palo, pato, Dato, pata, maTo, NATO, gATo, Neto
	- `/.a.o/gm`
12. Escribe un patrón que incluya todas las coincidencias de la palabra “tiempo” en la frase “El hombre del tiempo dice que va a hacer mal tiempo”.
	- `/\btiempo\b/gm`
13. Escribe un patrón para un DNI
	- `/[A-Z]*[0-9]{8}[A-Z]/`
14. Escribe un patrón para una dirección de correo electrónico.
	- `/^\w+@([(hot)|(g)]mail)|(outlook)\.(com)|(es)/`
15. Escribe un patrón que busque un número de 2 dígitos de todas las formas posibles que se te ocurran.
	- `/\d\d/gm`