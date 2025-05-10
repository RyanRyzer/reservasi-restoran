<div><a href="dashboard.php?page=pembayaran">Pembarayan</a> <a href="dashboard.php?page=menu">Menu Makanan</a> <a href="dashboard.php?page=reservasi">Reservasi</a> </div>
<div>

<?php 
if (isset($_GET["page"])) { 
    if ($_GET["page"] == "pembayaran") {
        include "pembayaran.php"; 
    } elseif ($_GET["page"] == "menu") {
        include "menu.php";
    } elseif ($_GET["page"] == "reservasi") {
        include "pemesanan.php";
    } 
}
?>
</div>
