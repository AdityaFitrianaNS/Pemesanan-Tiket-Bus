<h1 align="center"> Pemesanan Tiket Bus AKAP </h1>

## Menu

- Menu gambar 
  Digunakan untuk gambar bus beserta deskripsi singkat.
- Modal
  Masing-masing jenis bus memiliki modal yang berbeda untuk menampilkan tabel harga tiket.
- Pemesanan Tiket
  Untuk memesan tiket keberangkatan menggunakan bus.
- Invoice
  Bukti pembayaran setelah pemesanan tiket.

## Cara Penggunaan
  
Jika menggunakan github : 
- Masuk ke repositori github
- Pilih button code
- Pada dropdown, pilih download zip
- Setelah terdownload, extract file kedalam folder `htdocs`
- Setelah di extract, buat database pada phpmyadmin, dengan nama **db_tiket_bus**
- Masuk ke database **db_tiket_bus**
- Pada bagian atas ada `import`, klik import
- Pada form upload file, `import` file sql yaitu **db_tiket_bus** yang ada pada hasil extract di `htdocs`
- Scroll kebawah ada button import, klik `import`
- Tunggu proses import file sql
- Jika berhasil, maka akan ada tabel bernama **tb_pemesanan_tiket** dan data yang sudah di import untuk **db_tiket_bus**.

### Teknologi yang dipakai

Aplikasi :
- XAMPP (Untuk mengaktifkan localhost)

Code Editor :
- Visual Studio Code
  
Teknologi yang digunakan :
- HTML5
- CSS3
- Javascript
- PHP8
- MySQL 
- Sweetalert 2 (Library)

## Kegunaan Folder
- Folder assets
  Menaruh file yang berkaitan styling/user interface seperti css dan javascript. beserta, resouce foto/gambar.
- Folder controllers
  File fungsi yang menjalankan digunakan sebagai proses pengolahan data/pengiriman data seperti pada saat menggunakan method `POST` atau `GET`.
- Folder views
  Folder yang digunakan untuk menampung file program yang berisikan desain antarmuka website. folder views untuk mempermudah pengelompokan desain antarmuka yang anda buat.
