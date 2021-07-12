<div class="modal fade" id="modal_edit_sub_kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Sub Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="penyimpangan_form_edit">
      <div class="modal-body">
        <div class="card">
            <div class="card-body">
                    <div class="form-group">
                    <input type="hidden" id="parent_penyimpangan_edit">
                    <input type="hidden" name="id" id="id_penyimpangan_edit">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama_edit" placeholder="Nama" name="nama">
                        <span id="nama_error" class="text-danger"></span>
                    </div>
                    <div class="form-group mj-pic-edit">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="flg_aktif" id="status_edit" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Non Active</option>
                        </select>
                        <span id="nama_error" class="text-danger"></span>
                    </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Close">
        <input type="submit" class="btn btn-primary" id="btn_edit_penyimpangan" value="Edit">
      </div>
      </form>
    </div>
  </div>
</div>