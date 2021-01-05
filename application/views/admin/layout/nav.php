 
 <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('jurusan') ?>">
          <i class="fas fa-fw fa-user-graduate"></i>
          <span>Jurusan</span></a>
      </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('mapel') ?>">
          <i class="fas fa-fw fa-book"></i>
          <span>Mata Pelajaran</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('guru') ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Guru</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('siswa') ?>">
          <i class="fas fa-fw fa-user-graduate"></i>
          <span>Siswa</span></a>
      </li>
      <!-- Heading -->
      <div class="sidebar-heading">
        Data Admin
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Data Admin</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Admin:</h6>
            <!-- <a class="collapse-item" href="<?php echo base_url('admin/profil') ?>">Profil</a> -->
            <a class="collapse-item" href="<?php echo base_url('admin/list_admin') ?>">List Admin</a>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- Content Wrapper -->

    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
    
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <h4><?php echo $title2 ?></h4>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hallo, <?php echo $this->session->userdata('username');?></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url() ?>template/back-end/images/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

