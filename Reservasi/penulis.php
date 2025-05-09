<form action="penulis.php" method="POST">
    Nama = <input type="text" name="nama_txt"> <br>
    Telp = <input type="text" name="telp_txt"> <br>
    Alamat = <input type="text" name="alamat_txt"> <br>
    <input type="submit" value="Simpan">
</form>

<?php
class penulis{
var $nama_penulis;
var $telp;
var $alamat;

public function __construct($nama_penulis_txt,$telp,$alamat){
    $this->nama_penulis=$nama_penulis_txt;
    $this->telp=$telp;
    $this->alamat=$alamat;
    echo $this->nama_penulis;
}

public function tampilkanprofil(){
    echo "Nama Penulis  : ".$this->nama_penulis; echo "<br>";
    echo "Telepon       : ".$this->telp; echo "<br>";
    echo "Alamat        : ".$this->alamat; echo "<br>";
}
}

function tambahdata($namax,$telpx,$alamatx){
    echo $namax; echo "<br>";
    echo $telpx; echo "<br>";
    echo $alamatx; echo "<br>";
}

if ($_POST){
    $nama=$_POST["nama_txt"];
    $telp=$_POST["telp_txt"];
    $alamat=$_POST["alamat_txt"];
    
    tambahdata($nama,$telp,$alamat);
}

//$penulis_A=new penulis($nama,$telp,$alamat);

// if ($_POST){
//     echo "Nama Penulis : ".$_POST["nama_txt"]; echo "<br>";
//     echo "Telepon      : ".$_POST["telp"]; echo "<br>";
//     echo "Alamat       : ".$_POST["alamat"]; echo "<br>";
// }

#$penulis_A=new penulis("Pratama", "7777", "Solo");

?>