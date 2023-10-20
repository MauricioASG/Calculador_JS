const readline = require('readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

function obtenerEntradaNumerica(mensaje, callback) {
  rl.question(mensaje, (entrada) => {
    const numero = parseFloat(entrada);
    if (isNaN(numero)) {
      console.log('Por favor, ingresa un número válido.');
      obtenerEntradaNumerica(mensaje, callback);
    } else {
      callback(numero);
    }
  });
}

function realizarOperacion(operador, num1, num2) {
  switch (operador) {
    case '+':
      return num1 + num2;
    case '-':
      return num1 - num2;
    case '*':
      return num1 * num2;
    case '/':
      if (num2 === 0) {
        return 'Error: División por cero';
      }
      return num1 / num2;
    default:
      return 'Operador no válido';
  }
}

function calculadora() {
  console.log('Calculadora Simple');
  obtenerEntradaNumerica('Ingresa el primer número: ', (numero1) => {
    obtenerEntradaNumerica('Ingresa el segundo número: ', (numero2) => {
      rl.question('Selecciona una operación (+, -, *, /): ', (operador) => {
        const resultado = realizarOperacion(operador, numero1, numero2);
        console.log(`Resultado: ${resultado}`);
        rl.close();
      });
    });
  });
}

calculadora();
