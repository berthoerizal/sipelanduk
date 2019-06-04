<body>
    <div class="slim-header">
        <div class="container">
        <div class="slim-header-left">
          <h2 class="slim-logo"><a href="index.html">sipelanduk</a></h2>
        </div><!-- slim-header-left -->

        <div class="slim-header-right">
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <!-- <img src="http://via.placeholder.com/500x500" alt=""> -->
              <span><?php echo $this->session->userdata('username'); ?></span>
              <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <nav class="nav">
                <a href="<?php echo base_url('admin/pengelola/detail/'.$this->session->userdata('username')); ?>" class="nav-link"><i class="icon ion-person"></i> Profile</a>
                <a href="<?php echo base_url('login/logout'); ?>" class="nav-link"><i class="icon ion-forward"></i> Sign Out</a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div><!-- slim-header -->
