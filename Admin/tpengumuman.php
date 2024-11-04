<?php

//koneksi basis data
include 'koneksi.php';

// menangkap data yang di kirim dari form 
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];


//input data ke basis data 
mysqli_query($koneksi, "insert into pengumuman value('$judul', '$deskripsi','$tanggal', '$status')" );

//mengalihkan halaman kembali ke pengumuman.php
header("location:pengumuman.php");
?>