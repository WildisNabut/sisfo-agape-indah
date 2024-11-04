<?php
include 'koneksi.php';

$result = mysqli_query($koneksi, "SELECT gambar, tanggal_unggah FROM kegiatan");
$images = array();

while ($row = mysqli_fetch_assoc($result)) {
    $images[] = array(
        'url' => $row['gambar'],
        'date' => $row['tanggal_unggah']
    );
}

echo json_encode($images);
?>
