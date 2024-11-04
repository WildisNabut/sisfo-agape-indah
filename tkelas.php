<?php

//koneksi basis data
include 'koneksi.php';

// menangkap data yang di kirim dari form 
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];

//input data ke basis data 
mysqli_query($koneksi, "insert into kelas value('$id_kelas', '$nama_kelas')" );

//mengalihkan halaman kembali ke kelas.php
header("location:kelas.php");
?>