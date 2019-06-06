<!-- BASIC MODAL -->
<a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?php echo $user->id_user; ?>"><i class="fa fa-trash"></i> Hapus</a>
<div id="hapus<?php echo $user->id_user; ?>" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Hapus Data</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-25">
               <h4>Yakin ingin menghapus <?php echo $user->username ?> ?</h4>
          </div>
          <div class="modal-footer">
            <a href="<?php echo base_url('admin/pengelola/hapus/'.$user->id_user); ?>" class="btn btn-primary" >Hapus</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->
