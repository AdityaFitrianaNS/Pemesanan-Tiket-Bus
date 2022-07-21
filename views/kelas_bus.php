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
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <!-- Icon -->
    <link rel="shortcun icon" href="../assets/img/icon.png">
    <title>Data BUS</title>
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
    </nav>
    <br><br>
    <!-- Container -->
    <div class="container-md mt-5">
        <h2 class="mb-5" style="text-align: center;">Kelas Bus</h2>
        <div class="row">
            <!-- Card Bus Ekonomi-->
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <div class="card" style="height: 25rem;">
                    <img src="../assets/img/bus_ekonomi.jpg" class="img-thumbnail" alt="bus_ekonomi" style="object-fit: cover; height: 225px;">
                    <div class="card-body py-2">
                        <h4 class="card-title mb-2">Bus Murni Jaya</h4>
                        <hr>
                        <p class="card-text mb-0">
                            Kelas : Ekonomi
                        </p>
                        <p class="card-text mb-0">
                            Kursi : 3-2 Setiap penumpang
                        </p>
                        <p class="card-text mb-1">
                            Fasilitas : Non AC
                        </p>
                        <a class="btn btn-md btn-primary btn-outline-info" data-bs-toggle="modal" data-bs-target="#bus_ekonomi">
                            <i class="bi bi-info-circle text-white"> Cek Harga</i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card Bus Bisnis -->
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <!-- Tinggi card 25rem -->
                <div class="card" style="height: 25rem;">
                    <img src="../assets/img/bus_bisnis.jpg" class="img-thumbnail" alt="bus_bisnis" style="object-fit: cover; height: 225px;">
                    <div class="card-body py-2">
                        <h4 class="card-title mb-2">Bus Amtrans</h4>
                        <hr>
                        <p class="card-text mb-0">
                            Kelas : Bisnis
                        </p>
                        <p class="card-text mb-0">
                            Kursi : 3-2 Setiap penumpang
                        </p>
                        <p class="card-text mb-1">
                            Fasilitas : AC dan Wi-Fi
                        </p>
                        <a class="btn btn-md btn-primary btn-outline-info" href="daftar_harga.php" data-bs-toggle="modal" data-bs-target="#bus_bisnis">
                            <i class="bi bi-info-circle text-white"> Cek Harga</i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card Bus Eksekutif -->
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <!-- Tinggi card 25rem -->
                <div class="card" style="height: 25rem;">
                    <img src="../assets/img/bus_eksekutif.jpg" class="img-thumbnail" alt="bus_eksekutif" style="object-fit: cover; height: 225px;">
                    <div class="card-body py-2">
                        <h4 class="card-title mb-2">Bus Trans Jawa</h4>
                        <hr>
                        <p class="card-text mb-0">
                            Kelas : Eksekutif
                        </p>
                        <p class="card-text mb-0">
                            Kursi : 3-2 Setiap penumpang
                        </p>
                        <p class="card-text mb-1">
                            Fasilitas : AC, Wi-Fi, dan Toilet
                        </p>
                        <a class="btn btn-md btn-primary btn-outline-info" href="daftar_harga.php" data-bs-toggle="modal" data-bs-target="#bus_eksekutif">
                            <i class="bi bi-info-circle text-white"> Cek Harga</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Harga Bus Ekonomi-->
    <div class="modal fade mt-4" id="bus_ekonomi" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Harga Tiket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-primary table-striped table-bordered border-primary" style="text-align: center; vertical-align: middle;">
                        <tr>
                            <th>Kelas Bus</th>
                            <th>Tujuan</th>
                            <th>Harga</th>
                        </tr>
                        <tr>
                            <td>Ekonomi</td>
                            <td>Cibinong - Bandung</td>
                            <td>Rp. 100.000</td>
                        </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer" style="margin-top: -10px;">
                    <a class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
                    <a href="pesan_tiket.php" class="btn btn-primary btn-outline-info text-white">Pesan Tiket</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Harga Bus Bisnis-->
    <div class="modal fade mt-4" id="bus_bisnis" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Harga Tiket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-primary table-striped table-bordered border-primary" style="text-align: center; vertical-align: middle;">
                        <tr>
                            <th>Kelas Bus</th>
                            <th>Tujuan</th>
                            <th>Harga</th>
                        </tr>
                        <tr>
                            <td>Bisnis</td>
                            <td>Cibinong - Bandung</td>
                            <td>Rp. 100.000</td>
                        </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer" style="margin-top: -10px;">
                    <a class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
                    <a href="pesan_tiket.php" class="btn btn-primary btn-outline-info text-white">Pesan Tiket</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Harga Bus Eksekutif-->
    <div class="modal fade mt-4" id="bus_eksekutif" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Harga Tiket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-primary table-striped table-bordered border-primary" style="text-align: center; vertical-align: middle;">
                        <tr>
                            <th>Kelas Bus</th>
                            <th>Tujuan</th>
                            <th>Harga</th>
                        </tr>
                        <tr>
                            <td>Eksekutif</td>
                            <td>Cibinong - Bandung</td>
                            <td>Rp. 150.000</td>
                        </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer" style="margin-top: -10px;">
                    <a class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
                    <a href="pesan_tiket.php" class="btn btn-primary btn-outline-info text-white">Pesan Tiket</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Script Javascript untuk menu responsive -->
    <script src="../assets/js/menu.js"></script>
    <!-- CDN Javascript Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>