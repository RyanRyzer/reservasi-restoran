<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<form action="dashboard.php?page=pembayaran" method="POST" class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_608">
            Nama
        </label>
        <input type="text" name="nama_608" id="nama_608" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Nama">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nomor_kartu_608">
            Nomor Kartu
        </label>
        <input type="text" name="nomor_kartu_608" id="nomor_kartu_608" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Nomor Kartu">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="alamat_penagihan_608">
            Alamat Penagihan
        </label>
        <input type="text" name="alamat_penagihan_608" id="alamat_penagihan_608" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Alamat">
    </div>
    <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="metode_pembayaran_608">
        Metode Pembayaran
    </label>
    <select name="metode_pembayaran_608" id="metode_pembayaran_608" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <option value="">-- Pilih Metode Pembayaran --</option>
        <option value="Cash">Cash</option>
        <option value="Debit">Debit</option>
    </select>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="kode_transaksi_608">
            Kode Transaksi
        </label>
        <input type="text" name="kode_transaksi_608" id="kode_transaksi_608" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Kode Transaksi">
    </div>
    <div class="flex items-center justify-between">
        <input type="submit" value="Bayar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
    </div>
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

    public function tampilkandata608() {
    echo '<div class="max-w-md mx-auto bg-gray-100 shadow-md rounded px-6 py-4 mb-4">';
    echo "<h2 class='text-lg font-bold mb-4'>Detail Pembayaran</h2>";
    echo "<p class='mb-2'><strong>Nama Pembayar:</strong> " . $this->nama_608 . "</p>";
    echo "<p class='mb-2'><strong>Nomor Kartu:</strong> " . $this->nomor_kartu_608 . "</p>";
    echo "<p class='mb-2'><strong>Alamat Penagihan:</strong> " . $this->alamat_penagihan_608 . "</p>";
    echo "<p class='mb-2'><strong>Metode Pembayaran:</strong> " . $this->metode_pembayaran_608 . "</p>";
    echo "<p class='mb-2'><strong>Kode Transaksi:</strong> " . $this->kode_transaksi_608 . "</p>";
    echo '</div>';
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

    protected function tambahDataDummy608() {
    $dummy = [
        'nama_pembayar'      => 'Dummy User608',
        'nomor_kartu'        => '1234-5678-9012-3456',
        'alamat_penagihan'   => 'Jl. Nagara No. 123, Surabaya',
        'metode_pembayaran'  => 'Debit',
        'kode_transaksi'     => 'TRX123456'
    ];
    array_push($this->data, $dummy);
}

public function aksesTambahDataDummy608() {
    $this->tambahDataDummy608();
}

    protected function arrayPush($listdata) {
        foreach ($listdata as $item) {
            array_push($this->data, $item);
        }
    }

    public function prosesPembayaran608() {
        $this->arrayPush([$this->getArrayData()]);
        $this->tampilkandata608();
    }

    public function tampilkanSemuaData608() {
    echo '<div class="max-w-md mx-auto bg-white shadow-md rounded px-6 py-4 mb-4">';
    echo "<h2 class='text-lg font-bold mb-4'>Semua Data Pembayaran</h2>";
    foreach ($this->data as $item) {
        foreach ($item as $key => $value) {
            echo "<p class='mb-2'><strong>" . ucfirst(str_replace('_', ' ', $key)) . ":</strong> " . $value . "</p>";
        }
        echo "<hr class='my-4'>";
    }
    echo '</div>';
}
}

    $pembayaran_608 = new PembayaranOnline608("", "", "", "", "");
    $pembayaran_608->aksesTambahDataDummy608();
    $pembayaran_608->tampilkanSemuaData608();


if ($_POST) {
    $nama_608 = $_POST["nama_608"];
    $kartu_608 = $_POST["nomor_kartu_608"];
    $alamat_608 = $_POST["alamat_penagihan_608"];
    $metode_608 = $_POST["metode_pembayaran_608"];
    $kode_608 = $_POST["kode_transaksi_608"];

    $pembayaran_608 = new PembayaranOnline608($nama_608, $kartu_608, $alamat_608, $metode_608, $kode_608);
    $pembayaran_608->prosesPembayaran608();
    $pembayaran_608->tampilkanSemuaData608();
}
?>

