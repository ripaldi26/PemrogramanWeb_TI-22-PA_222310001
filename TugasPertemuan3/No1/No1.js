function submitForm() {
    var nim = document.getElementById("nim").value;
    var nama = document.getElementById("nama").value;
    var jenisKelamin = document.getElementById("jenisKelamin").value;
    var agama = document.getElementById("agama").value;
    var status = document.getElementById("status").value;
    var jurusan = document.getElementById("jurusan").value;
    var komentar = document.getElementById("komentar").value;

    document.getElementById("hasilNim").innerText = "NIM: " + nim;
    document.getElementById("hasilNama").innerText = "Nama: " + nama;
    document.getElementById("hasilJenisKelamin").innerText = "Jenis Kelamin: " + jenisKelamin;
    document.getElementById("hasilAgama").innerText = "Agama: " + agama;
    document.getElementById("hasilStatus").innerText = "Status: " + status;
    document.getElementById("hasilJurusan").innerText = "Jurusan: " + jurusan;
    document.getElementById("hasilKomentar").innerText = "Komentar: " + komentar;

    document.getElementById("result").style.display = "block";
}