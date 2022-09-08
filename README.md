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

## Cara penggunaan lewat ZIP pada Github

Pastikan sudah terinstall code editor, XAMPP, dan PHP versi 8

Jika dari github menggunakaan zip : 

- Pilih button `code` yang berwarna hijau
- Pada dropdown, pilih `download zip`
- Setelah terdownload, extract file kedalam folder `htdocs` yang ada pada folder local
- Setelah di extract, buat database pada phpmyadmin, dengan nama **db_tiket_bus**
- Masuk ke database **db_tiket_bus**
- Pada bagian atas ada `import`, klik import
- Pada form upload file, `import` file sql **db_tiket_bus** yang ada pada hasil extract di `htdocs`
- Scroll kebawah akan ada button import, klik `import`
- Tunggu proses import file sql
- Jika berhasil, maka akan ada tabel yang muncul ketika sudah selesai di import ke database **db_inventory**
- Silahkan jalankan websitenya di `localhost` sesuai dengan penempatan file path folder `htdocs` masing-masing device.

## Teknologi yang dipakai

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

## Tanggal Selesai
- 20 Juli 2022
