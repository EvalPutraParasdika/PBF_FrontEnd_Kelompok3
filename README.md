# PBF FrontEnd Kelompok 3

Repositori ini merupakan bagian dari proyek akhir mata kuliah Pemrograman Berbasis Framework (PBF) yang dikembangkan oleh Kelompok 3. Proyek ini dibangun menggunakan Laravel sebagai framework backend dan menyajikan antarmuka pengguna untuk mengelola data mahasiswa, dosen, staff, jurusan, program studi, dan pengajuan cuti.

## Fitur

-   Manajemen data Mahasiswa
-   Manajemen data Dosen
-   Manajemen data Staff
-   Manajemen data Jurusan
-   Manajemen data Program Studi
-   Pengajuan dan manajemen cuti mahasiswa
-   Dashboard statistik jumlah entitas

## Teknologi yang Digunakan

-   [Laravel](https://laravel.com/) - Framework PHP untuk backend
-   [Bootstrap](https://getbootstrap.com/) - Framework CSS untuk desain responsif
-   [Vite](https://vitejs.dev/) - Build tool modern untuk frontend
-   [Axios](https://axios-http.com/) - Library HTTP client untuk komunikasi dengan API

## Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini secara lokal:

1. **Kloning repositori:**

    ```bash
    git clone https://github.com/EvalPutraParasdika/PBF_FrontEnd_Kelompok3.git
    cd PBF_FrontEnd_Kelompok3
    ```

````
2. **Instalasi dependensi PHP:**
```bash
composer install
````

3. **Instalasi dependensi JavaScript:**

Pastikan Anda telah menginstal Node.js dan npm.

```bash
Copy code
npm install
```

4. **Salin file .env dan konfigurasi:**

```bash
cp .env.example .env
```

Sesuaikan konfigurasi database dan lainnya di file .env sesuai dengan lingkungan Anda.

5. **Generate application key:**
```bash
php artisan key:generate
```

6. **Jalankan migrasi dan seeder (jika tersedia):**
```bash
php artisan migrate --seed
```
7. **Jalankan server pengembangan:**

```bash
php artisan serve
```
8. **Jalankan Vite untuk asset frontend:**
```bash
npm run dev
```

## Struktur Direktori
- app/ - Berisi file controller, model, dan lainnya

- resources/views/ - Berisi file blade templates untuk tampilan

- routes/web.php - Berisi definisi route aplikasi

- public/ - Berisi file publik seperti index.php, asset, dll.

- database/ - Berisi migrasi dan seeder database
