<form action="pemesanan.php" method="POST">
    Nama = <input type="text" name="nama_605"> <br>
    Email = <input type="text" name="email_605"> <br>
    Telepon = <input type="text" name="telp_605"> <br>
    Tanggal Reservasi = <input type="date" name="tanggal_605"> <br>
    Jam Reservasi = <input type="time" name="jam_605"> <br>
    <input type="submit" value="Reservasi">
</form>

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
        foreach ($this->data_605 as $a) {
            echo "Nama : " . $a['nama'] . "<br>";
            echo "Email : " . $a['email'] . "<br>";
            echo "Telepon : " . $a['telp'] . "<br>";
            echo "Tanggal Reservasi : " . $a['tanggal'] . "<br>";
            echo "Jam Reservasi : " . $a['jam'] . "<br><br>";
        }
    }
}

class turunan_605 extends reservasi_605 {
    public function pemesan_605() {
        echo "Reservasi oleh " . $this->nama_605 . ", pada Tanggal " . $this->tanggal_605 . "<br><br>";
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