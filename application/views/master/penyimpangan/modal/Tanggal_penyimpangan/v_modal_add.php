<div class="modal fade" id="modal_add_tanggal_penyimpangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title_modal_add">Tambah Tanggal Penyimpangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="tanggal_penyimpangan_form_add">
      <div class="modal-body">
        <div class="card">
            <div class="card-body">
                    <!-- <input type="hidden" name="id_tanggal_penyimpangan" id="id_tanggal_penyimpangan" value=0> -->
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="date" class="form-control" id="start_date" placeholder="Tanggal Mulai" name="start_date">
                        <!-- <span id="start_date_error" class="text-danger"></span> -->
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input type="date" class="form-control" id="end_date" placeholder="Tanggal Selesai" name="end_date">
                        <!-- <span id="end_date_error" class="text-danger"></span> -->
                    </div>
                    <div class="form-group">
                        <label for="">Parameter Penyimpangan</label><br>
                        <div id="result_param_penyimpangan">
                        </div>
                        <!-- <span id="penyimpangan_error" class="text-danger"></span> -->
                    </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Close">
        <input type="submit" class="btn btn-primary" id="btn_save_tanggal_penyimpangan" value="Save">
      </div>
      </form>
    </div>
  </div>
</div>