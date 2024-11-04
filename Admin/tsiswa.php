<?php
// Koneksi ke basis data
include 'koneksi.php';

// Menangkap data yang dikirim dari form
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$tgl_lahir = $_POST['tanggal_lahir'];
$id_kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$keterangan = $_POST['keterangan'];
$id_guru = $_POST['wali'];

// Cek apakah id_kelas ada di tabel kelas
$cek_kelas = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'");
if (mysqli_num_rows($cek_kelas) > 0) {
    
    // Jika id_kelas ditemukan, lanjutkan proses penyimpanan data
    $query = "INSERT INTO siswa (nis, nama, jk, tgl_lahir, id_kelas, alamat, keterangan, id_guru) 
              VALUES ('$nis', '$nama', '$jk', '$tgl_lahir', '$id_kelas', '$alamat', '$keterangan', '$id_guru')";

    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, alihkan halaman kembali ke siswa.php
        header("Location: siswa.php");
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    // Jika id_kelas tidak ditemukan, tampilkan pesan error
    echo "Error: Kelas dengan ID '$id_kelas' tidak ditemukan. Pastikan ID kelas valid.";
}

// Menutup koneksi
mysqli_close($koneksi);
?>
