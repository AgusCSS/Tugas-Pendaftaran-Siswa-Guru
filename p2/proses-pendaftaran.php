<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['Daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kabupaten'];
    $provinsi = $_POST['provinsi'];
    $kode_pos = $_POST['kode_pos'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal']; 
    $tanggal_lahir = $_POST['tanggal_lahir'];

    // buat query
    $sql = "INSERT INTO pendaftaran (nama, alamat, jenis_kelamin, agama, sekolah_asal,no_telepon,email, kode_pos, desa,kecamatan,kabupaten,provinsi,tangga_lahir) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah','$no_telepon','$email','$kode_pos','$desa','$kecamatan','$kabupaten','$provinsi','$tanggal_lahir')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>