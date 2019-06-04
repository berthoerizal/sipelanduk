
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

    <title>Slim Responsive Bootstrap 4 Admin Template</title>

    <!-- Vendor css -->
    <link href="<?php echo base_url(); ?>assets/admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/slim.css">

  </head>
  <body>

    <div class="signin-wrapper">

      <div class="signin-box">
        <h2 class="slim-logo"><a href="index.html">sipelanduk</a></h2>
        <h2 class="signin-title-primary">Selamat Datang</h2>
        <h3 class="signin-title-secondary">Silahkan Login</h3>
        <?php echo validation_errors('<div class="alert alert-warning">','</div>'); ?>

<?php 
//di atas list.php
if($this->session->flashdata('sukses')) { 
echo '<div class="alert alert-success">';
echo $this->session->flashdata('sukses');
echo '</div>';
}
?>
        <form action="<?php echo base_url() ?>login" method="post" class="form login">
        <div class="form-group">
          <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
        </div><!-- form-group -->
        <div class="form-group mg-b-50">
          <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
        </div><!-- form-group -->
        <button class="btn btn-primary btn-block btn-signin" type="submit" name="submit">Sign In</button>
        </form>
      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->

    <script src="<?php echo base_url(); ?>assets/admin/lib/jquery/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/lib/popper.js/js/popper.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/lib/bootstrap/js/bootstrap.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/js/slim.js"></script>

  </body>
</html>
