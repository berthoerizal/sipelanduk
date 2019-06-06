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
          <div class="table-responsive">
            <?php include('tambah.php'); ?>
            <br><br>
            <table id="datatable1" class="table mg-b-0 table-bordered">
              <thead>
                <tr>
                  <th class="wd-5p">No.</th>
                  <th class="wd-25p">Username</th>
                  <th>Kota / Kabupaten</th>
                  <th class="wd-30p">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php $x=0; foreach($user as $user) { ?>
                <tr>
                  <td><?php $x=$x+1; echo $x; ?></td>
                  <td><b><?php echo $user->username; ?></b>
                      <br>
                      <?php if($user->akses_level==21) { 
                        echo "Pengelola"; 
                      } elseif($user->akses_level==10) { 
                        echo "Pengguna"; 
                      } else { 
                        echo "Tidak Diketahui"; 
                      } ?>
                  </td>
                  <td><strong><?php echo $user->nama_kota; ?></strong></td>
                  <td>
                  <a href="<?php echo base_url('admin/pengelola/detail/'.$this->encrypt->encode($user->username)); ?>" class="btn btn-primary btn-sm"><i class="fa fa-user"></i> Detail</a>
                  <?php include('hapus.php'); ?>
                  <?php include('resetpassword.php'); ?>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
