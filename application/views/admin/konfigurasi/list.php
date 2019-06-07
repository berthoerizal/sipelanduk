<style>
    .logo_web{
        width: 200px;
        border: 3px solid #eee;
    }
</style>
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


        echo validation_errors('<div class="alert alert-warning">','</div>'); ?>


        <?php if(isset($error)) {
                echo '<div class="alert alert-warning">';
                echo $error;
                echo '</div>';
            } 
        ?>
        <?php echo form_open_multipart(base_url('admin/konfigurasi')); ?>
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-md-6">
              <input type="hidden" name="id_konfigurasi" value="<?php echo $konfigurasi->id_konfigurasi ?>">
                  <div class="form-group">
                      <label for="namaweb">Nama Website</label>
                      <input type="text" name="namaweb" class="form-control" id="namaweb" placeholder="Masukkan Nama Website" value="<?php echo $konfigurasi->namaweb; ?>">
                  </div>
                  <div class="form-group">
                      <label for="website">URL Website</label>
                      <input type="url" name="website" class="form-control" id="website" placeholder="Masukkan URL Website" value="<?php echo $konfigurasi->website; ?>">
                  </div>
                  <div class="form-group">
                      <label for="email">Email Website</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email Website" value="<?php echo $konfigurasi->email; ?>">
                  </div>
                  <div class="form-group">
                      <label for="telepon">Nomor Telepon Website</label>
                      <input type="tel" name="telepon" class="form-control" id="telepon" placeholder="Masukkan Nomor Telepon Website" value="<?php echo $konfigurasi->telepon; ?>">
                  </div>
                  <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"><?php echo $konfigurasi->alamat; ?></textarea>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="deskripsi">Deskripsi Website</label>
                      <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukkan Deskripsi Website" value="<?php echo $konfigurasi->deskripsi; ?>">
                  </div>
                  <div class="form-group">
                      <label for="keywords">Keywords Website</label>
                      <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Masukkan Keywords Website" value="<?php echo $konfigurasi->keywords; ?>">
                  </div>
                  <div class="form-group">
                      <label for="metatext">Metatext Website</label>
                      <input type="text" name="metatext" class="form-control" id="metatext" placeholder="Masukkan Metatext Website" value="<?php echo $konfigurasi->metatext; ?>">
                  </div>
                  <div class="form-group">
                      <label for="logo">Logo Website</label>
                      <input type="file" class="form-control" name="logo" id="logo" required><br>
                      <a href="<?php echo base_url('assets/upload/image/'.$konfigurasi->logo); ?>" class="thumbnail"><img src="<?php echo base_url('assets/upload/image/'.$konfigurasi->logo); ?>" alt="Logo Website" class="logo_web img-responsive"></a>
                  </div>
              </div>
            </div><!-- row -->
            <div class="form-layout-footer">
              <button type="submit" name="submit" class="btn btn-primary bd-0">Simpan</button>
              <button class="btn btn-secondary bd-0">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          <?php echo form_close(); ?>
        </div><!-- section-wrapper -->
      </div><!-- container -->
    </div><!-- slim-mainpanel -->
