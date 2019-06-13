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
              <div class="d-flex align-items-center justify-content-center bg-gray-100 ht-md-80 bd pd-x-20">
                <div class="d-md-flex pd-y-20 pd-md-y-0">
                  <input type="number" class="form-control" placeholder="Laki-laki" name="lk" id="lk1" onkeyup="sum1();">
                  <input type="number" class="form-control" placeholder="Perempuan" name="pr" id="pr1" onkeyup="sum1();">
                  <input type="number" class="form-control" placeholder="Jumlah Angka" name="jumlah_angka" id="jumlah_angka1" required>
                </div>
              </div><!-- d-flex -->
              <div class="form-group">
              <input type="text" class="form-control  fc-datepicker" name="tanggal_angka" placeholder="MM/DD/YYYY" required>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-default" onclick="reset1()">Reset</button>
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
              <div class="d-flex align-items-center justify-content-center bg-gray-100 ht-md-80 bd pd-x-20">
                <div class="d-md-flex pd-y-20 pd-md-y-0">
                  <input type="number" class="form-control" placeholder="Laki-laki" name="lk" id="lk2" onkeyup="sum2();">
                  <input type="number" class="form-control" placeholder="Perempuan" name="pr" id="pr2" onkeyup="sum2();">
                  <input type="number" class="form-control" placeholder="Jumlah Angka" name="jumlah_angka" id="jumlah_angka2" required>
                </div>
              </div><!-- d-flex -->
              <div class="form-group">
              <input type="text" class="form-control  fc-datepicker" name="tanggal_angka" placeholder="MM/DD/YYYY" required>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-default" onclick="reset2()">Reset</button>
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
<script>
function sum1(){
  var lk1 = document.getElementById('lk1').value;
  var pr1 = document.getElementById('pr1').value;

  if(lk1==""){
    lk1=0;
  }
  if(pr1==""){
    pr1=0;
  }
  
  if(lk1!="" || pr1!=""){
    document.getElementById("jumlah_angka1").readOnly = true; 
  } else {
    document.getElementById("jumlah_angka1").readOnly = false; 
  }

  var jumlah_angka1 = parseInt(lk1) + parseInt(pr1);

  if(!isNaN(jumlah_angka1)){
    document.getElementById('jumlah_angka1').value = jumlah_angka1;
  }
}

function sum2(){
  var lk2 = document.getElementById('lk2').value;
  var pr2 = document.getElementById('pr2').value;
  
  if(lk2==""){
    lk2=0;
  }
  if(pr2==""){
    pr2=0;
  }
  
  if(lk2!="" || pr2!=""){
    document.getElementById("jumlah_angka2").readOnly = true; 
  } else {
    document.getElementById("jumlah_angka2").readOnly = false; 
  }

  var jumlah_angka2 = parseInt(lk2) + parseInt(pr2);
  
  if(!isNaN(jumlah_angka2)){
    document.getElementById('jumlah_angka2').value = jumlah_angka2;
  }
}

function reset1(){
  document.getElementById("jumlah_angka1").readOnly = false; 
}
function reset2(){
  document.getElementById("jumlah_angka2").readOnly = false; 
}
</script>