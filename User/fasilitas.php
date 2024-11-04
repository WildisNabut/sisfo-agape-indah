<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMP Agape Indah - Fasilitas</title>
    <link rel="stylesheet" href="style_CSS/fasilitas.css" />
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <body>
      <!-- navbar star -->
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
      <!-- Navbar and-->
      <div class="hero" style="background-image: url('assets/piu.webp'); background-size: cover; background-position: center">
        <div class="overlay"></div>
      
      </div>

    <div class="container">
      <section>
        <h2>Ruang Kelas</h2>
        <p>Ruang kelas modern dilengkapi dengan proyektor, papan interaktif, dan fasilitas nyaman untuk belajar.</p>
      </section>

      <section>
        <h2>Laboratorium</h2>
        <p>Laboratorium sains dan komputer yang lengkap, mendukung pembelajaran praktis untuk siswa.</p>
      </section>

      <section>
        <h2>Area Olahraga</h2>
        <p>Area olahraga yang luas mencakup lapangan sepak bola, basket, dan fasilitas olahraga lainnya.</p>
      </section>

      <section>
        <h2>Perpustakaan</h2>
        <p>Perpustakaan yang nyaman dengan koleksi buku yang beragam, serta area baca yang tenang.</p>
      </section>

      <section>
        <h2>Ruang Kegiatan Ekstrakurikuler</h2>
        <p>Ruang yang disediakan untuk kegiatan ekstrakurikuler seperti seni, musik, dan klub lainnya.</p>
      </section>

      <section>
        <h2>Fasilitas Kesehatan</h2>
        <p>Fasilitas kesehatan yang dilengkapi dengan tenaga medis untuk memberikan perawatan kesehatan kepada siswa.</p>
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
      // Smooth scrolling
      const links = document.querySelectorAll("nav a");
      links.forEach((link) => {
        link.addEventListener("click", function (e) {
          const targetId = this.getAttribute("href");
          // Pastikan target adalah elemen di halaman saat ini
          if (targetId.startsWith("#")) {
            e.preventDefault();
            const targetSection = document.querySelector(targetId);
            if (targetSection) {
              targetSection.scrollIntoView({ behavior: "smooth" });
            } else {
              console.error("Element not found for smooth scrolling:", targetId);
            }
          }
        });
      });
    </script>
  </body>
</html>
