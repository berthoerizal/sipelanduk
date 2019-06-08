<div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
          <?php
          $hari=date("D");
          switch($hari){
            case 'Sun': $hari_ini="Minggu"; break;
            case 'Mon': $hari_ini="Senin"; break;
            case 'Tue': $hari_ini="Selasa"; break;
            case 'Wed': $hari_ini="Rabu"; break;
            case 'Thu': $hari_ini="Kamis"; break;
            case 'Fri': $hari_ini="Jumat"; break;
            case 'Sat': $hari_ini="Sabtu"; break;
            default: $hari_ini="Tidak diketahui"; break;
          }
          ?>
            <li class="breadcrumb-item"><b><?php echo $hari_ini; ?>, <?php echo date('d M Y'); ?></b></li>
          </ol>
          <h6 class="slim-pagetitle"><?php echo $title; ?></h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <div class="row">
            <div class="col-md-12 id="menu">
              <div class="user-btn-wrapper">
                <a href="<?php echo base_url('home'); ?>" class="btn btn-outline-primary">
                  <div class="tx-15">Pendaftaran Penduduk</div>
                </a>
                <a href="<?php echo base_url('home/pencatatan_sipil'); ?>" class="btn btn-outline-light">
                  <div class="tx-15">Pencatatan Sipil</div>
                </a>
              </div>
            </div>
          </div><br>

        <div class="row">
          <div class="col-md-12">
            <p style="background-color: #eee; padding: 5px 5px;"><span style="color: black; font-size: 14px; font-weight: bold;"> <?php echo $sub_pelayanan; ?></span></p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <?php foreach($pelayanan as $pelayanan) { ?>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="margin-bottom: 20px;">
              <a href="<?php echo base_url('home/pendaftaran_penduduk/'.$this->encrypt->encode($pelayanan->id_layanan)); ?>">
              <div class="card card-status">
                <div class="media">
                  <div class="media-body">
                    <span>
                    <h1 class="pull-right"><?php if($pelayanan->jumlah_angka==NULL){
                      echo "0";
                    } else {
                      echo $pelayanan->jumlah_angka;
                    } ?></h1><br><br>
                    <p style="color: black; font-weight: bold; text-transform: capitalize;" class="pull-right"><?php 
                    echo $pelayanan->nama_layanan; ?></p></span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- card -->
              </a>
              </div><!-- col-3 -->
              <?php } ?>
            </div>
          </div>
        </div>
        </div><!-- section-wrapper -->
      </div><!-- container -->
    </div><!-- slim-mainpanel -->
