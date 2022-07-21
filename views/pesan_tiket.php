<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CDN Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CDN Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CDN Boxicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- CSS Navbar -->
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <!-- CSS Card -->
    <link rel="stylesheet" href="../assets/css/form_tiket.css">
    <!-- Icon -->
    <link rel="shortcun icon" href="../assets/img/icon.png">
    <title>Pemesanan Tiket</title>
</head>
<body>
    <!-- Navbar (Navigasi Bar) -->
    <nav class="shadow">
        <a href="#" class="logo">BusID</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="../index.html">Home</a></li>
            <li><a href="kelas_bus.php">Kelas Bus</a></li>
            <li><a href="pesan_tiket.php">Pesan Tiket</a></li>
            <li><a href="invoice.php">Invoice</a></li>
        </ul>
        <div class="user">
            <a href="#">
                <i class="bx bxs-user-account"></i> Hai, User
            </a>
        </div>
    </nav> -->
    <br><br>
    <div class="container-lg mt-4">
        <div class="card">
            <form action="" method="post">
                <div class="row ms-5 me-0 mb-3">
                    <h3 class="mb-4 mt-3">Form Pemesanan</h3>
                    <label for="nama" class="col-sm-5 col-form-label">Nama Lengkap</label>
                    <div class="col-md-6">
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama pemesan tiket" maxlength="50" required>
                    </div>
                </div>
                <div class="row ms-5 me-0 mb-3">
                    <label for="nomer_identitas" class="col-sm-5 col-form-label">Nomer Identitas</label>
                    <div class="col-md-6">
                        <input type="number" name="nomer_identitas" class="form-control" min="0" placeholder="Masukkan nomer identitas" required 
                        onKeyDown="limitText(this,16);" onKeyUp="limitText(this,16)">
                    </div>
                </div>
                <div class="row ms-5 me-0 mb-3">
                    <label for="no_hp" class="col-sm-5 col-form-label">No. HP</label>
                    <div class="col-md-6">
                        <input type="number" name="no_hp" class="form-control" min="0" placeholder="Masukkan nomer hp" required
                        onKeyDown="limitText(this,13);" onKeyUp="limitText(this,13)">
                    </div>
                </div>
                <div class="row ms-5 me-0 mb-3">
                    <label for="kelas_penumpang" class="col-sm-5 col-form-label">Kelas Penumpang</label>
                    <div class="col-md-6">
                        <select class="form-select" name="kelas_penumpang" id="kelas_penumpang" onchange="hargaTiket()" required>
                            <option selected>Pilih Kelas Bus</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Bisnis">Bisnis</option>
                            <option value="Eksekutif">Eksekutif</option>
                        </select>
                    </div>
                </div>
                <div class="row ms-5 me-0 mb-3">
                    <label for="jadwal_keberangkatan" class="col-sm-5 col-form-label">Jadwal Keberangkatan</label>
                    <div class="col-md-6">
                        <input type="date" name="jadwal_keberangkatan" class="form-control" required>
                    </div>
                </div>
                <div class="row ms-5 me-0 mb-0">
                    <label for="jumlah_penumpang" class="col-sm-5 col-form-label" style="margin-top: -7px;"> Jumlah Penumpang <br>
                        <small style="font-size: 12px;">Bukan Lansia (Usia < 60)</small>
                    </label>
                    <div class="col-md-6">
                        <input type="number" name="jumlah_penumpang" id="jumlah_penumpang" class="form-control" min="0" placeholder="Jumlah penumpang Biasa" required
                        onKeyDown="limitText(this,4);" onKeyUp="limitText(this,4)">
                    </div>
                </div>
                <div class="row ms-5 me-0 mb-1">
                    <label for="jumlah_penumpang_lansia" class="col-sm-5 col-form-label" style="margin-top: -7px;">Jumlah Penumpang Lansia<br>
                        <small style="font-size: 12px;">Usia 60 Tahun Keatas</small>
                    </label>
                    <div class="col-md-6">
                        <input type="number" name="jumlah_penumpang_lansia" id="jumlah_penumpang_lansia" class="form-control" min="0" placeholder="Jumlah penumpang lansia" required
                        onKeyDown="limitText(this,4);" onKeyUp="limitText(this,4)">
                    </div>
                </div>
                <div class="row ms-5 me-0">
                    <label for="harga_tiket" class="col-sm-5 col-form-label">Harga Tiket</label>
                    <div class="col-md-6">
                        <p class="mt-1" style="display: flex;">
                            Rp. <input type="number" name="harga_tiket" id="harga_tiket" class="form-control" readonly required 
                            style="border: none; margin-top: -5px;">
                        </p>
                    </div>
                </div>
                <div class="row ms-5 me-0">
                    <label for="total_bayar" class="col-sm-5 col-form-label">Total Bayar</label>
                    <div class="col-md-6">
                        <p class="mt-1" style="display: flex;">
                            Rp. <input type="number" name="total_bayar" id="total_bayar" class="form-control" readonly required
                            style="border: none; margin-top: -5px;">
                        </p>
                    </div>
                </div>
                <div class="row ms-5 me-0 mb-2">
                    <label for="total_bayar" class="col-sm-11 col-form-label">
                        <input type="checkbox" name="setuju" required>
                        Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah
                        ditetapkan.
                    </label>
                </div>
                <div class="row ms-5 me-0 mb-2">
                    <div class="btn-inline">
                        <button type="button" class="btn btn-md btn-secondary m-1" data-bs-dismiss="modal" style="width: 268px;">
                            <a href="kelas_bus.php" class="text-white">Cancel</a>
                        </button>
                        <button type="submit" name="pesan" class="btn btn-md btn-primary btn-outline-info text-light" style="width: 268px;">
                            Pesan Tiket
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
    <!-- CDN Javascript Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CDN Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- CDN Sweetalert 2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function limitText(limitField, limitNum) {
            if (limitField.value.length > limitNum) {
                limitField.value = limitField.value.substring(0, limitNum);
            }
        }

        // Fungsi untuk mengisi value harga tiket sesuai kelas bus yang dipilih
        function hargaTiket() {
            // variabel untuk memilih elemen berdasarkan atribut id
            const kelas = document.getElementById("kelas_penumpang").value;
            const hargaTiket = document.getElementById("harga_tiket");

            // Cek kelas pada dropdown kelas yang dipilih
            if (kelas == "Ekonomi") {
                hargaTiket.value = 50000
            } else if (kelas == "Bisnis") {
                hargaTiket.value = 100000
            } else if (kelas == "Eksekutif") {
                hargaTiket.value = 150000;
            }
        }

        // Jquery untuk menghitung secara live pada form input
        $("#jumlah_penumpang_lansia").keyup(function() {
            // parseInt untuk mengkonversi sebuah string menjadi angka(integer)
            var jumlah_penumpang = parseInt($("#jumlah_penumpang").val());
            var jumlah_penumpang_lansia = parseInt($("#jumlah_penumpang_lansia").val());
            var harga_tiket = parseInt($("#harga_tiket").val());
            // Variabel dan kondisional perhitungan
            var harga_penumpang_biasa = jumlah_penumpang * harga_tiket;
            if (jumlah_penumpang_lansia > 0) {
                var potongan = harga_tiket * 0.1;
                var potongan_harga_lansia = jumlah_penumpang_lansia * potongan;
                var total_harga_lansia = (jumlah_penumpang_lansia * harga_tiket) - potongan_harga_lansia;
                // Menghitung total bayar
                var total_bayar = harga_penumpang_biasa + total_harga_lansia;
            } else {
                // Menghitung total bayar tanpa penumpang lansia
                var total_bayar = harga_penumpang_biasa + jumlah_penumpang_lansia;
            }
            // Mencetak hasil operasi perhitungan yang diambil variabel total_bayar
            $("#total_bayar").val(total_bayar);
        });

        <?php
        require '../controllers/pemesanan_tiket.php';
        
        // Jika button pesan ditekan
        if (isset($_POST["pesan"])) {
            // Cek apakah tiket berhasil ditambahkan atau tidak
            if (pesan($_POST) > 0) {
        ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Tiketmu berhasil dipesan!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location.href = 'invoice.php';
                    }
                })
        <?php
                // jika gagal pesan tiket, maka menampilkan alert gagal
            } else {
                echo "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: 'Silahkan isi form dengan benar!',
                    }).then((result) => {
                    if (result.isConfirmed) {
                        document.location.href = 'pesan_tiket.php';
                    }
                })
                </script>
                ";
                exit;
            }
        }
        ?>
    </script>
</body>
</html>