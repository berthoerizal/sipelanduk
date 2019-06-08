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
            <?php 
            if($this->session->flashdata('sukses'))
            {
            echo '<div class="alert alert-success">';
            echo $this->session->flashdata('sukses');
            echo '</div>';
            }
            //error validasi
            echo validation_errors('<div class="alert alert-warning">','</div>'); ?>
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 20px;">
                    <h4>Hari Ini</h4>
                    <div class="table-responsive">
                        <table id="" class="table mg-b-0 table-bordered">
                            <thead>
                                <tr>
                                    <th>Kota</th>
                                    <th>Jumlah Angka</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($pelayanan_hari_ini as $pelayanan_hari_ini) { ?>
                                <tr>
                                    <td><?php echo $pelayanan_hari_ini->nama_kota; ?></td>
                                    <td><?php if($pelayanan_hari_ini->jumlah_angka==NULL){
                                            echo "0";
                                        } else {
                                            echo $pelayanan_hari_ini->jumlah_angka;
                                        } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div><!-- table-responsive -->
                </div> <!-- col -->

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 20px;">
                    <h4>Bulan Ini</h4>
                    <div class="table-responsive">
                        <table id="" class="table mg-b-0 table-bordered">
                            <thead>
                                <tr>
                                    <th>Kota</th>
                                    <th>Jumlah Angka</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($pelayanan_bulan_ini as $pelayanan_bulan_ini) { ?>
                                <tr>
                                    <td><?php echo $pelayanan_bulan_ini->nama_kota; ?></td>
                                    <td><?php if($pelayanan_bulan_ini->jumlah_angka==NULL){
                                            echo "0";
                                        } else {
                                            echo $pelayanan_bulan_ini->jumlah_angka;
                                        } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div><!-- table-responsive -->
                </div> <!-- col -->

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 20px;">
                    <h4>Tahun Ini</h4>
                    <div class="table-responsive">
                        <table id="" class="table mg-b-0 table-bordered">
                            <thead>
                                <tr>
                                    <th>Kota</th>
                                    <th>Jumlah Angka</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($pelayanan_tahun_ini as $pelayanan_tahun_ini) { ?>
                                <tr>
                                    <td><?php echo $pelayanan_tahun_ini->nama_kota; ?></td>
                                    <td><?php if($pelayanan_tahun_ini->jumlah_angka==NULL){
                                            echo "0";
                                        } else {
                                            echo $pelayanan_tahun_ini->jumlah_angka;
                                        } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div><!-- table-responsive -->
                </div> <!-- col -->

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 20px;">
                    <h4>Keseluruhan</h4>
                    <div class="table-responsive">
                        <table id="" class="table mg-b-0 table-bordered">
                            <thead>
                                <tr>
                                    <th>Kota</th>
                                    <th>Jumlah Angka</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($pelayanan_keseluruhan as $pelayanan_keseluruhan) { ?>
                                <tr>
                                    <td><?php echo $pelayanan_keseluruhan->nama_kota; ?></td>
                                    <td><?php if($pelayanan_keseluruhan->jumlah_angka==NULL){
                                            echo "0";
                                        } else {
                                            echo $pelayanan_keseluruhan->jumlah_angka;
                                        } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div><!-- table-responsive -->
                </div> <!-- col -->
            </div> <!-- row -->
        </div><!-- section-wrapper -->
    </div><!-- container -->
</div><!-- slim-mainpanel -->
