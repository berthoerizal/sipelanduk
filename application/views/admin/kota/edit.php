<!-- BASIC MODAL -->
<a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit<?php echo $kota->id_kota; ?>"><i class="fa fa-edit"></i> Edit</a>
<div id="edit<?php echo $kota->id_kota; ?>" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Kota</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php $attribut='class="form-horizontal"'; 
            echo form_open(base_url('admin/kota/edit/'.$kota->id_kota),$attribut); 
            ?>
          <div class="modal-body pd-25">
                <div class="form-group">
                    <label for="nama_kota">Nama Kota</label>
                    <input class="form-control" id="nama_kota" name="nama_kota" type="text" placehoder="Masukkan Nama Kota" value="<?php echo $kota->nama_kota; ?>">
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->
