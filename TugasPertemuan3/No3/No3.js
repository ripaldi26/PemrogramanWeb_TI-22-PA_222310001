function calculate() {
    var inputNumber = parseInt(document.getElementById("inputNumber").value);

    // Menghitung faktorial
    var faktorial = 1;
    for (var i = 2; i <= inputNumber; i++) {
        faktorial *= i;
    }

    // Menghitung jumlah deret
    var jumlahDeret = 0;
    for (var j = 1; j <= inputNumber; j++) {
        jumlahDeret += j;
    }

    document.getElementById("faktorialResult").innerText =
        "Faktorial dari " + inputNumber + " adalah: " + faktorial;
    document.getElementById("jumlahDeretResult").innerText =
        "Jumlah deret sampai ke " + inputNumber + " adalah: " + jumlahDeret;

    document.getElementById("result").style.display = "block";
}
