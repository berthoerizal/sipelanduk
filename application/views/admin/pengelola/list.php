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
          <div class="table-wrapper  table-responsive">
            <?php include('tambah.php'); ?>
            <br><br>
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Nama</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-20p">Nomor Telepon</th>
                  <th class="wd-15p">Tanggal Terdaftar</th>
                  <th class="wd-10p">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($user as $user) { ?>
                <tr>
                  <td><?php echo $user->nama; ?></td>
                  <td><?php echo $user->email; ?><br><?php echo $user->nomor_telepon ?></td>
                  <td><?php if($user->akses_level==21) { echo "Pengelola"; } else { echo "Pengguna"; } ?></td>
                  <td><?php echo date("d M Y", strtotime( $user->tanggal_daftar)); ?></td>
                  <td>
                  <a href="<?php echo base_url('admin/pengelola/detail/'.$user->username); ?>" class="btn btn-primary btn-sm"><i class="fa fa-user"></i> Detail</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
