<form action="pembayaran.php" method="POST">
    Nama = <input type="text" name="nama_608"> <br>
    Telp = <input type="text" name="telp_608"> <br>
    Alamat = <input type="text" name="alamat_608"> <br>
    Tambahan = <input type="text" name="tambahan_608"> <br>
    Kode = <input type="text" name="kode_608"> <br>
    <input type="submit" value="Simpan">
</form>

<?php

class Pembayaran608 {
    var $nama_pembeli608;
    var $telp608;
    var $alamat608;
    var $tambahan608;
    var $kode608;

    public function __construct($nama_pembeli_txt, $telp, $alamat, $tambahan, $kode) {
        $this->nama_pembeli608 = $nama_pembeli_txt;
        $this->telp608 = $telp;
        $this->alamat608 = $alamat;
        $this->tambahan608 = $tambahan;
        $this->kode608 = $kode;
    }

    public function tampilkandata() {
        echo "Nama Pembeli  : " . $this->nama_pembeli608 . "<br>";
        echo "Telepon       : " . $this->telp608 . "<br>";
        echo "Alamat        : " . $this->alamat608 . "<br>";
        echo "Tambahan      : " . $this->tambahan608 . "<br>";
        echo "Kode          : " . $this->kode608 . "<br>";
    }

    public function getArrayData() {
        return [
            'nama'     => $this->nama_pembeli608,
            'telp'     => $this->telp608,
            'alamat'   => $this->alamat608,
            'tambahan' => $this->tambahan608,
            'kode'     => $this->kode608
        ];
    }
}

class PembayaranOnline608 extends Pembayaran608 {
    protected $data = [];

    protected function arrayPush($listdata) {
        foreach ($listdata as $item) {
            array_push($this->data, $item);
        }
    }

    public function prosesPembayaran() {
        $this->arrayPush([$this->getArrayData()]);
        $this->tampilkandata();
    }

    public function tampilkanSemuaData() {
        foreach ($this->data as $item) {
            foreach ($item as $key => $value) {
                echo ($key) . ": " . $value . "<br>";
            }
        }
    }
}

if ($_POST) {
    $nama = $_POST["nama_608"];
    $telp = $_POST["telp_608"];
    $alamat = $_POST["alamat_608"];
    $tambahan = $_POST["tambahan_608"];
    $kode = $_POST["kode_608"];

    $pembayaran_1 = new PembayaranOnline608($nama, $telp, $alamat, $tambahan, $kode);
    $pembayaran_1->prosesPembayaran();
}

?>
