## Nama     : Marlina Horo
## Nim      : 312010250
## kelas    : Ti 20 A2

Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan Codeigniter 4. Berikut beberapa ekstensi yang perlu diaktifkan: • php-json ekstension untuk bekerja dengan JSON; • php-mysqlnd native driver untuk MySQL; • php-xml ekstension untuk bekerja dengan XML; • php-intl ekstensi untuk membuat aplikasi multibahasa; • libcurl (opsional), jika ingin pakai Curl.

## 1. Mengaktifkan ekstentsi tersebut, melalu XAMPP Control Panel, pada bagian Apache klik Config -> PHP.ini

![1.png](ci4/public/img/1.png)

Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

## 2. Instalasi Codeigniter 4

Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara manual.

![2.png](ci4/public/img/2.png)

aktifkan bebarapa exetension seperti diatas.`

## 3. kemudia membuat file baru dengan nama lab11_php_ci

![3.png](ci4/public/img/3.png)

## 4. INSTALISASI CODINGITER 4

Untuk melakukan instalasi codeigniter 4 dapat dilakukan dengan dua cara , yaitu cara manual dan menggunakan composer. pada praktikum ini kita menggunakan cara manual.

Unduh Codeigniter dari website https://codeigniter.com/download Extrak file zip Codeigniter ke directori htdocs/lab11_ci. Ubah nama direktory framework-4.x.xx menjadi ci4 Buka browser dengan alamat
https://http://localhost/lab11_php_ci/ci4/public/

![4.png](ci4/public/img/4.png)

container telah berhasil didonwload

## 5.MENJALANKAN CLI (Command Line Interface)

Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt.


![5.png](ci4/public/img/5.png)

Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (C:\xampp\htdocs\Lab11Web\lab11_php_ci\ci4)

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah

![6.png](ci4/public/img/6.png)

php spark berhasil dipanggil


## 6. MENGAKTIFKAN MODE DEBUGGING

Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan erorr apabila terjadi kesalahan membuat kode program.

Secara default fitur ini belum aktif. Ketika terjadi erorr pada aplikasi akan ditampilkan pesan seperti berikut

![7.png](ci4/public/img/7.png)

Semua jenis erorr akan ditampilkan sama. Untuk memudahkan mengetahui jenis erorrnya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development.

## 7 Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable CI``_ENVIRONMENT menjadi development.

![8.png](ci4/public/img/8.png)



contoh erorr yang terjadi. Untuk mencoba erorr tersebut, ubah kode pada file app/Controller/Home.php hilangkan titik koma pada akhir kode.

![10.png](ci4/public/img/10.png)


## 8. Membuat rute Baru

Tambahkan kode berikut di dalam Routes.php


![11.png](ci4/public/img/11.png)

## 9. Buat file baru dengan nama about.php pada direktori view (app/view/about.php)

![19.png](ci4/public/img/19.png)

Ubah method about pada class Controller Page

![14.png](ci4/public/img/14.png)

![13.png](ci4/public/img/13.png)

halaman about

![17.png](ci4/public/img/17.png)

## 10. membuat file baru dengan contact.php

![20.png](ci4/public/img/20.png)


halaman contact 

![18.png](ci4/public/img/18.png)





## Framework Lanjutan (CRUD)


1. Membuat Database

![1.png](ci4/public/img1/1.png)

Konfigurasi koneksi database
Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server.
Konfigurasi dapat dilakukan dengan du acara, yaitu pada file app/config/database.php
atau menggunakan file .env. Pada praktikum ini kita gunakan konfigurasi pada file .env.

![2.png](ci4/public/img1/2.png)

2. Membuat Model
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada
direktori app/Models dengan nama ArtikelModel.php

![3.png](ci4/public/img1/3.png)

3. Membuat Controller
Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.

![4.png](ci4/public/img1/4.png)

![4.1.png](ci4/public/img1/4.1.png)

![4.2.png](ci4/public/img1/4.2.png)

4. Membuat View
Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file
baru dengan nama index.php.

![5.png](ci4/public/img1/5.png)

Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel

![6.png](ci4/public/img1/6.png)

8. Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada
database agar dapat ditampilkan datanya.
menggunakan cmd

![7.png](ci4/public/img1/7.png)

9. Membuat View Detail
Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.

![8.png](ci4/public/img1/8.png)

10. Membuat Menu Admin
Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada
Controller Artikel dengan nama admin_index().

![9.png](ci4/public/img1/9.png)

Akses menu admin dengan url http://localhost:8080/admin/artikel

![10.png](ci4/public/img1/10.png)

Kemudian buat view untuk form tambah dengan nama form_add.php

![11.png](ci4/public/img1/11.png)


![12.png](ci4/public/img1/12.png)


11. Mengubah Data
Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().

![13.png](ci4/public/img1/13.png)


![14.png](ci4/public/img1/14.png)


12. Menghapus Data
Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().

![15.png](ci4/public/img1/15.png)














