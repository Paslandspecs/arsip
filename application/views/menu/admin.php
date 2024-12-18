<?php
$id_user  = $this->session->userdata('id');
$user = $this->db->query("SELECT * from tb_user where id ='$id_user'")->row();
?>
<!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <?php if($user->foto == ""){?>
              <img src="<?= base_url('upload/user/default.png') ?>" alt="arsip" class="brand-image img-circle elevation-3">
            <?php }else { ?>
              <img src="<?= base_url() ?>/upload/user/<?= $user->foto?>" class="img-rounded online" alt="User Image">
            <?php } ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $user->nama_user?> <i class="fas fa-circle text-success fa-sm"></i></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="<?= base_url('admin/dashboard') ?>" class="nav-link <?= ($title == 'Dashboard') ? "active" : "" ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Master Data</li>
          <li class="nav-item">
            <a href="<?= base_url('admin/Divisi') ?>" class="nav-link <?= ($title == 'Divisi') ? "active" : "" ?>">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Divisi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/Users') ?>" class="nav-link <?= ($title == 'Users') ? "active" : "" ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="<?= base_url('admin/Sarana') ?>" class="nav-link <?= ($title == 'Sarana') ? "active" : "" ?>">
                  <i class="nav-icon fas fa-box"></i>
                  <p>Sarana Simpan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/Kategori') ?>" class="nav-link <?= ($title == 'Kategori') ? "active" : "" ?>">
                  <i class="nav-icon fas fa-tag"></i>
                  <p>Kategori</p>
                </a>
              </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/Arsip') ?>" class="nav-link <?= ($title == 'Arsip') ? "active" : "" ?>">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Arsip Document
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/Pinjam') ?>" class="nav-link <?= ($title == 'Pinjaman') ? "active" : "" ?>">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                Peminjaman
              </p>
            </a>
          </li>
          <li class="nav-header">Setting</li>
          <li class="nav-item">
            <a href="<?= base_url('admin/Setting') ?>" class="nav-link <?= ($title == 'Setting') ? "active" : "" ?>">
              <i class="nav-icon fas fa-flag"></i>
              <p>
                Perusahaan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/Backup') ?>" class="nav-link <?= ($title == 'Backup') ? "active" : "" ?>">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Backup Database
              </p>
            </a>
          </li>
          <li class="nav-header">Akun</li>
          <li class="nav-item">
            <a href="<?= base_url('Profil') ?>" class="nav-link <?= ($title == 'Profil') ? "active" : "" ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" onclick="logout()" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          <br><br>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->