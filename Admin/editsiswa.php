<?php
include 'koneksi.php';

if (isset($_GET['nis'])) {
    $nis = $_GET['nis'];

    // Mengambil data siswa berdasarkan NIS
    $query = "SELECT * FROM siswa WHERE nis='$nis'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);

    if (!$data) {
        echo "Data tidak ditemukan!";
        exit();
    }

    if (isset($_POST['update'])) {
        // Mengambil data yang diupdate dari form
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $alamat = $_POST['alamat'];
        $keterangan = $_POST['keterangan'];
        
        // Query untuk update data
        $updateQuery = "UPDATE siswa SET 
                        nis='$nis', 
                        nama='$nama', 
                        jk='$jk', 
                        tgl_lahir='$tgl_lahir', 
                        alamat='$alamat', 
                        keterangan='$keterangan' 
                        WHERE nis='$nis'";
        
        if (mysqli_query($koneksi, $updateQuery)) {
            echo "Data berhasil diperbarui!";
            header("Location: siswa.php");
            exit();
        } else {
            echo "Gagal memperbarui data!";
        }
    }
} else {
    echo "NIS tidak ditemukan!";
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Sisfo Agape</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Sekolah</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Data Sekolah</h6>
              <a class="collapse-item" href="guru.php">Guru</a>
              <a class="collapse-item" href="siswa.php">Siswa</a>
              <a class="collapse-item" href="kelas.php">Kelas</a>
              
              <a class="collapse-item" href="pengumuman.php">Pengumuman</a>
              <a class="collapse-item" href="kegiatan.php">Kegiatan</a>
            </div>
          </div>
        </li>

         <!-- Divider -->
         <hr class="sidebar-divider" />

          <!-- Nav Item - Buku -->
          <li class="nav-item active">
          <a class="nav-link" href="renungan.php">
          <i class="fas fa-fw fa-book"></i>
          <span>Renungan</span>
          </a>
      </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>


              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                  <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800">Form Edit Data Siswa</h1>
    <form method="POST">
        <div class="form-group row">
            <label for="inputnisn" class="col-sm-2 col-form-label">NISN</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputnama" name="nama" value="<?php echo $data['nis']; ?>">
            </div>
        </div>


        <div class="form-group row">
            <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputnama" name="nama" value="<?php echo $data['nama']; ?>">
            </div>
        </div>

        <!-- Input Guru dengan Opsi Pilih dari Tabel -->
        <div class="form-group row">
            <label for="inputWali" class="col-sm-2 col-form-label">Wali Kelas</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputwali" name="wali" placeholder="Pilih Wali kelas" readonly value="<?php echo $data['id_guru']; ?>">
            </div>
            <div class="col-sm-2">
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalGuru">Pilih Wali</button>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputjeniskelamin" class="col-sm-2 col-form-label" >Jenis Kelamin</label>
            <div class="col-sm-10">
                <select class="form-control" id="inputjeniskelamin" name="jenis_kelamin" value="<?php echo $data['jk']; ?>">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="inputtanggallahir" name="tanggal_lahir" value="<?php echo $data['tgl_lahir']; ?>">
            </div>
        </div>

        <!-- Input Kelas dengan Opsi Pilih dari Tabel -->
        <div class="form-group row">
            <label for="inputkelas" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputkelas" name="kelas" placeholder="Pilih Nama Kelas" readonly value="<?php echo $data['id_kelas']; ?>">
            </div>
            <div class="col-sm-2">
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalKelas">Pilih Kelas</button>
            </div>
        </div>

        


        <div class="form-group row">
            <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputalamat" name="alamat" value="<?php echo $data['alamat']; ?>" rows="3" >
            </div>
        </div>

        <div class="form-group row">
            <label for="inputketerangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputketerangan" name="keterangan" rows="3" value="<?php echo $data['keterangan']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
<!-- /.container-fluid -->

<!-- Modal Tabel Kelas -->
<div class="modal fade" id="modalKelas" tabindex="-1" role="dialog" aria-labelledby="modalKelasLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalKelasLabel">Pilih Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>ID Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "SELECT * FROM kelas");
                        while($d = mysqli_fetch_array($data)) {
                        ?>
                        <tr>

                            <td><?php echo $d['id_kelas']; ?></td>
                            <td><?php echo $d['nama_kelas']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary pilih-kelas" data-id="<?php echo $d['id_kelas']; ?>" data-nama="<?php echo $d['nama_kelas']; ?>">Pilih</button>
                            </td>

                        </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="card-header py-3">
                      <a href="TambahKelas.php" class="btn btn-primary ">Tambah Data</a>
                  </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Script untuk mengisi input ID Kelas saat tombol "Pilih" diklik
    document.querySelectorAll('.pilih-kelas').forEach(button => {
        button.addEventListener('click', function() {
            const idKelas = this.getAttribute('data-id'); // Mengambil ID Kelas
            document.getElementById('inputkelas').value = idKelas; // Mengisi input dengan ID Kelas
            $('#modalKelas').modal('hide'); // Menutup modal setelah memilih kelas
        });
    });
</script>

<!-- Modal Tabel Guru -->
<div class="modal fade" id="modalGuru" tabindex="-1" role="dialog" aria-labelledby="modalGuruLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalGuruLabel">Pilih Wali Kelas Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered" id="dataTableGuru" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Guru</th>
                            <th>Nama Guru</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $dataGuru = mysqli_query($koneksi, "SELECT * FROM guru");
                        while($g = mysqli_fetch_array($dataGuru)) {
                        ?>
                        <tr>
                            <td><?php echo $g['id_guru']; ?></td>
                            <td><?php echo $g['nama_guru']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary pilih-guru" data-id="<?php echo $g['id_guru']; ?>" data-nama="<?php echo $g['nama_guru']; ?>">Pilih</button>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    // Script untuk mengisi input ID Guru saat tombol "Pilih" diklik
    document.querySelectorAll('.pilih-guru').forEach(button => {
        button.addEventListener('click', function() {
            const idGuru = this.getAttribute('data-id'); // Mengambil ID Guru
            document.getElementById('inputwali').value = idGuru; // Mengisi input dengan ID Guru
            $('#modalGuru').modal('hide'); // Menutup modal setelah memilih guru
        });
    });
</script>



          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2021</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  </body>
</html>