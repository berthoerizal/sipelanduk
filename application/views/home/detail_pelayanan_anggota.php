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
             <li class="breadcrumb-item"><b><?php echo $hari_ini; ?>, <?php echo date('d M Y'); ?></b> Last Updated at <?php
            foreach($last_update as $last_update){ echo date("H:i:s",strtotime($last_update->tanggal_update)); }?></li>
          </ol>
            <h6 class="slim-pagetitle"><?php echo $title; ?></h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
            <div class="row">
            <div class="col-md-12">
                <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="margin-bottom: 20px;">
                <div class="card card-status">
                    <div class="media">
                    <div class="media-body">
                        <?php if($count_hari_ini->jumlah_angka==NULL){
                            $count_hari_ini->jumlah_angka=0;
                        } if($count_anggota_hari_ini->jumlah_angka==NULL){
                            $count_anggota_hari_ini->jumlah_angka=0;
                        } ?>
                        <span>
                        <h1 class="pull-right"><?php echo $count_hari_ini->jumlah_angka; ?> (<?php echo $count_anggota_hari_ini->jumlah_angka; ?>)</h1><br><br>
                        <p style="color: black; font-weight: bold; text-transform: capitalize;" class="pull-right"><?php 
                        echo $hari_ini; ?>, <?php echo date('d M Y'); ?></p></span>
                    </div><!-- media-body -->
                    </div><!-- media -->
                </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="margin-bottom: 20px;">
                <div class="card card-status">
                    <div class="media">
                    <div class="media-body">
                        <?php if($count_bulan_ini->jumlah_angka==NULL){
                            $count_bulan_ini->jumlah_angka=0;
                        } if($count_anggota_bulan_ini->jumlah_angka==NULL){
                            $count_anggota_bulan_ini->jumlah_angka=0;
                        } ?>
                        <span>
                        <h1 class="pull-right"><?php echo $count_bulan_ini->jumlah_angka; ?> (<?php echo $count_anggota_bulan_ini->jumlah_angka; ?>)</h1><br><br>
                        <p style="color: black; font-weight: bold; text-transform: capitalize;" class="pull-right"><?php echo date('M Y'); ?></p></span>
                    </div><!-- media-body -->
                    </div><!-- media -->
                </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="margin-bottom: 20px;">
                <div class="card card-status">
                    <div class="media">
                    <div class="media-body">
                        <?php if($count_tahun_ini->jumlah_angka==NULL){
                            $count_tahun_ini->jumlah_angka=0;
                        } if($count_anggota_tahun_ini->jumlah_angka==NULL){
                            $count_anggota_tahun_ini->jumlah_angka=0;
                        } ?>
                        <span>
                        <h1 class="pull-right"><?php echo $count_tahun_ini->jumlah_angka; ?> (<?php echo $count_anggota_tahun_ini->jumlah_angka; ?>)</h1><br><br>
                        <p style="color: black; font-weight: bold; text-transform: capitalize;" class="pull-right"><?php echo date('Y'); ?></p></span>
                    </div><!-- media-body -->
                    </div><!-- media -->
                </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="margin-bottom: 20px;">
                <div class="card card-status">
                    <div class="media">
                    <div class="media-body">
                        <?php if($count_keseluruhan->jumlah_angka==NULL){
                            $count_keseluruhan->jumlah_angka=0;
                        } if($count_anggota_keseluruhan->jumlah_angka==NULL){
                            $count_anggota_keseluruhan->jumlah_angka=0;
                        } ?>
                        <span>
                        <h1 class="pull-right"><?php echo $count_keseluruhan->jumlah_angka; ?> (<?php echo $count_anggota_keseluruhan->jumlah_angka; ?>)</h1><br><br>
                        <p style="color: black; font-weight: bold; text-transform: capitalize;" class="pull-right">Keseluruhan Hingga Tahun <?php echo date('Y'); ?></p></span>
                    </div><!-- media-body -->
                    </div><!-- media -->
                </div><!-- card -->
                </div><!-- col-3 -->
                </div>
            </div>
            </div>            
            <div class="row">
                <div class="col-md-12">
                    <h4>Berdasarkan Jumlah Surat</h4><hr>
                </div>
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


            <br>
            <div class="row">
                <div class="col-md-12">
                     <h4>Berdasarkan Anggota</h4><hr>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 20px;">
                    <h4>Hari Ini</h4>
                    <div class="table-responsive">
                        <table id="" class="table mg-b-0 table-bordered">
                            <thead>
                                <tr>
                                    <th>Kota</th>
                                    <th>LK</th>
                                    <th>PR</th>
                                    <th>Jumlah Angka</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($anggota_hari_ini as $anggota_hari_ini) { ?>
                                <tr>
                                    <td><?php echo $anggota_hari_ini->nama_kota; ?></td>
                                    <td><?php if($anggota_hari_ini->lk==0 || $anggota_hari_ini->lk==NULL){ echo "-"; } else { echo $anggota_hari_ini->lk; } ?></td>
                                    <td><?php if($anggota_hari_ini->pr==0 || $anggota_hari_ini->pr==NULL) { echo "-"; } else { echo $anggota_hari_ini->pr; } ?></td>
                                    <td><?php if($anggota_hari_ini->jumlah_angka==NULL){
                                            echo "0";
                                        } else {
                                            echo $anggota_hari_ini->jumlah_angka;
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
                                    <th>LK</th>
                                    <th>PR</th>
                                    <th>Jumlah Angka</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($anggota_bulan_ini as $anggota_bulan_ini) { ?>
                                <tr>
                                    <td><?php echo $anggota_bulan_ini->nama_kota; ?></td>
                                    <td><?php if($anggota_bulan_ini->lk==0 || $anggota_bulan_ini->lk==NULL){ echo "-"; } else { echo $anggota_bulan_ini->lk; } ?></td>
                                    <td><?php if($anggota_bulan_ini->pr==0 || $anggota_bulan_ini->pr==NULL) { echo "-"; } else { echo $anggota_bulan_ini->pr; } ?></td>
                                    <td><?php if($anggota_bulan_ini->jumlah_angka==NULL){
                                            echo "0";
                                        } else {
                                            echo $anggota_bulan_ini->jumlah_angka;
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
                                    <th>LK</th>
                                    <th>PR</th>
                                    <th>Jumlah Angka</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($anggota_tahun_ini as $anggota_tahun_ini) { ?>
                                <tr>
                                    <td><?php echo $anggota_tahun_ini->nama_kota; ?></td>
                                    <td><?php if($anggota_tahun_ini->lk==0 || $anggota_tahun_ini->lk==NULL){ echo "-"; } else { echo $anggota_tahun_ini->lk; } ?></td>
                                    <td><?php if($anggota_tahun_ini->pr==0 || $anggota_tahun_ini->pr==NULL) { echo "-"; } else { echo $anggota_tahun_ini->pr; } ?></td>
                                    <td><?php if($anggota_tahun_ini->jumlah_angka==NULL){
                                            echo "0";
                                        } else {
                                            echo $anggota_tahun_ini->jumlah_angka;
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
                                    <th>LK</th>
                                    <th>PR</th>
                                    <th>Jumlah Angka</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($anggota_keseluruhan as $anggota_keseluruhan) { ?>
                                <tr>
                                    <td><?php echo $anggota_keseluruhan->nama_kota; ?></td>
                                    <td><?php if($anggota_keseluruhan->lk==0 || $anggota_keseluruhan->lk==NULL){ echo "-"; } else { echo $anggota_keseluruhan->lk; } ?></td>
                                    <td><?php if($anggota_keseluruhan->pr==0 || $anggota_keseluruhan->pr==NULL) { echo "-"; } else { echo $anggota_keseluruhan->pr; } ?></td>
                                    <td><?php if($anggota_keseluruhan->jumlah_angka==NULL){
                                            echo "0";
                                        } else {
                                            echo $anggota_keseluruhan->jumlah_angka;
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
