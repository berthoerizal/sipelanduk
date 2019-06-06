<div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/pengelola'); ?>">Pengelola</a></li>
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
        <p>Tanggal Terdaftar: <?php echo date("d M Y", strtotime($user->tanggal_daftar)); ?></p>
        <?php echo form_open(base_url('admin/pengelola/detail/'.$this->encrypt->encode($user->username))); ?>
          <div class="form-layout form-layout-2">
            <div class="row no-gutters">
              <div class="col-md-3">
                <div class="form-group">
                  <label class="form-control-label">Nama <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="nama" value="<?php echo $user->nama; ?>" placeholder="Masukkan Nama">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-3 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                  <label class="form-control-label">Username: <span class="tx-danger"></span></label>
                  <p><?php echo $user->username; ?></p>
                  <input class="form-control" type="hidden" name="username" value="<?php echo $user->username; ?>" disabled>
                </div>
              </div><!-- col-4 -->
              <div class="col-md-6 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                  <label class="form-control-label">Email address: <span class="tx-danger"></span></label>
                  <input class="form-control" type="email" name="email" value="<?php echo $user->email; ?>" placeholder="Masukkan email">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-6">
                <div class="form-group bd-t-0-force">
                <label class="form-control-label mg-b-0-force">Kota / Kabupaten <span class="tx-danger">*</span></label>
                
                  <?php if($this->session->userdata('akses_level')==10) { ?>
                    <p><?php echo $user->nama_kota; ?></p>
                    <input class="form-control" type="hidden" name="id_kota" value="<?php echo $user->id_kota; ?>">
                  <?php } elseif($this->session->userdata('akses_level')==21) { ?>
                    <select id="select2-a" class="form-control" name="id_kota" data-placeholder="Pilih Kota/Kabupaten">
                    <?php foreach ($kota as $kota) { ?>
                    <option value="<?php echo $kota->id_kota ?>" <?php if($user->id_kota==$kota->id_kota) { echo "selected"; } ?>> <?php echo $kota->nama_kota ?></option>
                    <?php } ?>
                    </select>
                  <?php } ?>

                </div>
              </div><!-- col-8 -->
              <div class="col-md-6">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Nomor Telepon/Hp: <span class="tx-danger"></span></label>
                  <input class="form-control" type="tel" name="nomor_telepon" value="<?php echo $user->nomor_telepon; ?>" placeholder="Masukkan Nomor Telepon/Hp">
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
            <div class="form-layout-footer bd pd-20 bd-t-0">
              <button type="submit" name="submit" class="btn btn-primary bd-0">Simpan</button>
              <button class="btn btn-secondary bd-0" type="reset" >Reset</button>
              
          <?php echo form_close(); ?>
              <?php include('updatepassword.php'); ?>
            </div><!-- form-group -->
          </div><!-- form-layout -->
        </div><!-- section-wrapper -->
      </div><!-- container -->
    </div><!-- slim-mainpanel -->