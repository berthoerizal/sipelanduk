<!-- BASIC MODAL -->
<a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit<?php echo $layanan->id_layanan; ?>"><i class="fa fa-edit"></i> Edit</a>
<div id="edit<?php echo $layanan->id_layanan; ?>" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit layanan</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php $attribut='class="form-horizontal"'; 
            echo form_open(base_url('admin/layanan/edit/'.$layanan->id_layanan),$attribut); 
            ?>
          <div class="modal-body pd-25">
                <div class="form-group">
                    <label for="nama_layanan">Nama Layanan</label>
                    <input class="form-control" id="nama_layanan" name="nama_layanan" type="text" placehoder="Masukkan Nama Layanan" value="<?php echo $layanan->nama_layanan; ?>">
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->
