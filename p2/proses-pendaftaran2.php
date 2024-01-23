<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['Daftar2'])){

    // ambil data dari formulir
    $nama_guru = $_POST['nama_guru'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    // buat query
    $sql = "INSERT INTO guru (nama_guru, jenis_kelamin, alamat, no_telepon , email ) VALUE ('$nama_guru', '$jenis_kelamin', '$alamat','$no_telepon','$email')";
    $query2 = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query2 ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index2.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index2.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>