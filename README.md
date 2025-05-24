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
Clone Repository:
Bash

git clone [URL_REPO_ANDA]
cd [NAMA_FOLDER_PROYEK]
Konfigurasi Web Server:
Pindahkan semua file proyek ke dalam folder htdocs (untuk XAMPP/WAMPP) atau www (untuk LAMPP) atau lokasi root web server Anda yang lain.
Pastikan web server Anda berjalan.
Instalasi Tailwind CSS CLI:
Pastikan Anda berada di direktori root proyek Anda.
Instal Tailwind CSS sebagai dev-dependency:
Bash

npm install -D tailwindcss
Inisialisasi tailwind.config.js:
Bash

npx tailwindcss init
Buka file tailwind.config.js yang baru dibuat dan konfigurasikan bagian content agar Tailwind dapat memindai file HTML/PHP Anda:
JavaScript

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.html", // Jika file HTML Anda ada di root
    "./*.php",  // Jika file PHP Anda ada di root
    // Tambahkan path lain jika HTML/PHP Anda ada di subfolder, contoh:
    // "./views/**/*.php",
    // "./public/*.html",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
Buat file CSS input, misalnya input.css di folder src (misal: src/input.css) dan tambahkan direktif Tailwind:
CSS

/* src/input.css */
@tailwind base;
@tailwind components;
@tailwind utilities;
Kompilasi CSS Tailwind:
Untuk pengembangan (dengan watch untuk auto-reload saat ada perubahan):
Bash

npx tailwindcss -i ./src/input.css -o ./css/style.css --watch
Biarkan perintah ini berjalan di terminal terpisah selama Anda mengembangkan.
Untuk produksi (CSS yang dioptimalkan dan diperkecil):
Bash

npx tailwindcss -i ./src/input.css -o ./css/style.css --minify
Pastikan file HTML/PHP Anda menautkan ke file css/style.css:
HTML

<link rel="stylesheet" href="css/style.css">
Konfigurasi Database (Jika ada dan diperlukan):
Buat database baru di PHPMyAdmin atau alat serupa.
Import skema database Anda (jika ada file .sql di repository).
Sesuaikan kredensial database di file koneksi PHP Anda (misal: config.php atau db_connection.php).
Akses Aplikasi:
Buka browser Anda dan navigasi ke URL proyek lokal Anda (misal: http://localhost/nama_folder_proyek).
👨‍💻 Cara Penggunaan
Setelah instalasi berhasil, Anda dapat memulai menggunakan sistem reservasi:

Login: Akses halaman login dan masukkan NIM mahasiswa yang telah terdaftar.
Contoh: Jika NIM Anda 2200112233, maka Anda akan menggunakan username: 2200112233 dan password: [password_nim_anda].
Dashboard: Setelah login, Anda akan diarahkan ke dashboard.
Navigasi ke Form: Dari dashboard, pilih opsi untuk menuju ke Form Pembayaran, Pemesanan Tempat, atau Menu Makanan sesuai dengan peran yang diberikan untuk NIM Anda.
(Jika Anda punya contoh tangkapan layar atau GIF singkat untuk alur login/dashboard, akan sangat bagus untuk ditambahkan di sini!)

🤝 Kontribusi
Kami menyambut kontribusi untuk pengembangan ReservationEase ini! Jika Anda ingin berkontribusi, silakan ikuti langkah-langkah berikut:

Fork repository ini.
Buat branch baru untuk fitur Anda (git checkout -b fitur/nama-fitur-baru).
Lakukan perubahan Anda dan commit (git commit -m 'Menambahkan fitur baru: deskripsi').
Push ke branch Anda (git push origin fitur/nama-fitur-baru).
Buka Pull Request dan jelaskan perubahan yang Anda buat.
📄 Lisensi
Proyek ini dilisensikan di bawah Lisensi MIT. Lihat file LICENSE untuk detail lebih lanjut.
