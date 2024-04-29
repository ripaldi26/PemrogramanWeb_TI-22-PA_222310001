function hitungSaldo() {
    var saldoAwal = parseInt(document.getElementById("saldo").value);
    var bunga = parseFloat(document.getElementById("bunga").value);
    var waktu = parseInt(document.getElementById("waktu").value);
    var hasil = document.getElementById("saldoResult");
    hasil.innerHTML = "";

    var saldo = saldoAwal;
    for (var i = 1; i <= waktu; i++) {
        saldo += saldo * (bunga / 100); // menambah saldo dengan bunga
        hasil.innerHTML += "Saldo Bulan " + i + " = Rp. " + saldo + "<br>";
    }

    document.getElementById("result").style.display = "block";
}