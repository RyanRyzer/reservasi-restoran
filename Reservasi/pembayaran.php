<form action="pembayaran.php" method="POST">
    Nama = <input type="text" name="nama_608"> <br>
    Nomor Kartu = <input type="text" name="nomor_kartu_608"> <br>
    Alamat = <input type="text" name="alamat_penagihan_608"> <br>
    Metode Pembayaran (Cash/Debit) = <input type="text" name="metode_pembayaran_608"> <br>
    Kode Transaksi = <input type="text" name="kode_transaksi_608"> <br>
    <input type="submit" value="Bayar">
</form>

<?php

class Pembayaran608 {
    var $nama_608;
    var $nomor_kartu_608;
    var $alamat_penagihan_608;
    var $metode_pembayaran_608;
    var $kode_transaksi_608;

    public function __construct($nama, $kartu, $alamat, $metode, $kode) {
        $this->nama_608 = $nama;
        $this->nomor_kartu_608 = $kartu;
        $this->alamat_penagihan_608 = $alamat;
        $this->metode_pembayaran_608 = $metode;
        $this->kode_transaksi_608 = $kode;
    }

    public function tampilkandata() {
        echo "Nama Pembayar      : " . $this->nama_608 . "<br>";
        echo "Nomor Kartu        : " . $this->nomor_kartu_608 . "<br>";
        echo "Alamat Penagihan   : " . $this->alamat_penagihan_608 . "<br>";
        echo "Metode Pembayaran  : " . $this->metode_pembayaran_608 . "<br>";
        echo "Kode Transaksi     : " . $this->kode_transaksi_608 . "<br>";
    }

    public function getArrayData() {
        return [
            'nama_pembayar'      => $this->nama_608,
            'nomor_kartu'        => $this->nomor_kartu_608,
            'alamat_penagihan'   => $this->alamat_penagihan_608,
            'metode_pembayaran'  => $this->metode_pembayaran_608,
            'kode_transaksi'     => $this->kode_transaksi_608
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
    $nama_608 = $_POST["nama_608"];
    $kartu_608 = $_POST["nomor_kartu_608"];
    $alamat_608 = $_POST["alamat_penagihan_608"];
    $metode_608 = $_POST["metode_pembayaran_608"];
    $kode_608 = $_POST["kode_transaksi_608"];

    $pembayaran_608 = new PembayaranOnline608($nama_608, $kartu_608, $alamat_608, $metode_608, $kode_608);
    $pembayaran_608->prosesPembayaran();
}
?>

