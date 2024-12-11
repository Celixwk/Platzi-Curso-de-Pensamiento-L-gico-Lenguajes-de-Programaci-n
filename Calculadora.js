const readline = require("readline");

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout,
});

// Función calculadora
function calculadora(num1, num2, operador) {
  let resultado;

  switch (operador) {
    case "+":
      resultado = num1 + num2;
      break;
    case "-":
      resultado = num1 - num2;
      break;
    case "*":
      resultado = num1 * num2;
      break;
    case "/":
      resultado = num2 !== 0 ? num1 / num2 : "Error: División por cero";
      break;
    default:
      resultado = "Operador inexistente";
      break;
  }

  console.log("El resultado es:", resultado);
  rl.close(); // Cierra la interfaz después de la ejecución
}

// Flujo para capturar entrada del usuario
rl.question("Digite un número: ", (input1) => {
  const num1 = parseFloat(input1);

  rl.question("Digite el operador (+, -, *, /): ", (operador) => {
    rl.question("Digite otro número: ", (input2) => {
      const num2 = parseFloat(input2);

      // Llama a la función calculadora
      calculadora(num1, num2, operador);
    });
  });
});
