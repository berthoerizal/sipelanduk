<div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
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
        <p><?php  
        ?></p>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 20px;">
            <h5>Pendaftaran Penduduk</h5>
              <?php echo form_open(base_url('admin/layanan/input_data'));  ?>
              <select class="form-control select2-show-search" name="id_layanan" data-placeholder="Pendaftaran Penduduk">
                <?php foreach($layanan1 as $layanan1){ ?>
                  <option value="<?php echo $layanan1->id_layanan; ?>"><?php echo $layanan1->nama_layanan; ?></option>
                <?php } ?>
              </select>
              <div class="form-group">
              <input type="number" class="form-control" name="jumlah_angka" placeholder="Masukkan Jumlah Angka" required> 
              <input type="text" class="form-control  fc-datepicker" name="tanggal_angka" placeholder="MM/DD/YYYY">
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
              <?php echo form_close(); ?>
            </div><!-- col-4 -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 20px;">
            <h5>Pencatatan Sipil</h5>
            <?php echo form_open(base_url('admin/layanan/input_data'));  ?>
              <select class="form-control select2-show-search" name="id_layanan" data-placeholder="Pendaftaran Penduduk">
                <?php foreach($layanan2 as $layanan2){ ?>
                  <option value="<?php echo $layanan2->id_layanan; ?>"><?php echo $layanan2->nama_layanan; ?></option>
                <?php } ?>
              </select>
              <div class="form-group">
              <input type="number" class="form-control" name="jumlah_angka" placeholder="Masukkan Jumlah Angka" required> 
              <input type="text" class="form-control  fc-datepicker" name="tanggal_angka" placeholder="MM/DD/YYYY">
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
              <?php echo form_close(); ?>
            </div>
          </div><!-- row -->
          
                  
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 20px;">
              <div class="table-responsive">
                <table id="" class="table mg-b-0 table-bordered">
                  <thead>
                    <tr>
                      <th>Layanan</th>
                      <th>Jumlah Angka</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($angka_layanan1 as $angka_layanan1) { ?>
                    <tr>
                      <td><?php echo $angka_layanan1->nama_layanan; ?></td>
                      <td><?php echo $angka_layanan1->jumlah_angka; ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div><!-- table-wrapper -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 20px;">
              <div class="table-responsive">
                <table id="" class="table mg-b-0 table-bordered">
                  <thead>
                    <tr>
                      <th>Layanan</th>
                      <th>Jumlah Angka</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($angka_layanan2 as $angka_layanan2) { ?>
                    <tr>
                      <td><?php echo $angka_layanan2->nama_layanan; ?></td>
                      <td><?php echo $angka_layanan2->jumlah_angka; ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div><!-- table-wrapper -->
            </div>
          </div>
        </div><!-- section-wrapper -->
      </div><!-- container -->
    </div><!-- slim-mainpanel -->
