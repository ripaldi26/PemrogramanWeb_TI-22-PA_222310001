function hitungTotal() {
            var nama = document.getElementById("nama").value;
            var tujuan = document.getElementById("tujuan").value;
            var kelas = document.getElementById("kelas").value;
            var jumlah = parseInt(document.getElementById("jumlah").value);
            var statusMember = document.querySelector('input[name="status_member"]:checked').value;
            
            var hargaTiket = {
                "Jakarta": {"Eksekutif": 70000, "Bisnis": 40000, "Ekonomi": 10000},
                "Solo": {"Eksekutif": 80000, "Bisnis": 50000, "Ekonomi": 20000},
                "Surabaya": {"Eksekutif": 90000, "Bisnis": 60000, "Ekonomi": 30000}
            };
            
            var hargaPerTiket = hargaTiket[tujuan][kelas];
            var subtotal = hargaPerTiket * jumlah;
            var diskon = (statusMember === "Member") ? 0.1 * subtotal : 0;
            var totalBayar = subtotal - diskon;
            
            document.getElementById("detailNama").innerText = "Nama Pemesan: " + nama;
            document.getElementById("detailTujuan").innerText = "Tujuan: " + tujuan;
            document.getElementById("detailKelas").innerText = "Kelas: " + kelas;
            document.getElementById("detailJumlah").innerText = "Banyak Tiket: " + jumlah;
            document.getElementById("detailStatus").innerText = "Status Member: " + statusMember;
            document.getElementById("tagihanTiket").innerText = "Harga Tiket: Rp " + hargaPerTiket.toLocaleString();
            document.getElementById("tagihanSubtotal").innerText = "Subtotal: Rp " + subtotal.toLocaleString();
            document.getElementById("tagihanDiskon").innerText = "Diskon: Rp " + diskon.toLocaleString();
            document.getElementById("totalBayar").innerText = "Total Bayar: Rp " + totalBayar.toLocaleString();

            document.getElementById("result").style.display = "block";
        }