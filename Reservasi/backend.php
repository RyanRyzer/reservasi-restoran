<?php
session_start();
class prosesLoginRestoran{
    private $username = ['2313010608', '2313010604', '2313010605'];
    private $password = ['2313010608', '2313010604', '2313010605'];

        public function redirectPage($nim){
                if(!isset($nim)){
             header('Location: login.php');
            exit; 
                }
                if($nim == $this->username[0]){
                   return 'pembayaran.php'; 
                }
                elseif($nim == $this->username[1]){
                    return 'menu.php'; 
                }
                elseif($nim == $this->username[2]){
                    return 'pemesanan.php'; 
                }
                else{
                    echo("NIM TIDAK SESUAI");
                    exit;
                }
                
        }
public function prosesLogin(){
    // Memeriksa apakah username ada dalam array
    if (in_array($_POST['username'], $this->username)) {
        if ($_POST['username'] == $this->username[0] && $_POST['password'] == $this->password[0]) {
            $_SESSION['nama'] = 'Ryan';
            $_SESSION['nim'] = '2313010608';
            $_SESSION['img'] = 'ryan.jpg';
            header('Location: ./page.php');
            exit;
        } elseif ($_POST['username'] == $this->username[1] && $_POST['password'] == $this->password[1]) {
            $_SESSION['nama'] = 'Johan';
            $_SESSION['nim'] = '2313010604';
            $_SESSION['img'] = 'johan.jpg';
            header('Location: ./page.php');
            exit;
        } elseif ($_POST['username'] == $this->username[2] && $_POST['password'] == $this->password[2]) {
            $_SESSION['nama'] = 'Angga';
            $_SESSION['nim'] = '2313010605';
            $_SESSION['img'] = 'angga.jpg';
            header('Location: ./page.php');
            exit;
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak terdaftar!";
    }
}

    public function logout(){
        session_unset();
        session_destroy();
        header('Location: login.php');
        exit;
    }

}
?>