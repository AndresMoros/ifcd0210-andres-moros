const btn1 = document.getElementById("ej1-btn");

    const calcPo = (num) => (isNaN(num) ? "Error" : num ** 3);
    // Se comprueba que los parámetros sean números

    const calcHigh = (num1, num2) =>
      isNaN(num1) || isNaN(num2)
        ? // Se comprueba que los parámetros sean números
          `Debes introducir dos números`
        : num1 > num2
        ? `${num1} es mayor que ${num2}`
        : `${num2} es mayor que ${num1}`;

    const completeName = (str1, str2) => `${str1} ${str2}`;

    btn1.addEventListener("click", (e) => {
      e.preventDefault();
      const num = parseInt(document.getElementById("num").value);
      document.querySelector(".calcPo-output").innerHTML =
        calcPo(num) == "Error"
          ? "Introduce un número"
          : `La potencia de ${num} es igual a ${calcPo(num)}`;
    });

    document.forms.calc_higher.higher_btn.addEventListener("click", (e) => {
      e.preventDefault();
      document.getElementById("higher-output").innerHTML = calcHigh(
        parseFloat(document.forms.calc_higher.higher1.value),
        parseFloat(document.forms.calc_higher.higher2.value)
      );
      document.forms.calc_higher.higher1.value = "";
      document.forms.calc_higher.higher2.value = "";
    });

    document.forms.complete_name.name_btn.addEventListener("click", (e) => {
      e.preventDefault();
      const name = document.forms.complete_name.name.value;
      const lastName = document.forms.complete_name.lastName.value;
      document.querySelector('#name_output').innerHTML = `${completeName(name, lastName)}`
      document.forms.complete_name.name.value = ''
      document.forms.complete_name.lastName.value = ''
    });