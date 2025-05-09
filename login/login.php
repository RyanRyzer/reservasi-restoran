<form method="POST">
    Nama = <input type="text" name="username_608"> <br>
    Password = <input type="password" name="password_608"> <br>
    <input type="submit" value="Login">
</form>

<?php
session_start();

class ProsesLogin608 {
    private $username_608;
    private $password_608;
    private $hakAkses_608;
    private $valid_608 = false;

    public function __construct($username_608, $password_608) {
        $this->username_608 = $username_608;
        $this->password_608 = $password_608;
    }

public function login608() {
        if ($this->username_608 === "admin" && $this->password_608 === "admin123") {
            $this->hakAkses_608 = "admin";
            $this->valid_608 = true;
            echo "Selamat datang admin";
        } elseif ($this->username_608 === "mhs" && $this->password_608 === "mhs608") {
            $this->hakAkses_608 = "mahasiswa";
            $this->valid_608 = true;
            echo "Selamat datang mahasiswa";
        } else {
            $this->hakAkses_608 = "";
            $this->valid_608 = false;
            echo "Username atau Password salah";
        }

        if ($this->valid_608) {
            $_SESSION['username_608'] = $this->username_608;
            $_SESSION['hak_akses_608'] = $this->hakAkses_608;
        }
    }
}

if($_POST) {
    $username_608 = $_POST['username_608'];
    $password_608 = $_POST['password_608'];

    $login608 = new ProsesLogin608($username_608, $password_608);
    $login608->login608();
}
?>
