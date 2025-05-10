<form action="login.php" method="POST">
    Nama = <input type="text" name="username_608"> <br>
    Telp = <input type="text" name="password_608"> <br>
    <input type="submit" value="Masuk_608">
</form>

<?php

class Login608 {
    var $username608;
    var $password608;

    public function __construct($username, $password) {
        $this->username608 = $username;
        $this->password608 = $password;
    }

    public function tampilkanData608() {
        echo "Username  : " . $this->username608 . "<br>";
        echo "Password   : " . $this->password608 . "<br>";
    }
}

    public function getArrayData() {
        return [
            'username' => $this->username608,
            'password' => $this->password608
        ];
    }


?>