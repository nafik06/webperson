<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_kegiatan = isset($_POST['id_kegiatan']) ? mysqli_real_escape_string($koneksi, $_POST['id_kegiatan']) : '';
    $nama_kegiatan = isset($_POST['nama_kegiatan']) ? mysqli_real_escape_string($koneksi, $_POST['nama_kegiatan']) : '';
    $waktu_kegiatan = isset($_POST['waktu_kegiatan']) ? mysqli_real_escape_string($koneksi, $_POST['waktu_kegiatan']) : '';
    
    // lanjut ke query



    // Cek apakah NIM sudah ada
    $cek = mysqli_query($koneksi, "SELECT * FROM portofolio WHERE id_kegiatan = '$id_kegiatan'");
    if (mysqli_num_rows($cek) > 0) {
        header("Location: index.php?status=gagal&pesan=NIM sudah terdaftar");
        exit();
    }

    // Query tambah data
   $query = "INSERT INTO portofolio (id_kegiatan, nama_kegiatan, waktu_kegiatan)
          VALUES ('$id_kegiatan', '$nama_kegiatan', '$waktu_kegiatan')";



    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php?status=sukses");
    } else {
        header("Location: index.php?status=gagal");
    }
} else {
    header("Location: index.php");
}
