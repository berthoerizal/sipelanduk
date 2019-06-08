<?php 
$site_config=$this->konfigurasi_model->listing(); ?> 
<body>
  <div class="slim-header">
    <div class="container">
      <div class="slim-header-left">
        <h2 class="slim-logo" style="letter-spacing: 1px;"><a href="<?php echo base_url(); ?>"><?php echo $site_config->namaweb; ?><span style="font-size: 15px; color: #333; margin-left: 10px;"><?php echo $site_config->deskripsi; ?></span></a></h2>
      </div><!-- slim-header-left -->
      <div class="slim-header-right">
          <a href="<?php echo base_url('login'); ?>" class="logged-user">
          <img src="<?php echo base_url('assets/upload/image/thumbs/'.$site_config->logo); ?>" alt="">
            <span></span>
            <i>Login</i>
          </a>
      </div><!-- header-right -->
    </div><!-- container -->
  </div><!-- slim-header -->