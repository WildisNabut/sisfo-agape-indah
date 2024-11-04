<?php

//koneksi basis data
include 'koneksi.php';

// menangkap data yang di kirim dari form 
$nip = $_POST['nip'];
$nama_guru = $_POST['nama'];
$jk = $_POST['jk'];
$tlpn = $_POST['tlpn'];
$alamat = $_POST['alamat'];


//input data ke basis data 
mysqli_query($koneksi, "insert into guru value('$id_guru','$nip', '$nama_guru', '$jk','$tlpn', '$alamat')" );

//mengalihkan halaman kembali ke kelas.php
header("location:guru.php");
?>