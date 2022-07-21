SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tb_pemesanan_tiket` (
  `id_pemesan` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nomer_identitas` int(16) DEFAULT NULL,
  `no_hp` int(13) DEFAULT NULL,
  `kelas_penumpang` varchar(50) DEFAULT NULL,
  `tanggal_keberangkatan` date DEFAULT NULL,
  `jumlah_penumpang` int(4) DEFAULT NULL,
  `jumlah_penumpang_lansia` int(4) DEFAULT NULL,
  `harga_tiket` int(16) DEFAULT NULL,
  `total_bayar` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_pemesanan_tiket` (`id_pemesan`, `nama`, `nomer_identitas`, `no_hp`, `kelas_penumpang`, `tanggal_keberangkatan`, `jumlah_penumpang`, `jumlah_penumpang_lansia`, `harga_tiket`, `total_bayar`) VALUES
(1, 'Fitri', 2147483647, 2147483647, 'Ekonomi', '2022-07-20', 10, 10, 50000, 950000);

ALTER TABLE `tb_pemesanan_tiket`
  ADD PRIMARY KEY (`id_pemesan`);

ALTER TABLE `tb_pemesanan_tiket`
  MODIFY `id_pemesan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
