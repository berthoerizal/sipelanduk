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
            <br><br>
            <table id="datatable1" class="table mg-b-0 table-bordered">
              <thead>
                <tr>
                  <th class="wd-5p">No.</th>
                  <th class="wd-30p">Kota</th>
                </tr>
              </thead>
              <tbody>
              <?php $x=0; foreach($kota as $kota) { ?>
                <tr>
                  <td><?php $x=$x+1; echo $x; ?></td>
                  <td><?php echo $kota->nama_kota; ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
