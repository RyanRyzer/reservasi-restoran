<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Restoran</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gray-50 font-sans flex flex-col min-h-screen">

    <header class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Restoran Mas Amba</h1>
            <nav class="space-x-4">
                <a href="dashboard.php?page=pembayaran" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Pembayaran</a>
                <a href="dashboard.php?page=menu" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Menu Makanan</a>
                <a href="dashboard.php?page=reservasi" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Reservasi</a>
            </nav>
        </div>
    </header>

    <?php if (!isset($_GET["page"])): ?>
    <section class="bg-white py-12">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Selamat Datang di Restoran Mas Amba</h2>
                <p class="text-gray-600 mb-4">
                    Nikmati pengalaman kuliner terbaik dengan berbagai menu khas Indonesia yang lezat, suasana nyaman, dan layanan terbaik.
                </p>
            </div>
            <div class="md:w-1/2">
                <img src="assets/resto.jpg" alt="Restoran" class="rounded-lg shadow">
            </div>
        </div>
    </section>
    <?php endif; ?>

    <main class="flex-grow max-w-6xl mx-auto px-4 py-6">
            <?php 
            if (isset($_GET["page"])) {
                $page = $_GET["page"];
                if ($page === "pembayaran") {
                    include "pembayaran.php"; 
                } elseif ($page === "menu") {
                    include "menu.php";
                } elseif ($page === "reservasi") {
                    include "pemesanan.php";
                } else {
                }
            }
            ?>
    </main>

    <footer class="bg-gray-800 text-white py-6 mt-10">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p>&copy; <?php echo date("Y"); ?> Restoran Mas Amba. All rights reserved.</p>
            <p class="text-sm">Jl. Tukam No.1, Jawa Timur | Telp: (0812) 123456</p>
        </div>
    </footer>

</body>
</html>
