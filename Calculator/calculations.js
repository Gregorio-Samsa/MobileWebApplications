var operandA;
var operandB;
var operation;

function clear(){
    result.textContent = "";
    operandA = "";
    operandB = "";
    operation = "";
}

function solve(){
    var res = 0;
    switch(operation){
      case "+":
        res = parseFloat(operandA) + parseFloat(operandB);
        break;
      case "-":
        res = parseFloat(operandA) - parseFloat(operandB);
        break;
      case "*":
        res = parseFloat(operandA) * parseFloat(operandB);
        break;
      case "/":
        res = parseFloat(operandA) / parseFloat(operandB);
        break;
    }
    clear();
    result.textContent = res;
  }

one.onclick = function(e){
    result.textContent = result.textContent  + "1";
}
two.onclick = function(e){
    result.textContent = result.textContent  + "2";
}
three.onclick = function(e){
    result.textContent = result.textContent  + "3";
}
four.onclick = function(e){
    result.textContent = result.textContent  + "4";
}
five.onclick = function(e){
    result.textContent = result.textContent  + "5";
}
six.onclick = function(e){
    result.textContent = result.textContent  + "6";
}
seven.onclick = function(e){
    result.textContent = result.textContent  + "7";
}
eight.onclick = function(e){
    result.textContent = result.textContent  + "8";
}
nine.onclick = function(e){
    result.textContent = result.textContent  + "9";
}
zero.onclick = function(e){
    result.textContent = result.textContent  + "0";
}
c.onclick = function(e){
    clear();
}
addition.onclick = function(e){
    operandA = result.textContent;
    operation = "+";
    result.textContent = ""
}
substraction.onclick = function(e){
    operandA = result.textContent;
    operation = "-";
    result.textContent = ""
}
multiplication.onclick = function(e){
    operandA = result.textContent;
    operation = "*";
    result.textContent = ""
}
division.onclick = function(e){
    operandA = result.textContent;
    operation = "/";
    result.textContent = ""
}
equal.onclick = function(e){
    operandB = result.textContent;
    solve();
}