<?php
include "koneksi.php";

if(isset($_POST['kirim'])){
    $nama_lengkap  = $_POST['nama_lengkap'];
    $alamat        = $_POST['alamat'];
    $tempat_lahir  = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telepon    = $_POST['no_telepon'];
    $email         = $_POST['email'];

    $simpan = "INSERT INTO pendaftaran(nama_lengkap,alamat,tempat_lahir,tanggal_lahir,jenis_kelamin,no_telepon,email) VALUES('$nama_lengkap','$alamat','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$no_telepon','$email')";
    
    $result = mysqli_query($conn,$simpan);
}
?>
Welcome <?php echo $_POST["nama_lengkap"]; ?><br>
Your email addres is: <?php echo $_POST["email"]; 