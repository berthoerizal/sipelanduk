<!-- BASIC MODAL -->
<a href="" class="btn btn-primary btn-md" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah</a>
<div id="tambah" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Tambah Layanan</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php echo form_open(base_url('admin/layanan'));  ?>
          <div class="modal-body pd-25">
                <div class="form-group">
                    <label for="nama_layanan">Nama Layanan</label>
                    <input class="form-control" id="nama_layanan" name="nama_layanan" type="text" placehoder="Masukkan Nama Layanan" value="<?php echo set_value('nama_layanan')?>">
                </div>
                <div class="form-group">
                  <label for="kategori_layanan">Kategori Layanan</label>
                  <select name="kategori_layanan" id="kategori_layanan" class="form-control">
                    <option value="1">Pendaftaran Penduduk</option>
                    <option value="2">Pencatatan Sipil</option>
                  </select>
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
