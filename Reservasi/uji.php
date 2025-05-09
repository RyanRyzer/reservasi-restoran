<form action="pembayaran.php" method="POST">
    Nama = <input type="text" name="nama_608"> <br>
    Telp = <input type="text" name="telp_608"> <br>
    Alamat = <input type="text" name="alamat_608"> <br>
    Tambahan = <input type="text" name="tambahan_608"> <br>
    Kode = <input type="text" name="kode_608"> <br>
    <input type="submit" value="Simpan">
</form>

<?php

class Pembayaran {
    var $nama_pembeli;
    var $telp;
    var $alamat;
    var $tambahan;
    var $kode;

    public function __construct($nama_pembeli_txt, $telp, $alamat, $tambahan, $kode) {
        $this->nama_pembeli = $nama_pembeli_txt;
        $this->telp = $telp;
        $this->alamat = $alamat;
        $this->tambahan = $tambahan;
        $this->kode = $kode;
    }

    public function tampilkandata() {
        echo "Nama Pembeli  : " . $this->nama_pembeli . "<br>";
        echo "Telepon       : " . $this->telp . "<br>";
        echo "Alamat        : " . $this->alamat . "<br>";
        echo "Tambahan      : " . $this->tambahan . "<br>";
        echo "Kode          : " . $this->kode . "<br>";
    }

    // Method untuk mengembalikan data dalam bentuk array
    public function getArrayData() {
        return [
            'nama'     => $this->nama_pembeli,
            'telp'     => $this->telp,
            'alamat'   => $this->alamat,
            'tambahan' => $this->tambahan,
            'kode'     => $this->kode
        ];
    }
}

class PembayaranOnline extends Pembayaran {
    protected $data = [];

    protected function arrayPushBanyak($listData) {
        foreach ($listData as $item) {
            array_push($this->data, $item);
        }
    }

    public function proses() {
        $singleData = $this->getArrayData();
        $this->arrayPushBanyak([$singleData]); // masukkan satu data sebagai array
        $this->tampilkandata(); // tampilkan di browser
    }

    public function getData() {
        return $this->data;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama     = $_POST["nama_608"];
    $telp     = $_POST["telp_608"];
    $alamat   = $_POST["alamat_608"];
    $tambahan = $_POST["tambahan_608"];
    $kode     = $_POST["kode_608"];

    $pembayaran = new PembayaranOnline($nama, $telp, $alamat, $tambahan, $kode);
    $pembayaran->proses();

    echo "<br><strong>Data dalam array:</strong><br>";
    foreach ($pembayaran->getData() as $item) {
        foreach ($item as $key => $value) {
            echo ucfirst($key) . ": " . $value . "<br>";
        }
        echo "<br>";
    }
}
?>
