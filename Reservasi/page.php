<?php
include('backend.php');
if (!isset($_SESSION['nim'])) {
    header('Location: login.php'); // Arahkan ke login jika session tidak ada
    exit;
}
$page = new prosesLoginRestoran;
$includeValue = $page->redirectPage($_SESSION['nim']);

if (isset($_GET['logout'])) {
    $page->logout();
}
?>
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
                <a href="?logout=true" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Logout</a>
            </nav>
        </div>
    </header>
    <main class="flex-grow max-w-6xl mx-auto px-4 py-6">
        <div>
            <h2><?php echo $_SESSION['nama']; ?></h2>
            <h3><?php echo $_SESSION['nim']; ?></h3>
            <img src="./assets/<?php echo $_SESSION['img']; ?>" alt="">

        </div>
            <?php 
            if(isset($includeValue)){
                include($includeValue);
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
