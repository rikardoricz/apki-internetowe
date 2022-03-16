function check() {
    const num = document.getElementById("num").value;
    alert(num);

    isNaN(num) ? document.getElementById("info").innerHTML = "nie podano liczby" :
    num > 0 ? document.getElementById("info").innerHTML = "dodatnia" :
    num < 0 ? document.getElementById("info").innerHTML = "ujemna" :
    document.getElementById("info").innerHTML = "zero";
}

function przedzial() {
    const a = document.getElementById("poczatek").value;
    const b = document.getElementById("koniec").value;
    const c = document.getElementById("liczba").value;
    const output = document.getElementById("output");
    let x = 0;

    if (a < b) {
        x = a;
        for (let i = x; i<=b; i++) {
            document.getElementById("output").innerHTML += i + "<br />";
            x++;
        }
        if (c > a && c < b)
            document.getElementById("output").innerHTML += "c należy do przedziału";
        else
            document.getElementById("output").innerHTML += "c nie należy do przedzialu";
    } else {
        x = a;
        for (let i = x; i>=b; i--) {
            document.getElementById("output").innerHTML += i + "<br />";
            x--;
        }
        if (c > b && c < a)
            document.getElementById("output").innerHTML += "c należy do przedziału";
        else
            document.getElementById("output").innerHTML += "c nie należy do przedziału";
    }
}