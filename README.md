# Project PAS Berita XII SIJA SMK TI BAZMA

PENILAIAN AKHIR SEMESTER GANJIL TAHUN PELAJARAN 2023/2024 NASKAH SOAL

Nama Siswa : Hamidzan Pranajanala Bhamakerti
### Ketentuan :

Anda adalah seorang Web Developer yang ditugaskan oleh perusahaan untuk membuat portal berita, adapun fitur yang tersedia sebagai berikut:
1. Memiliki halaman login untuk admin.
2. Admin dapat membuat postingan berita baru sesuai kategori.
3. Admin dapat membuat, mengedit, menghapus kategori.
4. Admin dapat mengedit postingan berita jika ada revisi redaksi.
5. Admin dapat menghapus postingan berita yang tidak layak publish.
6. Admin dan pengguna dapat melihat postingan.

Adapun asumsi dan batasan yang perlu diperhatikan dalam membuat Portal Berita antara lain:
1. Portal berita dibuat menggunakan Framework Laravel 10.x.
2. Portal berita dikembangkan menggunakan bahasa pemrograman PHP dan basis data MySQL.
3. Aplikasi memiliki fungsi untuk Create, Read, Update, dan Delete (CRUD).
4. Kode ditulis dengan memperhatikan Guidelines dan Best Practices penulisan kode PHP.
5. Aplikasi menggunakan Library atau Komponen Pre-Existing untuk:
6. Mempercantik tampilan web menggunakan framework CSS Bootstrap;
7. Membuat tampilan input berita menjadi lebih interaktif menggunakan Text Editing JS (TinyMCE / CKEditor / Froala / dll)

## Penginstallan Aplikasi
### Sebelum install Laravel 10 pastikan PHP anda diatas 8.2
Cara instalasi seperti berikut:

1. git clone
```bash
git clone https://github.com/haempebe/pas-berita-hamidzan.git
```
2. copy .env.example menjadi .env
```bash
cp .env.example .env
```
3. setelah git clone masuk kedalam file dengan perintah cd
```bash
cd pas-berita-hamidzan
```
4. Composer install
```bash
composer install
```
5. npm install
```bash
npm install
```
6. npm run dev
```bash
npm run dev
```
7. npm install
```bash
npm install
```
8. npm run build
```bash
npm run build
```
9. php artisan migrate --seed
```bash
php artisan migrate --seed
```
10. php artisan key:generate
```bash
php artisan key:generate
```
11. php artisan serve
```bash
php artisan serve
```

## Admin account = 
 name => admin
 email => admin@news.com
 password => secret
