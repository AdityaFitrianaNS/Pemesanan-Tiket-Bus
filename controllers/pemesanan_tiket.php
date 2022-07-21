<?php
$conn = mysqli_connect("localhost","root","","db_tiket_bus");

// Fungsi query
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Fungsi untuk CREATE
function pesan($pesan) {
    // variabel $conn digunakan untuk variabel global
    // htmlspecialchars untuk menghapus tag html pada form input
    // stripslashes menghapus symbol yang digunakan pada form input
    global $conn;
    $nama = htmlspecialchars(stripslashes($pesan['nama']));
    $nomer_identitas = htmlspecialchars(stripslashes($pesan['nomer_identitas']));
    $no_hp = htmlspecialchars(stripslashes($pesan['no_hp']));
    $kelas_penumpang = htmlspecialchars(stripslashes($pesan['kelas_penumpang']));
    $jadwal_keberangkatan = htmlspecialchars(stripslashes($pesan['jadwal_keberangkatan']));
    $jumlah_penumpang = htmlspecialchars(stripslashes($pesan['jumlah_penumpang']));
    $jumlah_penumpang_lansia = htmlspecialchars(stripslashes($pesan['jumlah_penumpang_lansia']));
    $harga_tiket = htmlspecialchars(stripslashes($pesan['harga_tiket']));
    $total_bayar = htmlspecialchars(stripslashes($pesan['total_bayar']));
    
    // variabel untuk memasukan data ke tabel pemesanan tiket pada database
    $query = "INSERT INTO tb_pemesanan_tiket VALUES('','$nama','$nomer_identitas','$no_hp','$kelas_penumpang','$jadwal_keberangkatan',
            '$jumlah_penumpang','$jumlah_penumpang_lansia','$harga_tiket','$total_bayar')";
    // Fungsi php untuk menjalankan instruksi atau argumen ke mysql.
    mysqli_query($conn,$query);

    // Kembalikan jumlah baris yang melakukan query INSERT pada database
    return mysqli_affected_rows($conn);
    
}

?>