<!-- BASIC MODAL -->
<a href="" class="btn btn-primary btn-md" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah</a>
<div id="tambah" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Tambah Pengelola</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php $attribut='class="form-horizontal"'; 
            echo form_open(base_url('admin/pengelola'),$attribut); 
            ?>
          <div class="modal-body pd-25">
                <div class="form-group">
                    <label for="id_kota">Kota</label>
                    <select name="id_kota" id="id_kota" class="form-control">
                        <option value="1">-- Pilih Kota --</option>
                        <option value="2">Batam</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" id="username" name="username" type="text" placehoder="Masukkan Username" value="<?php echo set_value('username')?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" name="password" type="password" placehoder="Masukkan Password" value="<?php echo set_value('password')?>">
                </div>
                <div class="form-group">
                    <label for="akses_level">Akses Level</label>
                    <select name="akses_level" id="akses_level" class="form-control">
                        <option value="1">Pengelola</option>
                        <option value="2">Pengguna</option>
                    </select>
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
