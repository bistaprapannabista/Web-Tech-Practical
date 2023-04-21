function calculate(o) {
  x = Number(document.getElementById("input1").value);
  y = Number(document.getElementById("input2").value);
  result = null;
  switch (o) {
    case "+":
      result = x + y;
      break;
    case "-":
      result = x - y;
      break;
    case "*":
      result = x * y;
      break;
    case "/":
      result = x / y;
      break;
  }
    return result;
  }

function calculator(operator) {
  document.getElementById("output").innerHTML = `The result is ${calculate(operator)}`;
}
