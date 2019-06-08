<?php 
$site_config=$this->konfigurasi_model->listing(); ?> 
<body>
  <div class="slim-header">
    <div class="container">
      <div class="slim-header-left">
        <h2 class="slim-logo" style="letter-spacing: 1px;"><a href="<?php echo base_url('admin/home'); ?>"><?php echo $site_config->namaweb; ?><span style="font-size: 15px; color: #333; margin-left: 10px;"><?php echo $site_config->deskripsi; ?></span></a></h2>
      </div><!-- slim-header-left -->
      <div class="slim-header-right">
        <div class="dropdown dropdown-c">
          <a href="#" class="logged-user" data-toggle="dropdown">
          <img src="<?php echo base_url('assets/upload/image/thumbs/'.$site_config->logo); ?>" alt="">
            <span><?php echo $this->session->userdata('username'); ?></span>
            <i class="fa fa-angle-down"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <nav class="nav">
              <a href="<?php echo base_url('admin/pengelola/detail/'.$this->encrypt->encode($this->session->userdata('username'))); ?>" class="nav-link"><i class="icon ion-person"></i> Profile</a>
              <?php if($this->session->userdata('akses_level')==21) { ?> 
                <a href="<?php echo base_url('admin/konfigurasi'); ?>" class="nav-link"><i class="icon ion-gear-a"></i> Konfigurasi</a>
              <?php } ?>
              <a href="<?php echo base_url('login/logout'); ?>" class="nav-link"><i class="icon ion-forward"></i> Sign Out</a>
            </nav>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </div><!-- header-right -->
    </div><!-- container -->
  </div><!-- slim-header -->