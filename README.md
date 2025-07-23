# mini_cms

## Deskripsi
mini_cms adalah proyek Content Management System (CMS) berbasis Laravel dan Filament Admin Panel yang dirancang untuk kebutuhan blog modern, dengan fitur administrasi lengkap dan tampilan dashboard yang cantik serta interaktif.

## Fitur Utama
- **Dashboard Modern**: Statistik pengguna, postingan, komentar, subscriber, dan pesan kontak dengan efek animasi dan visual menarik.
- **Manajemen User & Role**: Kelola user, role, dan akses dengan mudah.
- **Kategori & Tag**: Mendukung kategori bertingkat dan tagging untuk postingan.
- **Post Management**: CRUD postingan dengan relasi kategori, tag, author, dan media.
- **Media Management**: Upload dan kelola file media (gambar, dll).
- **Comments Moderation**: Tabel moderasi komentar dengan aksi cepat (approve, spam, delete) dan filter status.
- **Contact Messages**: Inbox pesan dari pengunjung, dengan tampilan detail dan aksi mark as read/delete.
- **Newsletter Subscribers**: Database email subscriber, aksi bulk delete, dan export ke CSV.
- **Activity Log**: Log aktivitas admin dan user.
- **Tampilan Responsive**: UI dark mode, grid, dan efek hover/animasi pada dashboard.

## Teknologi
- Laravel 12.x
- Filament Admin Panel
- MariaDB
- TailwindCSS
- PHP 8.3.x

## Struktur Folder
- `src/app/Models/` : Model Eloquent (User, Post, Category, Tag, Media, Comment, ContactMessage, NewsletterSubscriber)
- `src/app/Filament/Admin/Resources/` : Resource Filament untuk CRUD dan tabel admin
- `src/app/Filament/Admin/Widgets/` : Widget dashboard (statistik, log, dsb)
- `src/database/migrations/` : File migrasi database
- `src/database/seeders/` : Seeder data awal
- `src/resources/views/filament/admin/widgets/` : Blade view untuk widget custom

## Cara Instalasi
1. Clone repo ini
2. Jalankan `composer install` dan `npm install`
3. Copy `.env.example` ke `.env` dan sesuaikan konfigurasi database
4. Jalankan migrasi dan seeder:
   ```bash
   php artisan migrate:fresh --seed
   ```
5. Jalankan server:
   ```bash
   php artisan serve
   ```
6. Login ke admin panel di `/admin`

## Akun Default
- Super Admin: (set sesuai seeder Anda)

## Kontribusi & Pengembangan
- Tambahkan resource baru di `src/app/Filament/Admin/Resources/`
- Custom widget di `src/app/Filament/Admin/Widgets/` dan view di `src/resources/views/filament/admin/widgets/`
- Untuk fitur frontend, tambahkan di folder `src/resources/views/`

## Lisensi
MIT

---

**Project ini cocok untuk blog, portal berita, atau website komunitas yang membutuhkan admin panel modern dan mudah dikembangkan.**
