// const awnser1 = document.getElementById("res");
// const valPostalCode = (code) =>
//   /^\d{5}$/.test(code)
//     ? (awnser1.innerText = `${code} es un código postal válido`)
//     : (awnser1.innerText = `${code} NO un código postal válido`);

// document.getElementById("btn_1").addEventListener("click", () => {
//   const code = document.getElementById("code").value;
//   valPostalCode(code);
// });

// // ----------------------

// const awnser2 = document.getElementById("res2");
// const daysRegExp =
//   /(lunes|martes|miercoles|jueves|viernes|sabado|sábado|domingo)\s\d{1,2}/i;
// const valDayAndNumber = (usr) =>
//   daysRegExp.test(usr)
//     ? (awnser2.innerText = `${usr} cumple el formato`)
//     : (awnser2.innerText = `${usr} NO cumple el formato`);

// document.getElementById("btn_2").addEventListener("click", () => {
//   const str = document.getElementById("dayNumber").value;
//   valDayAndNumber(str);
// });

let nums = [1, 2, 333, 123, 12, 51321, 1231]
let num1 = 2, num2 = 3;
let evaluacion = "Resultado de num1 + num2:" + num1 + num2;
// let evaluacion = `Resultado de num1 + num2: ${num1 + num2}`;

console.log(evaluacion)