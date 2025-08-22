<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($title) ?></title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href=" <?= base_url('/assets/css/admin.css') ?>">
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="sidebar-header">
      <h3>Admin Panel</h3>
      <p>Dashboard Management</p>
    </div>

    <nav class="sidebar-menu">
      <div class="menu-section">Main</div>

      <a href="<?= base_url('admin/dashboard') ?>" class="nav-link <?= ($currentPage === 'dashboard') ? 'active' : '' ?>">
        <i class="fas fa-home"></i> Dashboard
      </a>

      <a href="<?= base_url('admin/penyewa') ?>" class="nav-link <?= ($currentPage === 'penyewa') ? 'active' : '' ?>">
        <i class="fas fa-boxes"></i> Data Barang
      </a>

      <a href="<?= base_url('admin/kamar') ?>" class="nav-link <?= ($currentPage === 'kamar') ? 'active' : '' ?>">
        <i class="fas fa-file-alt"></i> Laporan Barang
      </a>

      <a href="<?= base_url('admin/pembayaran') ?>" class="nav-link <?= ($currentPage === 'pembayaran') ? 'active' : '' ?>">
        <i class="fas fa-user-friends"></i> Kelola Staff
      </a>

      <div class="menu-section">System</div>

      <a href="<?= base_url('admin/pengaturan-akun') ?>" class="nav-link <?= ($currentPage === 'pengaturan') ? 'active' : '' ?>">
        <i class="fas fa-user-cog"></i> Pengaturan Akun
      </a>

      <a href="<?= base_url('/logout') ?>" class="nav-link" id="logoutBtn">
        <i class="fas fa-sign-out-alt"></i> Logout
      </a>
    </nav>

  </div>

  <?= $this->renderSection('content') ?>

  <script src="<?= base_url('/assets/js/admin.js') ?>"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const logoutBtn = document.getElementById('logoutBtn');

      if (logoutBtn) {
        logoutBtn.addEventListener('click', function(e) {
          e.preventDefault(); // Cegah logout langsung

          Swal.fire({
            title: 'Yakin ingin logout?',
            text: 'Kamu akan keluar dari sesi sekarang.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Logout',
            cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = logoutBtn.href; // Arahkan ke URL logout
            }
          });
        });
      }
    });
  </script>
</body>

</html>