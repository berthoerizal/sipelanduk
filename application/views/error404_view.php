<?php 
$site_config=$this->konfigurasi_model->listing(); ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Slim">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/slim/img/slim-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/slim">
    <meta property="og:title" content="Slim">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title><?php echo $site_config->namaweb; ?></title>

    <!-- Vendor css -->
    <link href="<?php echo base_url(); ?>assets/admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/slim.css">

  </head>
  <body>

    <div class="page-error-wrapper">
      <div>
        <h1 class="error-title">404</h1>
        <h5 class="tx-sm-24 tx-normal">Oopps. Halaman yang kamu cari tidak ditemukan.</h5>
        <p class="mg-b-50"><a href="<?php echo base_url(); ?>" class="btn btn-error">Back to Home</a></p>
      </div>

    </div><!-- page-error-wrapper -->

    <script src="<?php echo base_url(); ?>assets/admin/lib/jquery/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/lib/popper.js/js/popper.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/lib/bootstrap/js/bootstrap.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/js/slim.js"></script>

  </body>
</html>
