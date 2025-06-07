<?php
include 'koneksi.php';

if (isset($_GET['id_kegiatan'])) {
    $id_kegiatan = $_GET['id_kegiatan'];
    
    // Query untuk menghapus data
    $query = "DELETE FROM portofolio WHERE id_kegiatan = '$id_kegiatan'";
    
    if (mysqli_query($koneksi, $query)) {
        // Redirect ke halaman utama setelah berhasil hapus
        header("Location: index.php?status=sukses");
    } else {
        // Redirect dengan status gagal jika error
        header("Location: index.php?status=gagal");
    }
} else {
    // Redirect jika tidak ada ID
    header("Location: index.php");
}
?>
