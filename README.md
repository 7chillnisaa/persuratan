## Konsep Website Yang Dibuat

Website yang saya buat ini dirancang untuk mengelola surat yang masuk dan keluar, seperti surat yang masuk ke kantor dinas

## Fitur Yang Tersedia

* Halaman Awal

    * Dashboard
  
    * Persuratan
      
* Autentikasi

  * Login

* Pengguna

    * Login: Pengguna dapat masuk ke akun mereka.
  
    * Lihat Surat: Menampilkan daftar surat yang telah dibuat.
  
    * Buat Surat: Fitur untuk membuat surat baru.
  
    * Edit Surat: Mengubah isi surat yang sudah ada.
  
    * Hapus Surat: Menghapus surat yang tidak diperlukan.
  
  
* Admin

    * Lihat Dasbor: Menampilkan statistik penggunaan dan aktivitas pengguna.
  
    * Kelola Pengguna: Menambah, mengedit, atau menghapus akun pengguna.

* Langkah Terakhir
  
    * Logout

## Akun Delfaut

* Admin
  
    * Email : admin@gmail.com
  
    * Password : 12345
  
* User
  
    * Email : yg_treasure@gmail.com
  
    * Password : treasure10

##ERD

![Screenshot (1)](https://github.com/user-attachments/assets/48ec5a62-c133-43d9-ae12-d8ee78a7630a)

## Use Case Diagram

![Screenshot (7)](https://github.com/user-attachments/assets/2447d663-2628-4a4c-b4ef-9ac734918ca0)


## Teknologi Yang Digunakan

- **[Laravel 9](https://laravel.com/)**
- **[Bootstrap 5](https://getbootstrap.com/)**

## Instalasi

* PHP 8.0.30 & Apache
* Database (MySql)
* Web Browser (Chrome)

## Instalasi

1. Clone Repositori
   ```bash
   git clone https://github.com/7chillnisaa/persuratan.git
   composer install
   cp .env.example .env

2. Konfigurasi Database Pada File .env
   ```bash
   DB_DATABASE=persuratanDkp

3. Melakukan Migrasi dan Menyambungkan Storage
   ```bash
   php artisan key:generate
   php artisan storage:link
   php artisan migrate --seed

4. Mulai SItus Web
   ```bash
   php artisan serve

persuratan dibuat oleh **[Nisa Rahmaniar](https://www.instagram.com/nissaash_/)**
