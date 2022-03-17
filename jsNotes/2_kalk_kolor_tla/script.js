function calculate() {
    let num1 = document.getElementById("num1").value;
    let num2 = document.getElementById("num2").value;
    let resultPlace = document.getElementById("result");
    let result = 0;
    
    let operator = document.getElementById("operator");
    let selectedOperator = operator.value;

    if (num1 === '' || num2 === '') {
        resultPlace.innerHTML = "nie wpisano liczby";
    } else {
        switch(selectedOperator) {
            case '+':
                result = num1 + num2;
                break;
            case '-':
                result = num1 - num2;
                break;
            case '*':
                result = num1 * num2;
                break;
            case '/':
                if (num2 == 0) resultPlace.innerHTML = "nie dziel przez 0 !"
                else result = num1 / num2;
                break;
            default:
                result = undefined;
                resultPlace.innerHTML = "blad";
        }
    
        resultPlace.innerHTML += "Wynik: " + result + "</br>";
    }
}
