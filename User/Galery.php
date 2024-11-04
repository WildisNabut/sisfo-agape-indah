<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMP Agape Indah - Galeri</title>
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="style_CSS/galery.css" />
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <img src="assets/logoagape.png" alt="Logoagape" class="logo-left" />
      <div class="top-nav">
        <a href="Beranda.html">Beranda</a>
        <a href="tentang.html">Tentang</a>
        <a href="program.html">Program</a>
        <a href="fasilitas.html">Fasilitas</a>
        <a href="kontak.html">Kontak</a>
        <a href="Galery.html">Galeri</a>
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
        <!-- Info Sekolah -->
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
        ></iframe>    </div>
      </div>
    
      <!-- Footer Bottom -->
      <div class="footer-bottom">
        &copy; Copyright SMP Agape Indah 2024. All Rights Reserved.
      </div>
    </footer>

    <script>
      feather.replace();

// Load images from Local Storage and display in gallery
document.addEventListener("DOMContentLoaded", function () {
  const galleryContainer = document.getElementById("galleryContainer");
  const images = JSON.parse(localStorage.getItem("galleryImages")) || [];

  images.forEach((image) => {
    const imgElement = document.createElement("img");
    imgElement.src = image;
    imgElement.alt = "Gallery Image";
    imgElement.addEventListener("click", function () {
      openModal(image);
    });
    galleryContainer.appendChild(imgElement);
  });
});

// Function to open modal with image
function openModal(imageSrc) {
  const modal = document.getElementById("modal");
  const modalImage = document.getElementById("modalImage");
  modalImage.src = imageSrc;
  modal.style.display = "flex";
}

// Close modal when clicking the close button or outside the image
const modal = document.getElementById("modal");
const modalClose = document.getElementById("modalClose");
modalClose.addEventListener("click", function () {
  modal.style.display = "none";
});

modal.addEventListener("click", function (event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});
    </script>
  </body>
</html>
