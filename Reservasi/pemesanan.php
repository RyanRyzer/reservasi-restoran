<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<div class="bg-white shadow-md rounded p-6 max-w-xl mx-auto">
    <form action="dashboard.php?page=reservasi" method="POST" class="space-y-4">
        <div>
            <label for="nama_605" class="block text-gray-700 font-semibold">Nama</label>
            <input type="text" name="nama_605" id="nama_605" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div>
            <label for="email_605" class="block text-gray-700 font-semibold">Email</label>
            <input type="email" name="email_605" id="email_605" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div>
            <label for="telp_605" class="block text-gray-700 font-semibold">Telepon</label>
            <input type="text" name="telp_605" id="telp_605" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div>
            <label for="tanggal_605" class="block text-gray-700 font-semibold">Tanggal Reservasi</label>
            <input type="date" name="tanggal_605" id="tanggal_605" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div>
            <label for="jam_605" class="block text-gray-700 font-semibold">Jam Reservasi</label>
            <input type="time" name="jam_605" id="jam_605" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div>
            <input type="submit" value="Reservasi" class="bg-purple-500 text-white px-6 py-2 rounded hover:bg-purple-600 cursor-pointer">
        </div>
    </form>
</div>

<?php

class reservasi_605 {
    var $nama_605;
    var $email_605;
    var $telp_605;
    var $tanggal_605;
    var $jam_605;
    var $data_605 = [];

    public function __construct($nama, $email, $telp, $tanggal, $jam) {
        $this->nama_605    = $nama;
        $this->email_605   = $email;
        $this->telp_605    = $telp;
        $this->tanggal_605 = $tanggal;
        $this->jam_605     = $jam;
    }

    protected function protected_605() {
        array_push($this->data_605, [
            'nama'    => $this->nama_605,
            'email'   => $this->email_605,
            'telp'    => $this->telp_605,
            'tanggal' => $this->tanggal_605,
            'jam'     => $this->jam_605
        ]);
    }

    public function tampilkan_605() {
        $this->protected_605();
        echo '<div class="bg-white shadow-md rounded p-6 mt-6 max-w-xl mx-auto">';
        foreach ($this->data_605 as $a) {
            echo "<p><strong>Nama:</strong> {$a['nama']}</p>";
            echo "<p><strong>Email:</strong> {$a['email']}</p>";
            echo "<p><strong>Telepon:</strong> {$a['telp']}</p>";
            echo "<p><strong>Tanggal Reservasi:</strong> {$a['tanggal']}</p>";
            echo "<p><strong>Jam Reservasi:</strong> {$a['jam']}</p>";
        }
        echo '</div>';
    }
}

class turunan_605 extends reservasi_605 {
    public function pemesan_605() {
        echo '<div class="text-center text-lg font-semibold text-purple-600 mt-4">';
        echo "Reservasi oleh " . $this->nama_605 . ", pada Tanggal " . $this->tanggal_605;
        echo '</div>';
    }
}

if ($_POST) {
    $nama = $_POST['nama_605'];
    $email = $_POST['email_605'];
    $telp = $_POST['telp_605'];
    $tanggal = $_POST['tanggal_605'];
    $jam = $_POST['jam_605'];

    $print_605 = new turunan_605($nama, $email, $telp, $tanggal, $jam);
    $print_605->tampilkan_605();
    $print_605->pemesan_605();
}
?>
