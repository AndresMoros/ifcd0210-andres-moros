// Calculadora de indice de disponibilidad

const calc = (inactiveHours, estimatedHours) => {
  let secsPerHour = 3600;
  let inactiveTime = inactiveHours * secsPerHour;
  let stimatedTime = estimatedHours * secsPerHour;
  let activeTime = stimatedTime - inactiveTime;
  
  // Formula para obtener disponibilidad de un servicio se hace tiempo activo * 100 / tiempo estimado
  let disp = (activeTime * 100) / stimatedTime;
  
  return parseFloat(disp.toFixed(3));
}


// Ejercicio 1.
//  Calcula el índice de disponibilidad de un sistema que estuvo detenido el año
// anterior durante 17 horas por una caída de tensión.
//  Además, por operaciones rutinarias se perdieron 5 horas cada mes y, en el mes
// de agosto, otras 4 por actualización de software.
hoursPerYear = 24 * 365;

console.log(calc(81, hoursPerYear));

// Ejercicio 2.
//  En una línea de proceso se opera 24 horas al día, 5 días a la semana.
//  El tiempo muerto programado para mantenimiento preventivo es de 1 hora cada semana.
//  La semana pasada, el tiempo muerto no programado debido a fallos del equipo y ajustes del mismo fue de 7 horas.
//  ¿Cuál fue su disponibilidad esa semana?

const hoursPerWeek = 24 * 5;

console.log(calc(8, hoursPerWeek));

// Ejercicio 3.
//  Necesitamos que una máquina funcione 12 horas al día, pero sabemos que se estropea de media 1 hora diaria.
//  Para repararla se necesita media hora adicional.
//  ¿Cuál es su disponibilidad diaria?

console.log(calc(1.5, 12));

// Ejercicio 4.
//  Calcular la disponibilidad de un equipo informático durante un periodo de funcionamiento de 24 horas diarias durante 30 días, teniendo en cuenta que estuvo detenido por mantenimiento preventivo durante 2 días y también, durante 12 horas, por un fallo de hardware.
//  Por otro lado, por motivos ajenos a mantenimiento o fallos, y de forma habitual, durante 4 horas a la semana el equipo no está operando.

hoursPerMonth = 24 * 30;

console.log(calc(76, hoursPerMonth)); 

// Ejercicio 5.
//  Un sistema va a estar en funcionamiento durante todo el año las 24 horas del día, los 7 días de la semana.


//  Una vez al mes el sistema será sometido a mantenimiento y actualizaciones durante 6 horas por lo que será necesario detenerlo.
//  En previsión de posibles indecencias ajenas a operaciones de mantenimiento,
// se estima que podría estar caído un total de 48 horas a lo largo del año. Según
// esta información, ¿Cuál es su índice de disponibilidad?

console.log(calc(120, hoursPerYear)); 