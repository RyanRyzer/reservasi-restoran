<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<div class="bg-gray-100 min-h-screen p-4">
    <div class="flex justify-center space-x-4 mb-6">
        <a href="dashboard.php?page=pembayaran" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Pembayaran</a>
        <a href="dashboard.php?page=menu" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Menu Makanan</a>
        <a href="dashboard.php?page=reservasi" class="px-4 py-2 bg-purple-500 text-white rounded hover:bg-purple-600">Reservasi</a>
    </div>

    <div class="bg-white shadow-md rounded p-6">
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
                echo "Halaman tidak ditemukan.";
            }
        }
        ?>
    </div>
</div>
