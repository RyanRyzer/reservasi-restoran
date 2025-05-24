ReservationEase adalah sebuah sistem reservasi restoran yang dirancang untuk memberikan pengalaman reservasi yang mulus dan terintegrasi. Sistem ini dilengkapi dengan fitur-fitur kunci seperti pemesanan tempat, pemilihan menu makanan, dan alur pembayaran yang efisien, semuanya didukung oleh sistem otentikasi berbasis NIM mahasiswa untuk kemudahan pengelolaan dan pengembangan berkelompok.

✨ Fitur Unggulan
Sistem Otentikasi Khusus Mahasiswa: Login menggunakan NIM masing-masing mahasiswa untuk akses ke dashboard dan form yang relevan (Pembayaran, Pemesanan Tempat, atau Menu Makanan).
Dashboard Interaktif: Setelah login, pengguna akan diarahkan ke dashboard sebelum menuju ke form spesifik.
Form Pembayaran yang Efisien: Proses pembayaran yang mudah dan transparan.
Pemesanan Tempat Fleksibel: Pengguna dapat memesan tempat di restoran dengan detail yang jelas.
Pilihan Menu Makanan Lengkap: Menjelajahi dan memilih menu makanan favorit Anda dengan mudah.
Antarmuka Pengguna Modern: Dibuat dengan Tailwind CSS untuk tampilan yang bersih, responsif, dan menarik.
🚀 Teknologi yang Digunakan
Backend: PHP (dengan fokus pada metode GET dan POST untuk pengelolaan data)
Frontend: HTML
Styling: Tailwind CSS (via CLI)
Database: (Sebutkan jika ada, contoh: MySQL/MariaDB)
📦 Instalasi & Setup Proyek
Ikuti langkah-langkah di bawah ini untuk menjalankan proyek ReservationEase di lingkungan lokal Anda.

Prasyarat
Sebelum memulai, pastikan Anda telah menginstal yang berikut:

Web Server dengan PHP: XAMPP, LAMPP, WAMP, atau Nginx/Apache dengan PHP.
Composer (Opsional, jika ada dependensi PHP yang dikelola oleh Composer).
Node.js & npm (Diperlukan untuk instalasi Tailwind CSS CLI).
Langkah-langkah Instalasi

1. Clone Repository:
Bash
git clone https://github.com/RyanRyzer/reservasi-restoran
cd Reservasi

2. Konfigurasi Web Server:
Pindahkan semua file proyek ke dalam folder htdocs (untuk XAMPP/WAMPP) atau www (untuk LAMPP) atau lokasi root web server Anda yang lain.
Pastikan web server Anda berjalan.

3. Instalasi Tailwind CSS CLI

5. Konfigurasi Database (Jika ada dan diperlukan):
Buat database baru di PHPMyAdmin atau alat serupa.
Import skema database Anda (jika ada file .sql di repository).
Sesuaikan kredensial database di file koneksi PHP Anda (misal: config.php atau db_connection.php).
5. Akses Aplikasi:
Buka browser Anda dan navigasi ke URL proyek lokal Anda (misal: http://localhost/nama_folder_proyek).

📄 Lisensi
Proyek ini dilisensikan di bawah Lisensi MIT. Lihat file LICENSE untuk detail lebih lanjut.
