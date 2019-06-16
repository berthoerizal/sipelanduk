<?php
$site_config = $this->konfigurasi_model->listing(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Meta -->
  <meta name="description" content="<?php echo $site_config->deskripsi ?>">
  <meta name="author" content="PDAK">

  <title><?php echo $site_config->namaweb; ?></title>
  <meta name="title" content="<?php echo $site_config->metatext ?>">
  <meta name="keywords" content="<?php echo $site_config->keywords ?>">

  <!-- vendor css -->
  <link href="<?php echo base_url(); ?>assets/admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/admin/lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/admin/lib/datatables/css/jquery.dataTables.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/admin/lib/select2/css/select2.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/admin/lib/select2/css/select2.min.css" rel="stylesheet">

  <!-- Slim CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/slim.css">

  <script src="<?php echo base_url(); ?>assets/highchart/highcharts.js"></script>
  <script src="<?php echo base_url(); ?>assets/highchart/exporting.js"></script>

</head>