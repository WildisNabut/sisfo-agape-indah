<?php

// Koneksi basis data
include 'koneksi.php';

// Menangkap data yang dikirim dari form
$judul = $_POST['judul'];
$tgl_unggah = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];

// Menangani pengunggahan gambar
if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == UPLOAD_ERR_OK) {
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $file_name = $_FILES['gambar']['name'];
    $file_size = $_FILES['gambar']['size'];
    $file_type = $_FILES['gambar']['type'];

    // Mengatur direktori penyimpanan gambar
    $upload_dir = 'uploads/'; // Pastikan folder ini ada
    $upload_file = $upload_dir . basename($file_name);

    // Memindahkan file ke direktori yang dituju
    if (move_uploaded_file($file_tmp, $upload_file)) {
        // Input data ke basis data
        mysqli_query($koneksi, "INSERT INTO kegiatan (judul, tgl_unggah, dekripsi, gambar) VALUES ('$judul', '$tgl_unggah', '$deskripsi', '$upload_file')");

        // Mengalihkan halaman kembali ke kegiatan.php
        header("location:kegiatan.php");
        exit(); // Pastikan script berhenti setelah pengalihan
    } else {
        echo "Error: Gambar gagal diunggah.";
    }
} else {
    echo "Error: " . $_FILES['gambar']['error'];
}
?>
