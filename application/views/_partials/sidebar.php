<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('asset/gambar/logo.png'); ?>" alt="HR Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">HRD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('asset/img/user.png'); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('nama'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="<?php echo base_url('dashboard'); ?>" class="nav-link <?php echo active_menu('dashboard',$this->uri->segment(2)); ?>">
              <i class="nav-icon fa fa-dashboard text-info"></i>
              <p style="color:#fff;">Dashboard</p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php echo active_menu_open('master'); ?>">
            <a href="#" class="nav-link <?php echo active_menu('master',$this->uri->segment(2)); ?>">
              <i class="nav-icon fa fa-server"></i>
              <p>
                Master
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('master/upah'); ?>" class="nav-link <?php echo active_menu('master','upah'); ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Master Upah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('master/cabang'); ?>" class="nav-link <?php echo active_menu('master','cabang'); ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Master Cabang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('master/bagian'); ?>" class="nav-link <?php echo active_menu('master','bagian'); ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Master Bagian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('master/tingkatan'); ?>" class="nav-link <?php echo active_menu('master','tingkatan'); ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Master Tingkatan Upah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('master/kategori'); ?>" class="nav-link <?php echo active_menu('master','kategori'); ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Kategori Bagian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('master/jabatan'); ?>" class="nav-link <?php echo active_menu('master','jabatan'); ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Kategori Jabatan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php echo active_menu_open('interview'); ?>">
            <a href="#" class="nav-link <?php echo active_menu('interview',$this->uri->segment(2)); ?>">
              <i class="nav-icon fa fa-server"></i>
              <p>
                Interview
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('interview/ktp/input'); ?>" class="nav-link <?php echo active_menu('interview','-'); ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Biodata Input</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('interview/lihat'); ?>" class="nav-link <?php echo active_menu('interview','lihat'); ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>interview</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('interview/pengiriman'); ?>" class="nav-link <?php echo active_menu('interview','pengiriman'); ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Pengiriman</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php echo active_menu_open('pengiriman'); ?>">
            <a href="#" class="nav-link <?php echo active_menu('pengiriman',$this->uri->segment(2)); ?>">
              <i class="nav-icon fa fa-paper-plane"></i>
              <p>
                Pengiriman
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('pengiriman'); ?>" class="nav-link <?php echo active_menu('pengiriman',''); ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Pengiriman</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>