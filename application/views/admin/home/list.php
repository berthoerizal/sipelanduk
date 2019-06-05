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
          <p><span style="font-weight: bold; font-size: 30px;">PDAK</span> <span style="font-size: 16px;">Direktorat Jenderal Kependudukan dan Pencatatan Sipil</span></p>

         <div class="row">
          <div class="col-md-8" id="menu">
          <ul class="nav nav-activity-profile mg-t-20">
              <li class="nav-item"><a href="" id="pendaftaran_penduduk" class="nav-link"><i class="icon ion-document-text tx-primary"></i> Pendaftaran Penduduk</a></li>
              <li class="nav-item"><a href="" id="pencatatan_sipil" class="nav-link"><i class="icon ion-document-text tx-success"></i> Pencatatan Sipil</a></li>
            </ul><!-- nav -->
            </div>
         </div>
        </div><!-- section-wrapper -->
      </div><!-- container -->
    </div><!-- slim-mainpanel -->
