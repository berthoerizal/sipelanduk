<!-- BASIC MODAL -->
<a href="" class="btn btn-warning btn-md pull-right" data-toggle="modal" data-target="#tambah">Update Password</a>
<div id="tambah" class="modal fade">
  <div class="modal-dialog modal-dialog-vertical-center" role="document">
    <div class="modal-content bd-0 tx-14">
      <div class="modal-header">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Update Password</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open(base_url('admin/pengelola/updatepassword/' . $user->username)); ?>
      <div class="modal-body pd-25">
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" id="password" name="password" type="password" placehoder="Masukkan Password" value="<?php echo set_value('password') ?>">
        </div>
        <div class="form-group">
          <label for="confirm_password">Konfirmasi Password</label>
          <input class="form-control" id="confirm_password" name="confirm_password" type="password" placehoder="Masukkan Konfirmasi Password" value="<?php echo set_value('confirm_password') ?>">
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