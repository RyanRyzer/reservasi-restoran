<form method="POST">
    Nama = <input type="text" name="username_608"> <br>
    Password = <input type="password" name="password_608"> <br>
    <input type="submit" value="Login">
</form>

<?php
session_start();
if($_POST){
    $username = $_POST['username_608'];
    $password = $_POST['password_608'];

    if($username == "admin" && $password == "admin123"){
        $hak_akses = "admin";$valid = true;
    }else if ($username == "mhs" && $password == "mhs608"){
        $hak_akses = "mahasiswa";$valid = true;
    }else{
        $hak_akses = "";$valid = false;
        echo "Username atau Password salah";
    }

    if($valid){
        $_SESSION['username'] = $username;
        $_SESSION['hak_akses'] = $hak_akses;
    }
}

if(!empty($_SESSION['username'])){
    echo "Nama = ".$_SESSION['username']."<br>";
    echo "Hak Akses = ".$_SESSION['hak_akses']."<br>";
}

if($_GET){
    if($_GET['logout'] == "true"){
        session_unset();
        session_destroy();
        echo "Anda sudah logout";
        header("Location: login.php");
        exit();
    }
}

?>