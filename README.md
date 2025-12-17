NAMA : YOSUA CHRISTIAN ADI PRATAMA
NIM : G.211.23.0016




# Laravel CRUD API Backend

## Deskripsi Project

Project ini merupakan **Backend API** yang dibangun menggunakan **Laravel** dan digunakan sebagai bagian dari praktikum **Laravel CRUD, Laravel API CRUD**, serta terintegrasi dengan **Frontend ReactJS**.

Aplikasi ini menyediakan layanan **RESTful API** dengan fitur **CRUD (Create, Read, Update, Delete)** dan **Autentikasi**, yang dapat diakses oleh aplikasi frontend.

---

## Teknologi yang Digunakan

* PHP >= 8.x
* Laravel
* MySQL / MariaDB
* Laravel Sanctum (Autentikasi API)
* Composer

---

## Fitur Utama

* Autentikasi User (Login & Register)
* CRUD Data (Create, Read, Update, Delete)
* RESTful API
* Proteksi endpoint menggunakan token
* Terintegrasi dengan Frontend ReactJS

---

## Cara Install & Menjalankan Project

### 1. Clone Repository

```bash
git clone https://github.com/yosuaadipratama03-boop/laravel-crud-api-backend.git
cd laravel-crud-api-backend
```

### 2. Install Dependency

```bash
composer install
```

### 3. Konfigurasi Environment

Salin file `.env.example` menjadi `.env`

```bash
cp .env.example .env
```

Atur konfigurasi database pada file `.env`

```
DB_DATABASE=laravel_app
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Key

```bash
php artisan key:generate
```

### 5. Migrasi Database

```bash
php artisan migrate
```

### 6. Jalankan Server

```bash
php artisan serve
```

Server berjalan di:

```
http://127.0.0.1:8000
```

---

## Endpoint API (Contoh)

### Autentikasi

* `POST /api/register` → Register user
* `POST /api/login` → Login user
* `POST /api/logout` → Logout user (auth)

### CRUD Data

* `GET /api/data` → Ambil data
* `POST /api/data` → Tambah data
* `PUT /api/data/{id}` → Update data
* `DELETE /api/data/{id}` → Hapus data

> Endpoint CRUD dapat disesuaikan dengan controller yang digunakan.

---

## Akun Dummy (Jika Ada)

```
Email    : admintest@gmail.com
Password : qwertyuiop
```

---

## Catatan Penting

* Folder `vendor/` **tidak diupload** ke GitHub
* File `.env` **tidak diupload** ke GitHub
* Project ini digunakan untuk keperluan **praktikum perkuliahan**

---

## Author

Nama: Yosua Christian Adi Pratama
Program Studi: Informatika / Teknik Informatika
