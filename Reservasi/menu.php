<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<form action="dashboard.php?page=menu" method="POST" class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_604">Nama</label>
        <input type="text" name="nama_604" id="nama_604" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Nama">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email_604">Email</label>
        <input type="text" name="email_604" id="email_604" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Email">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="telp_604">Telepon</label>
        <input type="text" name="telp_604" id="telp_604" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan No. Telepon">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal_604">Tanggal Pemesanan</label>
        <input type="date" name="tanggal_604" id="tanggal_604" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="jam_604">Jam Pemesanan</label>
        <input type="time" name="jam_604" id="jam_604" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="menu_604">Menu Makanan</label>
        <select name="menu_604" id="menu_604" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <option value="Kwetiaw">Kwetiaw</option>
            <option value="Mie Ayam">Mie Ayam</option>
            <option value="Bakso">Bakso</option>
            <option value="Soto Ayam">Soto Ayam</option>
        </select>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="jumlah_604">Jumlah Pesanan</label>
        <input type="number" name="jumlah_604" id="jumlah_604" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Jumlah">
    </div>
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="catatan_604">Catatan Tambahan</label>
        <textarea name="catatan_604" id="catatan_604" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Catatan (Opsional)"></textarea>
    </div>
    <div class="flex items-center justify-between">
        <input type="submit" value="Pesan Makanan" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
    </div>
</form>


<?php

class pesanMakanan_604 {
    var $nama_604;
    var $email_604;
    var $telp_604;
    var $tanggal_604;
    var $jam_604;
    var $menu_604;
    var $jumlah_604;
    var $catatan_604;
    var $data_604 = [];

    public function __construct($nama, $email, $telp, $tanggal, $jam, $menu, $jumlah, $catatan) {
        $this->nama_604    = $nama;
        $this->email_604   = $email;
        $this->telp_604    = $telp;
        $this->tanggal_604 = $tanggal;
        $this->jam_604     = $jam;
        $this->menu_604    = $menu;
        $this->jumlah_604  = $jumlah;
        $this->catatan_604 = $catatan;
    }

    protected function protected_604() {
        array_push($this->data_604, [
            'nama'    => $this->nama_604,
            'email'   => $this->email_604,
            'telp'    => $this->telp_604,
            'tanggal' => $this->tanggal_604,
            'jam'     => $this->jam_604,
            'menu'    => $this->menu_604,
            'jumlah'  => $this->jumlah_604,
            'catatan' => $this->catatan_604
        ]);
    }

    public function tampilkan_604() {
    $this->protected_604();
    echo '<div class="bg-white shadow-md rounded p-6 mt-6 max-w-xl mx-auto">';
    foreach ($this->data_604 as $a) {
        echo "<p class='mb-2'><strong>Nama:</strong> {$a['nama']}</p>";
        echo "<p class='mb-2'><strong>Email:</strong> {$a['email']}</p>";
        echo "<p class='mb-2'><strong>Telepon:</strong> {$a['telp']}</p>";
        echo "<p class='mb-2'><strong>Tanggal Pemesanan:</strong> {$a['tanggal']}</p>";
        echo "<p class='mb-2'><strong>Jam Pemesanan:</strong> {$a['jam']}</p>";
        echo "<p class='mb-2'><strong>Menu Makanan:</strong> {$a['menu']}</p>";
        echo "<p class='mb-2'><strong>Jumlah Pesanan:</strong> {$a['jumlah']}</p>";
        echo "<p class='mb-2'><strong>Catatan Tambahan:</strong> {$a['catatan']}</p>";
    }
    echo '</div>';
}

}

class turunan_604 extends pesanMakanan_604 {
    public function pemesan_604() {
    echo '<div class="text-center text-lg font-semibold text-green-600 mt-4">';
    echo "Pesanan oleh " . $this->nama_604 . ", pada Tanggal " . $this->tanggal_604;
    echo '</div>';
}
}

if ($_POST) {
    $nama = $_POST['nama_604'];
    $email = $_POST['email_604'];
    $telp = $_POST['telp_604'];
    $tanggal = $_POST['tanggal_604'];
    $jam = $_POST['jam_604'];
    $menu = $_POST['menu_604'];
    $jumlah = $_POST['jumlah_604'];
    $catatan = $_POST['catatan_604'];

    $print_604 = new turunan_604($nama, $email, $telp, $tanggal, $jam, $menu, $jumlah, $catatan);
    $print_604->tampilkan_604();
    $print_604->pemesan_604();
}

?>
