<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMP Agape Indah - Galeri</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="style_CSS/galery.css" />
    <style>
        /* Tambahkan CSS yang diperlukan di sini */
        #modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        #modal img {
            max-width: 90%;
            max-height: 90%;
        }

        #modalClose {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 30px;
            cursor: pointer;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
        }

        .gallery div {
            display: inline-block;
            margin: 5px;
            text-align: center; /* Center the text */
        }

        .gallery img {
            width: 150px; /* Atur lebar gambar sesuai kebutuhan */
            height: auto; /* Mempertahankan rasio aspek */
            cursor: pointer;
        }

        .gallery p {
            font-size: 12px; /* Atur ukuran font sesuai kebutuhan */
            color: #fff; /* Atur warna teks */
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <img src="assets/logoagape.png" alt="Logoagape" class="logo-left" />
        <div class="top-nav">
            <a href="Beranda.php">Beranda</a>
            <a href="tentang.php">Tentang</a>
            <a href="program.php">Program</a>
            <a href="fasilitas.php">Fasilitas</a>
            <a href="kontak.php">Kontak</a>
            <a href="Galery.php">Galeri</a>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="hero" style="background-image: url('assets/piu.webp'); background-size: cover; background-position: center">
        <div class="overlay"></div>
    </div>

    <div class="container">
        <section>
            <h2><i data-feather="image" class="icon-small"></i>Galeri Foto</h2>
            <div class="gallery" id="galleryContainer"></div>
        </section>
    </div>

    <footer>
        <div class="footer">
            <div class="footer-section">
                <h3>SMP Agape Indah</h3>
                <p>
                    SMP Agape Indah adalah sekolah menengah pertama yang berlokasi di [lokasi Anda]. Sama seperti SMP lainnya di Indonesia, SMP Agape Indah menawarkan program pendidikan untuk siswa dari kelas VII hingga kelas IX.
                </p>
                <p><strong>Alamat:</strong> Jl. Contoh, Kota Contoh, Provinsi Contoh, Indonesia</p>
                <p><strong>Email:</strong> smpagapeindah@example.com</p>
                <div class="social-icons">
                    <a href="#"><i data-feather="facebook" class="icon-small"></i></a>
                    <a href="#"><i data-feather="youtube" class="icon-small"></i></a>
                    <a href="https://www.instagram.com/smpkagapeindah?igsh=MThtejJxN3Ywem54aw==">
                        <i data-feather="instagram" class="icon-small"></i>
                    </a>
                </div>
            </div>

            <!-- Peta Lokasi -->
            <div class="footer-section map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17445.841308163348!2d123.60862167630117!3d-10.16776760510314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c56835992a6fbf3%3A0xc4b28a965a40d8b!2sSekolah%20Menengah%20Pertama%20Agape%20Indah!5e0!3m2!1sid!2sid!4v1730387975655!5m2!1sid!2sid"
                    class="responsive-map"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            &copy; Copyright SMP Agape Indah 2024. All Rights Reserved.
        </div>
    </footer>

    <!-- Modal for displaying full image -->
    <div id="modal">
        <span id="modalClose">&times;</span>
        <img id="modalImage" src="" alt="Modal Image" />
    </div>

    <script>
        feather.replace();

        // Load images from the database and display in gallery
        document.addEventListener("DOMContentLoaded", function () {
            const galleryContainer = document.getElementById("galleryContainer");

            // Fetch images from the server
            fetch('carigambar.php')
                .then(response => response.json())
                .then(images => {
                    images.forEach((image) => {
                        const imgContainer = document.createElement("div");
                        const imgElement = document.createElement("img");
                        imgElement.src = image.url; // Set image source from database
                        imgElement.alt = "Gallery Image";
                        imgElement.addEventListener("click", function () {
                            openModal(image.url);
                        });

                        const dateElement = document.createElement("p");
                        dateElement.textContent = new Date(image.date).toLocaleDateString('id-ID'); // Format tanggal

                        imgContainer.appendChild(imgElement);
                        imgContainer.appendChild(dateElement);
                        galleryContainer.appendChild(imgContainer);
                    });
                })
                .catch(error => console.error('Error fetching images:', error));
        });

        // Function to open modal with the full image
        function openModal(imageUrl) {
            const modal = document.getElementById("modal");
            const modalImage = document.getElementById("modalImage");
            modal.style.display = "flex"; // Use flex to center the image
            modalImage.src = imageUrl;

            const modalClose = document.getElementById("modalClose");
            modalClose.onclick = function () {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
