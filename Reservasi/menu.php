<form action="menu.php" method="POST">
    Nama = <input type="text" name="nama_604"> <br>
    Email = <input type="text" name="email_604"> <br>
    Telepon = <input type="text" name="telp_604"> <br>
    Tanggal Pemesanan = <input type="date" name="tanggal_604"> <br>
    Jam Pemesanan = <input type="time" name="jam_604"> <br>
    Menu Makanan:
    <select name="menu_604">
        <option value="Kwetiaw">Kwetiaw</option>
        <option value="Mie Ayam">Mie Ayam</option>
        <option value="Bakso">Bakso</option>
        <option value="Soto Ayam">Soto Ayam</option>
    </select><br>
    Jumlah Pesanan: <input type="number" name="jumlah_604"><br>
    Catatan Tambahan: <textarea name="catatan_604" rows="3" cols="30"></textarea><br>
    <input type="submit" value="Pesan Makanan">
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
        foreach ($this->data_604 as $a) {
            echo "Nama : " . $a['nama'] . "<br>";
            echo "Email : " . $a['email'] . "<br>";
            echo "Telepon : " . $a['telp'] . "<br>";
            echo "Tanggal Pemesanan : " . $a['tanggal'] . "<br>";
            echo "Jam Pemesanan : " . $a['jam'] . "<br>";
            echo "Menu Makanan : " . $a['menu'] . "<br>";
            echo "Jumlah Pesanan : " . $a['jumlah'] . "<br>";
            echo "Catatan Tambahan : " . $a['catatan'] . "<br><br>";
        }
    }
}

class turunan_604 extends pesanMakanan_604 {
    public function pemesan_604() {
        echo "Pesanan oleh " . $this->nama_604 . ", pada Tanggal " . $this->tanggal_604 . "<br><br>";
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
