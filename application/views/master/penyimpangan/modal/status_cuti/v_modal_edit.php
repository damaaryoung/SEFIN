<div class="modal fade" id="modal_edit_status_cuti" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title_modal_edit">Ubah Status Cuti</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="status_cuti_form_edit">
      <div class="modal-body">
        <div class="card">
            <div class="card-body">
                    <div class="form-group">
                        <input type="hidden" name="nama" id="nama" >
                        <label>Nama</label>
                        <h6 id="text_nama_approval"></h6>
                    </div>
                    <div class="form-group">
                        <label>Plafon CAA</label>
                        <input type="text" class="form-control" id="plafon_caa" name="plafon_caa">
                    </div>
                    <div class="form-group">
                        <label>Status Cuti</label>
                        <select name="flg_cuti" id="flg_cuti" class="form-control">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Close">
        <input type="submit" class="btn btn-primary" id="btn_edit_status_cuti" value="Save">
      </div>
      </form>
    </div>
  </div>
</div>