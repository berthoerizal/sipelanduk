<div class="slim-navbar">
  <div class="container">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/home'); ?>">
          <i class="icon ion-ios-home-outline"></i>
          <span>Home</span>
        </a>
      </li>
      <?php if ($this->session->userdata('akses_level') == 21) { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/pengelola'); ?>">
            <i class="icon ion-ios-person-outline"></i>
            <span>Pengelola</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/layanan'); ?>">
            <i class="icon ion-ios-book-outline"></i>
            <span>Layanan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/kota'); ?>">
            <i class="icon ion-ios-location-outline"></i>
            <span>Kota</span>
          </a>
        </li>
      <?php } ?>
      <?php if ($this->session->userdata('akses_level') == 10) { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/layanan/input_data'); ?>">
            <i class="icon ion-ios-compose-outline"></i>
            <span>Input Data</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/layanan/data_layanan'); ?>">
            <i class="icon ion-ios-paper-outline"></i>
            <span>Data Layanan</span>
          </a>
        </li>
      <?php } ?>
    </ul>
  </div><!-- container -->
</div><!-- slim-navbar -->