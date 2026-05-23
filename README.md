# Blog Modern

Blog Modern adalah aplikasi blog berbasis Laravel 10 dengan halaman publik untuk membaca artikel dan panel admin Filament untuk mengelola konten. Project ini cocok untuk portal artikel, blog editorial, atau contoh CMS sederhana dengan kategori, penulis, tag, komentar, dan newsletter.

## Fitur Utama

- Halaman beranda dengan artikel pilihan dan artikel terbaru.
- Daftar artikel dengan pencarian dan filter kategori.
- Halaman detail artikel dengan informasi penulis, tag, jumlah views, komentar, artikel terkait, dan sidebar.
- Halaman kategori dengan statistik artikel dan pembaca.
- Halaman about dengan ringkasan statistik blog.
- Sistem komentar bertingkat yang membutuhkan approval admin sebelum tampil.
- Form subscribe dan unsubscribe newsletter.
- Panel admin Filament di `/admin`.
- CRUD artikel, kategori, penulis, tag, komentar, dan subscriber newsletter.
- Seeder data awal untuk kategori, penulis, artikel, dan tag.

## Tech Stack

- PHP `^8.1`
- Laravel `10.x`
- Filament `3.x`
- Laravel Sanctum
- MySQL
- Vite
- Tailwind CSS

## Persyaratan

Pastikan environment lokal sudah memiliki:

- PHP 8.1 atau lebih baru
- Composer
- Node.js dan npm
- MySQL atau database lain yang didukung Laravel

## Instalasi

Clone repository, lalu masuk ke folder project:

```bash
git clone <url-repository>
cd blog
```

Install dependency PHP dan JavaScript:

```bash
composer install
npm install
```

Salin file environment:

```bash
cp .env.example .env
```

Untuk Windows PowerShell:

```powershell
Copy-Item .env.example .env
```

Atur konfigurasi database di `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Generate application key:

```bash
php artisan key:generate
```

Jalankan migrasi dan seeder:

```bash
php artisan migrate --seed
```

Buat symbolic link storage agar upload gambar bisa diakses dari folder `public`:

```bash
php artisan storage:link
```

Buat user admin Filament:

```bash
php artisan make:filament-user
```

Jalankan aplikasi:

```bash
php artisan serve
```

Jalankan Vite untuk development asset:

```bash
npm run dev
```

Aplikasi dapat dibuka di:

- Website: `http://127.0.0.1:8000`
- Admin panel: `http://127.0.0.1:8000/admin`

## Route Utama

| Method | URL | Deskripsi |
| --- | --- | --- |
| GET | `/` | Halaman beranda |
| GET | `/about` | Halaman about |
| GET | `/categories` | Daftar kategori |
| GET | `/category/{slug}` | Artikel berdasarkan kategori |
| GET | `/articles` | Daftar artikel, termasuk pencarian dan filter |
| GET | `/articles/{slug}` | Detail artikel |
| POST | `/articles/{slug}/comments` | Kirim komentar artikel |
| POST | `/newsletter/subscribe` | Subscribe newsletter |
| GET | `/newsletter/unsubscribe/{email}` | Unsubscribe newsletter |
| GET | `/admin` | Dashboard admin Filament |

## Data Awal

Seeder akan membuat data contoh:

- Kategori: Teknologi, Bisnis, Desain, Inspirasi, Tutorial.
- Penulis contoh untuk artikel.
- Artikel contoh berbahasa Indonesia.
- Tag artikel seperti Artificial Intelligence, React, UI/UX, Web3, dan lainnya.

Jalankan ulang database dari awal jika diperlukan:

```bash
php artisan migrate:fresh --seed
```

## Panel Admin

Panel admin tersedia di `/admin`. Setelah membuat user dengan `php artisan make:filament-user`, login menggunakan email dan password yang dibuat.

Menu admin meliputi:

- Artikel
- Kategori
- Penulis
- Tag
- Komentar
- Newsletter

Komentar baru dari pengunjung akan masuk dengan status belum disetujui. Admin dapat menyetujui, membatalkan persetujuan, membalas komentar, atau menghapus komentar dari panel admin.

## Perintah Development

```bash
php artisan serve
npm run dev
```

Build asset untuk production:

```bash
npm run build
```

Menjalankan test:

```bash
php artisan test
```

Format kode dengan Laravel Pint:

```bash
./vendor/bin/pint
```

## Struktur Folder Penting

```text
app/Filament/Resources      Resource admin Filament
app/Http/Controllers        Controller halaman publik dan form
app/Models                  Model utama aplikasi
database/migrations         Struktur tabel database
database/seeders            Data awal aplikasi
resources/views/pages       Halaman publik
resources/views/components  Komponen Blade reusable
routes/web.php              Route website
```

## Catatan Environment

Jangan commit file `.env` karena berisi konfigurasi lokal dan kemungkinan data sensitif. Gunakan `.env.example` sebagai template konfigurasi untuk developer lain.

## Lisensi

Project ini mengikuti lisensi yang digunakan pada repository.
